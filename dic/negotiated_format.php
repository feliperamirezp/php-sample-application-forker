<?php

#require __DIR__ . '/../../vendor/autoload.php';
require_once "../vendor/autoload.php";
/**
 * Returns the best negotiated format according to RFC 7231.
 */

return (new \Negotiation\Negotiator())
    ->getBest($_SERVER["HTTP_ACCEPT"], ['text/html', 'application/json'])
    ->getValue();
