<?php

/**
 * 测试发送UDP消息
 * @param string $sendMsg
 * @param string $ip
 * @param string $port
 *
 * @return bool|string
 */
function udpGet($sendMsg = '', $ip = '10.138.6.61', $port = '8080'){
    $handle = stream_socket_client("udp://{$ip}:{$port}", $errno, $errstr);
    if( ! $handle){
        die("ERROR: {$errno} - {$errstr}\n");
    }

    fwrite($handle, $sendMsg."\n");
    $result = fread($handle, 1024);
    fclose($handle);

    return $result;
}

echo udpGet('Hello World');

