package com.tevinjeffrey;

import java.util.HashMap;
import java.util.Map;

public class Router {

    private String name;
    private int number;
    private String host;
    private int port;
    private Map<Integer, Integer> linkCost = new HashMap<>();

    public Router(String name, String host, int port) {
        this.name = name;
        this.host = host;
        this.port = port;
        number = Integer.parseInt(name.substring(name.length() -1));

        addLinkCost(0, Integer.MAX_VALUE);
        addLinkCost(1, Integer.MAX_VALUE);
        addLinkCost(2, Integer.MAX_VALUE);
        addLinkCost(3, Integer.MAX_VALUE);

    }

    public Router(String name) {
        this.name = name;
        number = Integer.parseInt(name.substring(name.length() -1));
    }

    public Router() {
    }

    public String getName() {
        return name;
    }

    public String getHost() {
        return host;
    }

    public int getPort() {
        return port;
    }

    public int getNumber() {
        return number;
    }

    public void addLinkCost(int router, int linkCost) {
        this.linkCost.put(router, linkCost);
    }

    public int getLinkCost(int router) {
        return linkCost.get(router);
    }

    public String getStringLinkCost(int router) {
        if (linkCost.get(router) == Integer.MAX_VALUE) {
            return"\u221e";
        }
        return String.valueOf(linkCost.get(router));
    }

    @Override
    public boolean equals(Object obj) {
        if (obj == null) return false;
        if (obj == this) return true;
        return obj instanceof Router && this.name.equals(((Router) obj).getName());
    }

    @Override
    public String toString() {
        return name + " at " + host +":" + port;
    }
}
