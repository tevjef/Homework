import java.util.Scanner; 

public class rationalDriver { 

	public static void main (String[] args) {

		Scanner input = new Scanner(System.in);

		System.out.println("Enter numerator, press enter followed by the denominator.");

		int n1 = input.nextInt();
		int d1 = input.nextInt();

		rational r1 = new rational (n1, d1);

		rational r6, r3, r4, r5;

		r1.getRational();

		System.out.println("Enter the second numerator followed by the denominator");

		int n2 = input.nextInt();
		int d2 = input.nextInt();

		rational r2 = new rational (n2, d2);

		r2.getRational();



		System.out.println("Addition");

		r3 = r1.add(r2);

		r3.getRational();

		System.out.println("Subtraction");

		r4 = r1.subtract(r2);

		r4.getRational();

		System.out.println("Multiplication");

		r5 = r1.multiply(r2);

		r5.getRational();

		System.out.println("Division");

		r6 = r1.divide(r2);

		r6.getRational();



	}
}