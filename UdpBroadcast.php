<?php

/**
 * 触动精灵的手机与广播主机必须处于一个局域网内
 * 否则收不到广播消息
 */
$json = '{"ip":"192.168.43.62", "port":8080}';
$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
socket_set_option($sock, SOL_SOCKET, SO_BROADCAST, 1);
socket_sendto($sock, $json, strlen($json), 0, '255.255.255.255', 14099);
socket_close($sock);
