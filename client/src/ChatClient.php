<?php declare(strict_types=1);

namespace Bakode\GrpcClient;

use Bakode\GrpcClient\Chats\Message;
use Spiral\GRPC;

class ChatClient implements ChatContact
{
    /**
     * @param GRPC\ContextInterface $ctx
     * @param \Bakode\GrpcClient\Chats\Message $in
     * @return \Bakode\GrpcClient\Chats\Message
     */
    public function push(GRPC\ContextInterface $ctx, Message $in): Message
    {
        $out = new Message();

        $out->setBody('Hello, ' . $in->getBody());

        return $out;
    }
}