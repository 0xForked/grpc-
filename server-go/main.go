package main

import (
	"fmt"
	"github.com/bakode/grpc-server/chat"
	"github.com/bakode/grpc-server/chat/models/pb"
	"google.golang.org/grpc"
	"log"
	"net"
)

const port = ":8000"

func init() {
	fmt.Println("===============================================")
	fmt.Println("============== START gRPC SERVER ==============")
	fmt.Println("===============================================")
}

func main()  {
	lis, err := net.Listen("tcp", port); if  err != nil {
		log.Fatalf("Failed to listen on port %s, cause: %v", port, err)
	}

	chatServer := chat.Server{}
	grpcServer := grpc.NewServer()
	pb.RegisterChatServiceServer(grpcServer, &chatServer)

	log.Printf("Server listening at %v", port)
	if err := grpcServer.Serve(lis); err != nil {
		log.Fatalf("Failed to serve gRPC server over port %s, cause: %v", port, err)
	}
}