<?php declare(strict_types=1);

namespace Bakode\gRPC;

use Bakode\gRPC\Chats\Message;
use Spiral\GRPC;

class ChatClient implements ChatContact
{
    /**
     * @param GRPC\ContextInterface $ctx
     * @param \Bakode\gRPC\Chats\Message $in
     * @return \Bakode\gRPC\Chats\Message
     */
    public function push(GRPC\ContextInterface $ctx, Message $in): Message
    {
        $out = new Message();

        $out->setBody('Hello, ' . $in->getBody());

        return $out;
    }
}