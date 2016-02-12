package com.tevinjeffrey;

public class Main {

    public static void main(String[] args) throws Exception {
        Person bob = new Person("bob");
        Person mary = new Person("mary");
        Person jane = new Person("jane");
        Person paul = new Person("paul");
        Person peter = new Person("peter");
        Person john =new Person("john");

        mary.addParent(bob);
        mary.addParent(jane);
        peter.addParent(mary);
        peter.addParent(paul);
        john.addParent(peter);

        System.out.print("bob   jane\n" +
                "|   /\n" +
                "mary   paul \n" +
                "|     / \n" +
                "peter\n" +
                "|\n" +
                "john\n\n");

        System.out.println("Is peter descendant of bob? " + bob.isDescendant(peter));
        System.out.println("Is bob descendant of peter? " + peter.isDescendant(bob));
        System.out.println("Is bob ancestor of peter? " + peter.isAncestor(bob));
        System.out.println("Is peter child of paul? " + paul.isChild(peter));
        System.out.println("Is peter parent of john? " + john.isParent(peter));

    }
}
