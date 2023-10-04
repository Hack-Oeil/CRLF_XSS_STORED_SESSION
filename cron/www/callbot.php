<?php
use WebSocket\Client;

if(!defined('HO_LICENSE')) {
    require_once __DIR__ . '/vendor/autoload.php';
    define('ROOT_DIR', __DIR__);
}

const DEFAULT_HOST = 'http://ho-webserver';
$client = new Client('ws://ho-cyrhades-bot:8282');
$data = [
    "host"      => DEFAULT_HOST,
    "type"      => "call_url",
    "redirect"  => DEFAULT_HOST."/bac9d3f378a2"
];
try {$client->send(json_encode($data));}catch(Exception $e){}finally{$client->close();}

