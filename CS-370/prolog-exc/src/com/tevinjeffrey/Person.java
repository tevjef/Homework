package com.tevinjeffrey;

import java.util.ArrayList;
import java.util.List;

public class Person {
    Person parentOne;
    Person parentTwo;

    List<Person> children = new ArrayList<Person>();
    String name;

    // A person is constructed with just a name.
    public Person(String name) {
        this.name = name;
    }

    //Checks immediate parent for instance of the provided person.
    public boolean isParent(Person person) {
        return parentOne != null && parentOne.equals(person) ||
                parentTwo != null && parentTwo.equals(person);
    }

    // Recursively checks all children and their descendants for some person.
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

    // Recursive call to check if the provided person is an ancestor of the this.
    public boolean isAncestor(Person person) {
        if (isParent(person)) return true;
        return parentOne != null && parentOne.isAncestor(person) ||
                parentTwo != null && parentTwo.isAncestor(person);
    }

    // Checks immediate children for instance of provided person.
    public boolean isChild(Person child) {
        return children.contains(child);
    }

    // Each person is restricted to have 2 parents. 
    public void addParent(Person person) throws Exception {
        if (parentOne == null) {
            parentOne = person;
            person.addChild(this);
        } else if (parentTwo == null) {
            parentTwo = person;
            person.addChild(this);
        } else {
            throw new Exception("Can't have more than 2 parents");
        }
    }

    private boolean addChild(Person person) {
        return children.add(person);
    }

    // Inherited from the object class. Two persons are equal if it the same instance.
    /*public boolean equals(Object obj) {
        return (this == obj);
    }*/

}
