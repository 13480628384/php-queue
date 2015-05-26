<?php
require __DIR__.'/classes/Client.php';

$array = json_encode([
    'A' => str_repeat('A', rand(100, 900)),
    'B' => str_repeat('B', rand(1024, 8192)),
    'C' => rand(100, 999),
]);

$client = new QueueClient('127.0.0.1', 9510);

$s = microtime(true);
for ($i = 0; $i < 100; $i++)
{
    //$client->push(serialize($array));
    $data = $client->pop();
    var_dump($data);
}

echo "use " . ((microtime(true) - $s) * 1000) . "ms\n";

