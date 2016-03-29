package com.tevinjeffrey;

import java.io.*;
import java.net.Socket;

public class LinkCostProtocol {

    InputStream inputStream;
    OutputStream outputStream;

    public LinkCostProtocol(InputStream inputStream, OutputStream outputStream) {
        this.inputStream = inputStream;
        this.outputStream = outputStream;
    }

    public static Router recv(Socket clientSocket, Router receivingRouter) throws Exception {
        BufferedReader in = new BufferedReader(new InputStreamReader(clientSocket.getInputStream()));

        String routerNumber = in.readLine();
        String linkCost = in.readLine();

        if (routerNumber == null || linkCost == null) {
            throw new Exception("Router number or Link cost not received.");
        }

        Router router = new Router("Router "+ routerNumber, clientSocket.getInetAddress().toString(), clientSocket.getPort());
        router.addLinkCost(receivingRouter.getNumber(), Integer.valueOf(linkCost));
        receivingRouter.addLinkCost(router.getNumber(), Integer.parseInt(linkCost));
        return router;
    }

    public static void send(Socket client, Router router, Router toRouter, String who) throws IOException {
        PrintWriter printWriter = new PrintWriter(client.getOutputStream());

        System.out.println(who + ": sending link costs to " + client.getRemoteSocketAddress());

        System.out.println("Sending identity as router "+ router.getNumber());
        printWriter.print(router.getNumber() + "\n");

        System.out.println("--> Router " + 0);
        System.out.println("--> Link Cost " + router.getLinkCost(0));
        printWriter.print(String.valueOf(0) + "\n" + router.getLinkCost(0) + "\n");

        System.out.println("--> Router " + 1);
        System.out.println("--> Link Cost " + router.getLinkCost(1));
        printWriter.print(String.valueOf(1) + "\n" + router.getLinkCost(1) + "\n");

        System.out.println("--> Router " + 2);
        System.out.println("--> Link Cost " + router.getLinkCost(2));
        printWriter.print(String.valueOf(2) + "\n" + router.getLinkCost(2) + "\n");

        System.out.println("--> Router " + 3);
        System.out.println("--> Link Cost " + router.getLinkCost(3));
        printWriter.print(String.valueOf(3) + "\n" + router.getLinkCost(3) + "\n");
        printWriter.flush();
    }
}