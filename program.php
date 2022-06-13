<?php
    $command = "Hello from PHP";
    $address = "127.0.0.1";
    $port = 5500;

    $socket_object = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
    socket_sendto($socket_object, $command, strlen($command), 0, $address, $port);
    socket_close($socket_object);
?>