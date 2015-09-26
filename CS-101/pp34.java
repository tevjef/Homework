import java.util.Scanner;

public class pp34 {
	public static void main (String [] args) {
		Scanner input = new Scanner(System.in);

		double x1, x2, y1, y2, xx, yy, d;
		
		System.out.println ("Point 1: Enter the coordinates x and y, each foloowed by enter");
		x1 = input.nextDouble();
		y1 = input.nextDouble();

		System.out.println ("You entered: (" + x1 + ", " + y1 +")");
		System.out.println ("Point 2: Enter the coordinates x and y, each foloowed by enter");
		x2 = input.nextDouble();
		y2 = input.nextDouble();
		System.out.println ("You entered: (" + x2 + ", " + y2 +")");



		xx = Math.pow((x2 - x1), 2);
		yy = Math.pow((y2 - y1), 2);

		d = Math.sqrt((xx+yy));


		System.out.println ("The distance between the points is: " + d);
		}

}