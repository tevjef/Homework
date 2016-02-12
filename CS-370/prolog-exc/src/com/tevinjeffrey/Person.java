package com.tevinjeffrey;

import java.util.ArrayList;
import java.util.List;

public class Person {
    Person parentOne;
    Person parentTwo;

    List<Person> children = new ArrayList<Person>();
    String name;

    public Person(String name) {
        this.name = name;
    }

    public String getName() {
        return name;
    }

    public Person getParentOne() {
        return parentOne;
    }

    public Person getParentTwo() {
        return parentTwo;
    }

    public boolean isParent(Person person) {
        return getParentOne() != null && getParentOne().equals(person) ||
                getParentTwo() != null && getParentTwo().equals(person);
    }

    public boolean isDescendant(Person person) {
        if (children.contains(person)) return true;
        boolean flag = false;
        for (Person child : children) {
            if (!flag) {
                flag = child.isDescendant(person);
            }
        }
        return flag;
    }

    public boolean isAncestor(Person person) {
        if (isParent(person)) return true;
        return getParentOne() != null && getParentOne().isAncestor(person) ||
                getParentOne() != null && getParentTwo().isAncestor(person);
    }

    public boolean isChild(Person child) {
        return children.contains(child);
    }

    public void addParent(Person person) throws Exception {
        if (getParentOne() == null) {
            parentOne = person;
            person.addChild(this);
        } else if (getParentTwo() == null) {
            parentTwo = person;
            person.addChild(this);
        } else {
            throw new Exception("Can't have more than 2 parents");
        }
    }

    private boolean addChild(Person person) {
        return children.add(person);
    }
}
