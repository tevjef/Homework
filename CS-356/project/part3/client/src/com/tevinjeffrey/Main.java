package com.tevinjeffrey;

import java.net.Socket;
import java.util.HashMap;
import java.util.Map;

public class Main {
    public static void main(String[] args) {
        String who = "Router 0";

        Router router0 = new Router("Router 0", "127.0.0.1", 50000);
        Router router1 = new Router("Router 1", "thirteen.tevindev.me", 50007);
        Router router2 = new Router("Router 2", "thirteen.tevindev.me", 50014);
        Router router3 = new Router("Router 3", "thirteen.tevindev.me", 50021);

        Map<Integer, Router> routerMap = new HashMap<>();
        routerMap.put(router0.getNumber(), router0);
        routerMap.put(router1.getNumber(), router1);
        routerMap.put(router2.getNumber(), router2);
        routerMap.put(router3.getNumber(), router3);

        router0.addLinkCost(router0.getNumber(), 0);
        router0.addLinkCost(router1.getNumber(), 1);
        router0.addLinkCost(router2.getNumber(), 3);
        router0.addLinkCost(router3.getNumber(), 7);

        LinkCostProtocol.printLinkCost(routerMap);

        try {
            Socket router1Client = LinkCostProtocol.estab(router1, router0);

            //Send link cost to to router 1
            LinkCostProtocol.send(router1Client, router0, router1, who);
            //Receive table from router 1
            LinkCostProtocol.recv(router1Client, router0);

            routerMap.get(0).addLinkCost(2,2);
            LinkCostProtocol.printLinkCost(routerMap);
            //router1Client.close();

            LinkCostProtocol.broadcast(router0, routerMap);

        } catch (Exception e) {
            System.out.println(who +": Could not establish connection. " + e.getMessage());
        }
    }
}
