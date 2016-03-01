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
        printWriter.print(String.valueOf(router.getNumber()) + "\n" + router.getLinkCost(toRouter.getNumber()) + "\n");
        printWriter.flush();
        System.out.println(who + ": sending link cost to " + client.getRemoteSocketAddress());
        System.out.println("--> Router " + router.getNumber());
        System.out.println("--> Link Cost " + router.getLinkCost(toRouter.getNumber()));
    }
}