import java.util.Scanner;

public class pp22 {
    public static void main (String[] args) {

	Scanner input = new Scanner(System.in);

	System.out.println("Enter 3 integers below");

	int x = input.nextInt();
	int y = input.nextInt();
	int z = input.nextInt(); 

	double average = (x + y + z) / 3; 

	System.out.println ("The average is: " + average);

    }
}
