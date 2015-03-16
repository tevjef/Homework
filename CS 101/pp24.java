import java.util.Scanner;

public class pp24 {
    public static void main (String[] args) {

	Scanner input = new Scanner(System.in);

	System.out.println("Enter 2 numbers to check their sum, difference and product");

	float x = input.nextFloat();
	float y = input.nextFloat(); 

	float sum = x + y; 
	float difference = x - y;
	float product = x * y;

	System.out.println ("The sum is: " + sum);
	System.out.println ("The difference is: " + difference);
	System.out.println ("The product is: " + product);
    }
}
