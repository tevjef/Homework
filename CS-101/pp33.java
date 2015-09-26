import java.util.Random;

public class pp33 {
	public static void main (String [] args) {
		Random rand = new Random();

		int n1, n2, n3, n4, n5;
		String s1, s2, s3; 

		n1 = rand.nextInt(9) + 1; 	//first , can't be 0
		n2 = rand.nextInt(10);		//second, can't be 8
		n3 = rand.nextInt(10);		//third, can't be 9
		n4 = rand.nextInt(743); 	//next three
		n5 = rand.nextInt(10000);	//next four

		while (n2 == 8) {
			n2 = rand.nextInt(10);
		}

		while (n3 == 9) {
			n3 = rand.nextInt(10);
		}

		s3 = Integer.toString(n1).concat(Integer.toString(n2).concat(Integer.toString(n3))); 
		//converts the first 3 numbers to string and concatenates them.

		if (n4 < 100) {	//if number is less that 100, append 0 to the front
			s1 = Integer.toString(n4);
			s1 = 0 + s1;
		} else {
			s1 = Integer.toString(n4);
		}

		if (n5 < 1000) {	//if number is less that 100, append 0 to the front
			s2 = Integer.toString(n5);
			s2 = 0 + s2;
		}else {
			s2 = Integer.toString(n5);
		}
		System.out.println (s3 + "-" + s1 + "-" + s2);
		}

}