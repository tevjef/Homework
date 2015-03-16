
import java.util.Scanner;

public class pp27
{
    public static void main ( String[] args)
    {
	Scanner input = new Scanner(System.in);

	System.out.println("Enter speed(mph):");       
	    int speed = input.nextInt();

	System.out.println("Enter distance(miles):");
	int distance = input.nextInt();

	float time = distance / speed;

	System.out.println("The time required is: " + time + " hours");
        
    }
}

