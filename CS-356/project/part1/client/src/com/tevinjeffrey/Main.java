package com.tevinjeffrey;

import java.io.DataOutputStream;
import java.io.IOException;
import java.io.OutputStream;
import java.net.Socket;
import java.util.HashMap;
import java.util.Map;

public class Main {
    public static void main(String[] args) {
        String who = "Client";

        Router router0 = new Router("Router 0", "127.0.0.1", 50000);
        Router router1 = new Router("Router 1", "empusa.tevindev.me", 50007);
        Router router2 = new Router("Router 2", "127.0.0.1", 50014);
        Router router3 = new Router("Router 3", "127.0.0.1", 50021);

        Map<Integer, Router> routerMap = new HashMap<>();
        routerMap.put(router0.getNumber(), router0);
        routerMap.put(router1.getNumber(), router1);
        routerMap.put(router2.getNumber(), router2);
        routerMap.put(router3.getNumber(), router3);

        router0.addLinkCost(router1.getNumber(), 1);
        router0.addLinkCost(router2.getNumber(), 3);
        router0.addLinkCost(router3.getNumber(), 7);


        System.out.println("Identity: " + router0.getName());
        System.out.println("----------------------------");
        System.out.println("Link cost to Router 1 is: "+router0.getLinkCost(router1.getNumber()));
        System.out.println("Link cost to Router 2 is: "+router0.getLinkCost(router2.getNumber()));
        System.out.println("Link cost to Router 3 is: "+router0.getLinkCost(router3.getNumber()));
        System.out.println("----------------------------");

        String host= router1.getHost();
        int port = router1.getPort();

        try {
            System.out.println(who +": Connecting to " + router1);
            Socket client = new Socket(host, port);
            System.out.println(who +": You(" + client.getLocalSocketAddress() + ") are connected to " + client.getRemoteSocketAddress());

            LinkCostProtocol.send(client, router0, router1, who);
            Router router = LinkCostProtocol.recv(client, router0);
            System.out.println(who +": receiving from "+client.getRemoteSocketAddress().toString());
            System.out.println("--> Router " + router.getNumber());
            System.out.println("--> Link Cost " + router0.getLinkCost(router.getNumber()));


        } catch (Exception e) {
            System.out.println(who +": Could not establish connection. " + e.getMessage());
        }
    }
}
