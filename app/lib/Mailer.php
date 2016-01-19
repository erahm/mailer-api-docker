<?php
namespace app\lib;
use app\models\MessageFactory;

class Mailer {

    public function sendMail( array $data ) {
        $message = MessageFactory::messageFromArray( $data );

        if ( is_array( $message->to ) ) {
            $to = implode( ',', $message->to );
        }
        else {
            $to = $message->to;
        }

        return mail( $to, $message->subject, $message->body, $message->getHeaders() );
    }
