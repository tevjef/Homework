import java.util.Scanner;

public class pp36 {
	public static void main (String [] args) {
		Scanner input = new Scanner(System.in);

		double a , b , c, s, area;

		System.out.println("Enter the sides of the triangle, each followed by enter");
		a = input.nextDouble();
		b = input.nextDouble();
		c = input.nextDouble();
		s = (a + b + c) / 2.0;

		area = Math.sqrt(((s * (s - a)) * (s - b) * (s - c)));

		System.out.println("The area is: " + area);

		

		
		}

}