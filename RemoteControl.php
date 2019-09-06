<?php
require 'vendor/autoload.php';

$apiUrl  = ' http://openapi.touchsprite.com/api/openapi';
$key     = 'YzFy6R1Yk7E2kMa3IIzY3t9IvDBX9On6t6JhxWU2D1jvYoylN6pZWXyppZeaKdAX';
$devices = ['b6c57c4496e3180d101a325c76c95f6b9'];
$data    = [
    'action'  => 'getAuth',
    'key'     => $key,
    'devices' => $devices,
    'valid'   => 3600,
    'time'    => time(),
];
