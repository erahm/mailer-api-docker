<?PHP
namespace app\models;
use Message;

class MessageFactory {

    public staic messageFromArray( array $data ) {
        $message = new Message;

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
            case "reply-to":
                $message->replyTo = $value;
                break;
            case "content-type":
                $message->contentType = $value;
                break;
            default:
                break;
            }
        }

        $message->buildHeaders();

        return $message;
    }
}
