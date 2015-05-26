<?php
require __DIR__.'/classes/Server.php';

$serv = new QueueServer();
$serv->listen();


