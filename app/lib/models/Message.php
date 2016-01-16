<?php
namespace models;

class Message {

    public $to = array();
    public $from;
    public $subject;
    public $body;
    public $cc = array();
    public $bcc = array();
    public $mimeVersion = "1.0"
    public $contentType = 'text/plain; charset="utf-8"'

}
