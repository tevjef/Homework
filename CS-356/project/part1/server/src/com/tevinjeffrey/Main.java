package com.tevinjeffrey;

import java.io.*;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class Main {
    public static void main(String[] args) {
        List<Router> knownRouters = new ArrayList<>();
        Router router1 = new Router("Router 1", "127.0.0.1", Integer.parseInt(args[0]));

        System.out.println("Identity: " + router1.getName());

        try {
            ServerSocket serverSocket = new ServerSocket(router1.getPort());
            System.out.println("Server: Bound to " +  serverSocket.getInetAddress().getHostAddress()
                    + ":"+serverSocket.getLocalPort());

            while(true) {
                Socket clientSocket = null;
                try {
                    clientSocket = serverSocket.accept();
                    System.out.println("Server: Accepting connection from "+ clientSocket.getRemoteSocketAddress());

                    Router router = LinkCostProtocol.recv(clientSocket, router1);

                    knownRouters.add(router);

                    LinkCostProtocol.send(clientSocket, router1, router);

                    //System.out.println(router);

                    clientSocket.close();
                } catch (Exception e) {
                    if (clientSocket != null) {
                        clientSocket.close();
                    }
                    e.printStackTrace();

                }


            }

        } catch (IOException e) {
            System.out.println("Failed to bind to "+router1.getPort());
        }
    }
}
