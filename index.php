<?php

require './vendor/autoload.php';

use ReactChat\Chat;
use ReactChat\Member;
use React\Socket\Server;
use React\EventLoop\Factory;
use React\Socket\ConnectionInterface;
use React\Stream\WritableResourceStream;

$loop = Factory::create();
$socket = new Server('127.0.0.1:7181', $loop);
$stdout = new WritableResourceStream(\STDOUT, $loop);

$chat = new Chat();

$socket->on('connection', static function (ConnectionInterface $connection) use ($chat) {
    $member = new Member($connection);
    $member->write('Informe o seu nome: ');

    $connection->on('data', static function ($data) use ($member, $chat) {
        if ($data !== '' && $member->getName() === null) {
            // Define o nome do membro
            $member->setName(\str_replace(["\r", "\n"], '', $data));
            // Adiciona o membro ao chat
            $chat->addMember($member);
        }
    });
});

$stdout->write("Listening on: {$socket->getAddress()}\n");

$loop->run();
