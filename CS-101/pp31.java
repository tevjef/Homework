import java.util.Scanner;
import java.util.Random;

public class pp31 {
	public static void main (String [] args) {
		Scanner input = new Scanner(System.in);	
		Random rand = new Random();

		System.out.println("Enter your first name:");
		String first = input.next();
		System.out.println("Enter your last name:");
		String last  = input.next();
		if (last.length() < 5) {
			System.out.println ("Last is too short, must be more than 5 character long.");
			last  = input.next();
		} 
		last = last.substring(0, 5);
		int num = rand.nextInt(90) + 10;
		
		System.out.println(first + " " + last + " " +num);
	}

}