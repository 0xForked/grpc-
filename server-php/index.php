<?php declare(strict_types=1);

mb_internal_encoding('UTF-8');
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'stderr');

require_once __DIR__ . '/vendor/autoload.php';

use Bakode\gRPC\ChatClient;
use Bakode\gRPC\ChatContact;
use Spiral\Goridge\StreamRelay;
use Spiral\GRPC\Server;
use Spiral\RoadRunner\Worker;

$server = new Server(null, ['debug' => false]);

$server->registerService(ChatContact::class, new ChatClient());

$worker = method_exists(Worker::class, 'create')
    ?: new Worker(new StreamRelay(STDIN, STDOUT));

$server->serve($worker);
