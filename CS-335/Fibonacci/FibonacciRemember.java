//Tevin Jeffrey
public class FibonacciRemember implements Fibonacci {
	
	int calls = 0;
	int[] memo = new int[100];

	public int F(int n) {
		calls++;
		if(memo[n] == 0) {
			if(n == 1 || n == 2) {
				return 1;
			} else {
				memo[n] =  F(n -1) + F(n -2);
				return memo[n];
			}
		} else {
			return memo[n];
		}
	}

	public int getCalls() {
		return calls;
	}

	public void reset() {
		calls =0;

	}
}