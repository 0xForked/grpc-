<?php declare(strict_types=1);

namespace Bakode\gRPC;

use Bakode\gRPC\Chats\Message;
use Spiral\GRPC;

interface ChatContact extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "bakode.grpcClient";

    /**
     * @param GRPC\ContextInterface $ctx
     * @param \Bakode\gRPC\Chats\Message $in
     * @return \Bakode\gRPC\Chats\Message
     *
     * @throws GRPC\Exception\InvokeException
     */
    public function push(GRPC\ContextInterface $ctx, Message $in): Message;
}