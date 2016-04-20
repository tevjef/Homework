package com.tevinjeffrey;

import java.io.*;
import java.net.Socket;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;
import java.util.concurrent.ThreadPoolExecutor;
import java.util.concurrent.TimeUnit;

public class LinkCostProtocol {

    InputStream inputStream;
    OutputStream outputStream;

    public LinkCostProtocol(InputStream inputStream, OutputStream outputStream) {
        this.inputStream = inputStream;
        this.outputStream = outputStream;
    }

    public static void recv(Socket clientSocket, Router receivingRouter) throws Exception {
        BufferedReader in = new BufferedReader(new InputStreamReader(clientSocket.getInputStream()));
        System.out.println("##Receiving from: " +  clientSocket.getInetAddress().toString() + ":"+clientSocket.getPort());

        String routerNumber = in.readLine();
        String linkCost = in.readLine();

        if (routerNumber == null || linkCost == null) {
            throw new Exception("Router number or Link cost not received.");
        }

        printRandL(routerNumber, linkCost);
        System.out.println("##End receive from :" +  clientSocket.getInetAddress().toString() + ":"+clientSocket.getPort());
        receivingRouter.addLinkCost(Integer.parseInt(routerNumber), Integer.parseInt(linkCost));
    }

    public static Socket estab(Router router, Router who) throws IOException {
        System.out.println(who +": Connecting to " + router);
        Socket client = new Socket(router.getHost(), router.getPort());
        System.out.println(who +": Connected to " + client.getRemoteSocketAddress() + " from port " + client.getLocalPort());
        return client;
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
        System.out.println("##Receiving from: " +  clientSocket.getInetAddress().toString() + ":"+clientSocket.getPort());

        System.out.println("Remote identity: " + receivingRouter);
        System.out.println("table contents...");
        recvOne(in, receivingRouter);

        System.out.println("##End receive from :" +  clientSocket.getInetAddress().toString() + ":"+clientSocket.getPort());

    }

    public static void recvOne(BufferedReader in, Router receivingRouter) throws Exception {
        String routerNumber = in.readLine();
        String linkCost = in.readLine();

        printRandL(routerNumber, linkCost);
        if (routerNumber == null || linkCost == null) {
            throw new Exception("Router number or Link cost not received.");
        } else {
            receivingRouter.addLinkCost(0, Integer.valueOf(linkCost));
        }


        routerNumber = in.readLine();
        linkCost = in.readLine();
        printRandL(routerNumber, linkCost);

        if (routerNumber == null || linkCost == null) {
            throw new Exception("Router number or Link cost not received.");
        } else {
            receivingRouter.addLinkCost(1, Integer.valueOf(linkCost));
        }

        routerNumber = in.readLine();
        linkCost = in.readLine();
        printRandL(routerNumber, linkCost);

        if (routerNumber == null || linkCost == null) {
            throw new Exception("Router number or Link cost not received.");
        } else {
            receivingRouter.addLinkCost(2, Integer.valueOf(linkCost));
        }

        routerNumber = in.readLine();
        linkCost = in.readLine();
        printRandL(routerNumber, linkCost);

        if (routerNumber == null || linkCost == null) {
            throw new Exception("Router number or Link cost not received.");
        } else {
            receivingRouter.addLinkCost(3, Integer.valueOf(linkCost));
        }
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

    public static void broadcast(final Router fromRouter, final Map<Integer, Router> routerMap) throws IOException {
        List<Socket> socketList = getConnections(routerMap, fromRouter);

        ExecutorService service = Executors.newFixedThreadPool(4);
        for (final Socket client : socketList) {
            Runnable runnable = new Runnable() {

                @Override
                public void run() {
                    System.out.println(fromRouter + ": sending link costs to " + client.getRemoteSocketAddress());

                    PrintWriter printWriter = null;
                    try {
                        printWriter = new PrintWriter(client.getOutputStream());
                    } catch (IOException e) {
                        e.printStackTrace();
                    }

                   sendAll(routerMap, fromRouter, printWriter);

                }
            };
            service.submit(runnable);
        }
    }

    public static List<Socket> getConnections(Map<Integer, Router> routerMap, Router router)  {
        List<Socket> sockets = new ArrayList<>();
        for (int i = 0; i < routerMap.size(); i++) {
            Router curr = routerMap.get(i);
            if (router.equals(curr)){
                continue;
            } else {
                try {
                    sockets.add(estab(curr, router));
                } catch (IOException e) {
                    System.out.println("Connection refused");
                }
            }
        }
        return sockets;
    }

    public static void sendAll(Map<Integer, Router> routerMap, Router fromRouter, PrintWriter printWriter) {
        System.out.println("Sending identity as router "+ fromRouter.getNumber());
        printWriter.print(fromRouter.getNumber() + "\n");
        sendOne(routerMap.get(0), printWriter);
        sendOne(routerMap.get(1), printWriter);
        sendOne(routerMap.get(2), printWriter);
        sendOne(routerMap.get(3), printWriter);
    }

    public static void sendOne(Router router, PrintWriter printWriter) {
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