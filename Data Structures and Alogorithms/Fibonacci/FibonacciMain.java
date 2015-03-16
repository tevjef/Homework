//Tevin Jeffrey
public class FibonacciMain {
	
	public static void main(String[] args) {

		Fibonacci ff = new FibonacciForget();
		System.out.println(ff.F(30));
		System.out.println(ff.getCalls());
		Fibonacci fr = new FibonacciRemember();
		System.out.println(fr.F(30));
		System.out.println(fr.getCalls());

	}
}