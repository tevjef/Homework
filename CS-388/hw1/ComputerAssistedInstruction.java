/* ComputerAssistedInstruction.java class file.
*/
import java.util.Random;

public class ComputerAssistedInstruction {

	private int number1; // Stores a random number
	private int number2; // Stores a random number
	private static final Random randomNumbers = new Random(); // A random number object to generate numbers
	
	// Initialize each number variable with a random one digit number when constructor is called
	public ComputerAssistedInstruction(){
		number1 = randomNumbers.nextInt(9);
		number2 = randomNumbers.nextInt(9);
	}
	
	// Get the value stored in the number1 variable
	public int getNum1(){
		return number1;
	}
	
	// Get the value stored in the number1 variable
	public int getNum2(){
		return number2;
	}
	
	// Display the question to the student, including the random numbers generated
	public void displayQuestion(){
		System.out.printf("How much is %d times %d? ", getNum1(), getNum2());
	}
	
	// Check the answer entered by the user with the actual answer that it should be (multiplication based)
	public int checkAnswer(int userAnswer){
		int answer = getNum1() * getNum2();
		
		if(answer == userAnswer)
			return 1;
		else
			return 0;
	}
	
	// Set the numbers of the numbr variables with new random numbers
	public void resetNums(){
		number1 = randomNumbers.nextInt(9);
		number2 = randomNumbers.nextInt(9);
	}

}