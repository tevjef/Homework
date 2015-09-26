import java.util.*;
import java.text.*;

public class RoomCarpet {
	private double costPerArea;
	private RoomDimension dimens;

	public RoomCarpet(double width, double height, double costPerArea ) {
		dimens = new RoomDimension(width, height);
		this.costPerArea = costPerArea;
	}
	private double totalCost() {
		return dimens.getArea() * costPerArea;
	}
	public String toString() {

		String str = "Cost: " + NumberFormat.getCurrencyInstance().format(totalCost());
		return str;
	}

	public static void main(String[] args) {
		double w;
		double l;
		double c;

		Scanner input = new Scanner(System.in);

		System.out.println("Enter width: ");
		w = input.nextDouble();

		System.out.println("Enter height: ");
		l = input.nextDouble();

		System.out.println("Enter cost per area: ");
		c = input.nextInt();

		RoomCarpet carpet = new RoomCarpet(w, l, c);

		System.out.println(carpet);
	}
}