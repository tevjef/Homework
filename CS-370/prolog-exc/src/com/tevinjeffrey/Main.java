package com.tevinjeffrey;

public class Main {

    public static void main(String[] args) throws Exception {
        Person bob = new Person("bob");
        Person mary = new Person("mary");
        Person jane = new Person("jane");
        Person paul = new Person("paul");
        Person peter = new Person("peter");
        Person john =new Person("john");

        mary.addParent(bob);   // Mary has parent Bob
        mary.addParent(jane);  // Mary has parent Jane
        peter.addParent(mary); // Peter has parent Mary
        peter.addParent(paul); // Peter has parent Paul
        john.addParent(peter); // John has parent Peter

        System.out.print("bob   jane\n" +
                "|   /\n" +
                "mary   paul \n" +
                "|     / \n" +
                "peter\n" +
                "|\n" +
                "john\n\n");

        // Tests to check that relationships were created as expected.
        System.out.println("Is peter a descendant of bob? " + bob.isDescendant(peter));
        System.out.println("Is bob a descendant of peter? " + peter.isDescendant(bob));
        System.out.println("Is bob an ancestor of peter? " + peter.isAncestor(bob));
        System.out.println("Is peter a child of paul? " + paul.isChild(peter));
        System.out.println("Is peter a parent of john? " + john.isParent(peter));

    }
}
