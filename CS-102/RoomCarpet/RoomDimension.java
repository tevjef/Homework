public class RoomDimension {
	private double width;
	private double height;

	public RoomDimension (double width, double height) {
		this.width = width;
		this.height = height;
	}
	public double getArea() {
		return width*height;
	}
}