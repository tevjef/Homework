//Tevin Jeffrey
public class FibonacciForget implements Fibonacci {
	
	int calls = 0;

	public int F(int n) {
		calls++;
		if(n == 1 || n == 2) {
			return 1;
		} else {
			return F(n -1) + F(n -2);
		}
	}

	public int getCalls() {
		return calls;
	}
	public void reset() {
		calls = 0;
	}
}