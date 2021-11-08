package chat

import (
	"context"
	"github.com/bakode/grpc-server/chat/models/pb"
	"log"
)

type Server struct {}

func (s *Server) SayHello(ctx context.Context, msg *pb.Message) (*pb.Message, error) {
	log.Printf("Receive message body from client: %s", msg.Body)

    return &pb.Message{
        Body: "Hello from server",
    }, nil
}
