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
        String who = "Router 1";

        List<Router> knownRouters = new ArrayList<>();
        Router router0 = new Router("Router 0", "127.0.0.1", 50000);
        Router router1 = new Router("Router 1", "127.0.0.1", 50007);
        Router router2 = new Router("Router 2", "127.0.0.1", 50014);
        Router router3 = new Router("Router 3", "127.0.0.1", 50021);

        Map<Integer, Router> routerMap = new HashMap<>();
        routerMap.put(router0.getNumber(), router0);
        routerMap.put(router1.getNumber(), router1);
        routerMap.put(router2.getNumber(), router2);
        routerMap.put(router3.getNumber(), router3);

        router1.addLinkCost(router0.getNumber(), 1);
        router1.addLinkCost(router1.getNumber(), 0);
        router1.addLinkCost(router2.getNumber(), 1);
        router1.addLinkCost(router3.getNumber(), Integer.MAX_VALUE);

        System.out.println("Identity: " + router1.getName());

        try {
            ServerSocket serverSocket = new ServerSocket(router1.getPort());
            System.out.println(who +":  Bound to " +  serverSocket.getInetAddress().getHostAddress()
                    + ":"+serverSocket.getLocalPort());

            while(true) {
                Socket clientSocket = null;
                try {
                    clientSocket = serverSocket.accept();
                    System.out.println(who +": Accepting connection from " + clientSocket.getRemoteSocketAddress());

                    Router router = LinkCostProtocol.recv(clientSocket, router1);
                    routerMap.put(router.getNumber(), router);
                    System.out.println(who +": receiving from "+clientSocket.getRemoteSocketAddress().toString());
                    System.out.println("--> Router " + router.getNumber());
                    System.out.println("--> Link Cost " + router1.getLinkCost(router.getNumber()));

                    LinkCostProtocol.send(clientSocket, router1, router);

                    LinkCostProtocol.printLinkCost(routerMap);

                    clientSocket.close();
                } catch (Exception e) {
                    e.printStackTrace();
                } finally {
                    try {
                        if (clientSocket != null) {
                            clientSocket.close();
                        }
                    } catch (IOException e) {
                       e.printStackTrace();
                    }
                }


            }

        } catch (IOException e) {
            System.out.println("Failed to bind to "+router1.getPort());
        }
    }
}
