package main

import (
	"fmt"
	"github.com/bakode/grpc-client/chat/models/pb"
	"golang.org/x/net/context"
	"google.golang.org/grpc"
	"log"
)

const (
	phpServerPort = ":8001"
	goServerPort = ":8000"
)

func init() {
	fmt.Println("===============================================")
	fmt.Println("============== START gRPC CLIENT ==============")
	fmt.Println("===============================================")
}

func main() {
	var conn *grpc.ClientConn
	conn, err := grpc.Dial(goServerPort, grpc.WithInsecure()); if err != nil {
        log.Fatalf("Cold not connect: %s", err)
    }

	defer func(conn *grpc.ClientConn) {
		err := conn.Close()
		if err != nil {
			log.Fatalf("Like we have some problem here: %s", err)
		}
	}(conn)

	client := pb.NewChatServiceClient(conn)
	message := pb.Message{Body: "Helo from the client",}
	response, err := client.SayHello(context.Background(), &message); if err != nil {
        log.Fatalf("Could not SayHello: %s", err)
    }

	log.Printf("Response from Server: %s", response.Body)
}

