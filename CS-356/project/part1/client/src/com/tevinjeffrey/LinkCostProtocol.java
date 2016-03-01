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

        String line;
        int linesRead = 0;
        String routerNumber = null;
        String linkCost = null;
        while ((line = in.readLine()) != null && linesRead <= 2) {
            linesRead++;
            if (linesRead == 1) {
                routerNumber = line;
            } else {
                linkCost = line;
            }
        }
        if (routerNumber != null && linkCost != null) {
            System.out.println("Client: Router " +routerNumber);
            System.out.println("Client: Link Cost " +linkCost);
        } else {
            throw new Exception("Router number or Link cost not received.");
        }

        Router router = new Router("Router "+ routerNumber, clientSocket.getInetAddress().toString(), clientSocket.getPort());
        router.addLinkCost(receivingRouter.getNumber(), Integer.valueOf(linkCost));
        receivingRouter.addLinkCost(router.getNumber(), Integer.parseInt(linkCost));
        return router;
    }

    public static void send(Socket client, Router router, Router toRouter) throws IOException {
        DataOutputStream out = new DataOutputStream(client.getOutputStream());
        System.out.println("Server: "+ " Sending to router: " + router.getNumber() + " Link cost: "+router.getLinkCost(toRouter.getNumber()));
        out.writeUTF(String.valueOf(router.getNumber())+"\n"+router.getLinkCost(toRouter.getNumber()));
        out.flush();
    }
}