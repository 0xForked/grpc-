<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: chat.proto

namespace Bakode\gRPC\GPBMetadata;

class Chat
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
z

chat.protoprotobuf"
Message
body (	2A
ChatService2
SayHello.protobuf.Message.protobuf.Message" bproto3'
        , true);

        static::$is_initialized = true;
    }
}

