import java.util.Scanner;

public class pp28
{
    public static void main ( String[] args)
    {
	Scanner input = new Scanner(System.in);

	System.out.println("Enter hours:");       
	int hour = input.nextInt();

	System.out.println("Enter minutes:");
	int minute = input.nextInt();

	System.out.println("Enter seconds:");
	int second = input.nextInt();

	int hSeconds = hour * 3600;
	int mSeconds = minute * 60;
	int total = hSeconds + mSeconds + second;

	System.out.println(hour + " hours, " + minute + " minutes, and " + second  + " seconds is equivalent to: " + total + " seconds." );
        
    }
}



