import java.util.Scanner;

public class CAITest {
	
	public static void main(String[] args){
		Scanner input = new Scanner(System.in);
		ComputerAssistedInstruction studentCAI = new ComputerAssistedInstruction();
		int answer;

		while(true){
			studentCAI.displayQuestion();
			answer = input.nextInt();
			
				while(studentCAI.checkAnswer(answer) == 0 && answer != -1){
					System.out.printf("No. Please try again.\n\n");
					studentCAI.displayQuestion();
					answer = input.nextInt();
				}
			
			if(answer == -1) 
				break;
			
			System.out.printf("Very good!\n\n");
			studentCAI.resetNums();
		}
	}
}