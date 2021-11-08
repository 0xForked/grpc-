<?php declare(strict_types=1);

namespace Bakode\GrpcClient;

use Bakode\GrpcClient\Chats\Message;
use Spiral\GRPC;

interface ChatContact extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "bakode.grpcClient";

    /**
     * @param GRPC\ContextInterface $ctx
     * @param \Bakode\GrpcClient\Chats\Message $in
     * @return \Bakode\GrpcClient\Chats\Message
     *
     * @throws GRPC\Exception\InvokeException
     */
    public function push(GRPC\ContextInterface $ctx, Message $in): Message;
}