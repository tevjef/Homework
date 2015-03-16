import java.util.Scanner;

public class pp25
{
    public static void main ( String[] args)
    {

	System.out.println("Enter fahrenheit temp to be converted to celcius");
 
        Scanner input = new Scanner(System.in);

        final int BASE = 32;
        final double CONVERSION_FACTOR = 5.0 / 9.0;

        double celciusTemp;
        double fahrenheitTemp = input.nextDouble();

        celciusTemp = (fahrenheitTemp - BASE) * CONVERSION_FACTOR;

        System.out.println ("Celcius Temperature: " + celciusTemp);
    }
}



