<?php

function getAuth()
{
    $data    = [
        'action'  => 'getAuth',
        'key'     => Constant::KEY,
        'devices' => Constant::DEVICES,
        'valid'   => 3600,
        'time'    => time(),
    ];

    $client   = new \GuzzleHttp\Client([
        'base_uri' => Constant::BASE_API_URI,
        'timeout'  => 30,
    ]);
    $response = $client->post('', [
        'json' => $data
    ]);
    $body     = $response->getBody();
    $body     = json_decode($body, true);
    if ($body) {
        if ($body['status'] == 200) {
            return $body;
        }
    }

    return false;
}
