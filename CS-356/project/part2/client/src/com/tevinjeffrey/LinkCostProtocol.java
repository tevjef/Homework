package com.tevinjeffrey;

import java.io.*;
import java.net.Socket;
import java.util.HashMap;
import java.util.Map;

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

        System.out.println("router" + routerNumber);
        System.out.println("linkcost " + linkCost);

        Router router = new Router("Router "+ routerNumber, clientSocket.getInetAddress().toString(), clientSocket.getPort());
        router.addLinkCost(receivingRouter.getNumber(), Integer.valueOf(linkCost));
        receivingRouter.addLinkCost(router.getNumber(), Integer.parseInt(linkCost));
        return router;
    }


    public static void recvAll(Socket clientSocket, Map<Integer, Router> routerMap) throws Exception {
        BufferedReader in = new BufferedReader(new InputStreamReader(clientSocket.getInputStream()));
        Router receivingRouter;
        //Get identity
        String identity = in.readLine();
        switch (identity){
            case "0":
                receivingRouter = routerMap.get(0);
                break;
            case "1":
                receivingRouter = routerMap.get(1);
                break;
            case "2":
                receivingRouter = routerMap.get(2);
                break;
            case "3":
                receivingRouter = routerMap.get(3);
                break;
            default:
                throw new Exception("Can't identify router.");
        }
        System.out.println("##Receiving from :" +  clientSocket.getInetAddress().toString() + ":"+clientSocket.getPort());

        System.out.println("Remote identity :" + receivingRouter);
        System.out.println("table contents...");
        String routerNumber = in.readLine();
        String linkCost = in.readLine();

        if (routerNumber == null || linkCost == null) {
            throw new Exception("Router number or Link cost not received.");
        } else {
            printRandL(routerNumber, linkCost);
            receivingRouter.addLinkCost(0, Integer.valueOf(linkCost));
        }


        routerNumber = in.readLine();
        linkCost = in.readLine();

        if (routerNumber == null || linkCost == null) {
            throw new Exception("Router number or Link cost not received.");
        } else {
            printRandL(routerNumber, linkCost);
            receivingRouter.addLinkCost(1, Integer.valueOf(linkCost));
        }

        routerNumber = in.readLine();
        linkCost = in.readLine();

        if (routerNumber == null || linkCost == null) {
            throw new Exception("Router number or Link cost not received.");
        } else {
            printRandL(routerNumber, linkCost);
            receivingRouter.addLinkCost(2, Integer.valueOf(linkCost));
        }

        routerNumber = in.readLine();
        linkCost = in.readLine();

        if (routerNumber == null || linkCost == null) {
            throw new Exception("Router number or Link cost not received.");
        } else {
            printRandL(routerNumber, linkCost);
            receivingRouter.addLinkCost(3, Integer.valueOf(linkCost));
        }
        System.out.println("##End receive from :" +  clientSocket.getInetAddress().toString() + ":"+clientSocket.getPort());

    }

    private static void printRandL(String routerNumber, String linkCost) {
        System.out.println("--> Router: " + routerNumber);
        System.out.println("--> Link Cost " + linkCost);
    }

    public static void send(Socket client, Router router, Router toRouter, String who) throws IOException {
        PrintWriter printWriter = new PrintWriter(client.getOutputStream());
        printWriter.print(String.valueOf(router.getNumber()) + "\n" + router.getLinkCost(toRouter.getNumber()) + "\n");
        printWriter.flush();
        System.out.println(who + ": sending link cost to " + client.getRemoteSocketAddress());
        System.out.println("--> Router " + router.getNumber());
        System.out.println("--> Link Cost " + router.getLinkCost(toRouter.getNumber()));
    }

    public static void printLinkCost(Map<Integer, Router> routerMap) {
        Router router0 = routerMap.get(0);
        Router router1 = routerMap.get(1);
        Router router2 = routerMap.get(2);
        Router router3 = routerMap.get(3);

        System.out.printf("     %-5s%-5s%-5s%-5s\n", "R0", "R1", "R2", "R3");
        System.out.printf("%-5s%-5s%-5s%-5s%-5s\n", "R0", router0.getStringLinkCost(0), router0.getStringLinkCost(1), router0.getStringLinkCost(2), router0.getStringLinkCost(3));
        System.out.printf("%-5s%-5s%-5s%-5s%-5s\n", "R1", router1.getStringLinkCost(0), router1.getStringLinkCost(1), router1.getStringLinkCost(2), router1.getStringLinkCost(3));
        System.out.printf("%-5s%-5s%-5s%-5s%-5s\n", "R2", router2.getStringLinkCost(0), router2.getStringLinkCost(1), router2.getStringLinkCost(2), router2.getStringLinkCost(3));
        System.out.printf("%-5s%-5s%-5s%-5s%-5s\n", "R3", router3.getStringLinkCost(0), router3.getStringLinkCost(1), router3.getStringLinkCost(2), router3.getStringLinkCost(3));
    }
}