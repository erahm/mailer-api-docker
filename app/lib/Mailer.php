<?php
use models\Message;

class Mailer {

    public function sendMail( $data ) {
        $message = new Message;
        $this->buildMessage( $message, $data );
    }

    protected buildMessage( $message, array $data ) {
        foreach ( $data as $key => $value ) {
            switch( $key ) {
            case "to":
            case "cc":
            case "bcc":
                    if ( is_array( $value ) ) {
                        $message->$key = $value;
                    }
                    else {
                        array_push( $message->$key, $value );
                    }
                    break;
            case "from":
            case "subject":
            case "body":
                $message->$key = $value;
                break;
            case "content-type":
                $message->contentType = $value;
                break;
            default:
                break;
            }
        }
    }
}
