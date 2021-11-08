# How to?

1. Download protocol buffers from [Protocol buffers repository](https://github.com/protocolbuffers/protobuf/releases)
2. For golang:
    1. Install the protocol compiler plugins for Go using the following commands ([for more information ](https://grpc.io/docs/languages/go/quickstart/)):
    ```bash
    $ go install google.golang.org/protobuf/cmd/protoc-gen-go@v1.26
    $ go install google.golang.org/grpc/cmd/protoc-gen-go-grpc@v1.1
    ```
   2. Run the following command to generate the Go code:
    ```bash
    $  protoc --go_out=plugins=grpc:chat chat.proto
    ```
   3. Copy `models/pb/*.pb.go` to `server/models/pb/`
