import java.util.Scanner;

public class pp35 {
	public static void main (String [] args) {
		Scanner input = new Scanner(System.in);

		double r, v, sa;

		System.out.println("Enter the radius of a sphere: ");
		r = input.nextDouble();

		v = (4/3) + Math.PI * Math.pow(r, 3);
		sa = 4 * Math.PI * Math.pow(r , 2);

		System.out.println ("The volume of the sphrere is: " + v );
		System.out.println ("The surface area of the sphrere is: " + sa );

		
		}

}