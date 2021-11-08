package main

import (
	"fmt"
	"google.golang.org/grpc"
	"log"
	"net"
)

func init() {
	fmt.Println("===============================================")
	fmt.Println("============== START gRPC SERVER ==============")
	fmt.Println("===============================================")
}

func main()  {
	lis, err := net.Listen("tcp", ":8000"); if  err != nil {
		log.Fatalf("Failed to listen on port :8000 , %v", err)
	}

	grpcServer := grpc.NewServer()

	if err := grpcServer.Serve(lis); err != nil {
		log.Fatalf("Failed to serve gRPC server over port :8000: %v", err)
	}



}