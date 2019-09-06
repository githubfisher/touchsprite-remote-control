<?php

function udpGet($sendMsg = '', $ip = '10.138.6.61', $port = '14099'){
    $handle = stream_socket_client("udp://{$ip}:{$port}", $errno, $errstr);
    if( ! $handle){
        die("ERROR: {$errno} - {$errstr}\n");
    }

    fwrite($handle, $sendMsg."\n");
    $result = fread($handle, 1024);
    fclose($handle);

    return $result;
}

try {
    $result = udpGet('Hello World');

    var_export($result);
} catch (\Exception $e) {
    var_export($e->getMessage());
}

