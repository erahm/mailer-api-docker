<?php
namespace app\models;

class Message {

    public $to = array();
    public $from = '';
    public $replyTo = '';
    public $subject = '';
    public $body = '';
    public $cc = array();
    public $bcc = array();
    public $mimeVersion = "1.0"
    public $contentType = 'text/plain; charset="utf-8"'
    protected $headers = '';

    public function buildHeaders() {
        $this->header = "From: {$this->from}\r\n";
        $this->header .= "Reply-To: {$this->replyTo}";
        $this->header .= "Cc: " . implode( ',', $cc ) . "\r\n";
        $this->header .= "Bcc: " . implode( ',', $bcc ) . "\r\n";
        $this->header .= "MIME-Version: {$this->mimeVersion} \r\n";
        $this->header .= "Content-type: {$this->contentType} \r\n";
    }

    public function getHeaders() {
        return $this->headers;
    }
}
