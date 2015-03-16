import java.util.Scanner;

public class Employee {
    public static void main(String[] args) {
        
        Payroll employee;
        try {

            employee = new Payroll();

            Scanner input = new Scanner(System.in);
            
            System.out.println("Enter employee name:");
            employee.setName(input.nextLine());

            System.out.println("Enter employee ID:");
            employee.setId(input.nextInt());
            
            System.out.println("Enter hours worked:");
            employee.setHours(input.nextInt());
            
            System.out.println("Enter payrate:");
            employee.setRate(input.nextInt());

            System.out.println(employee);
   
        } catch (InvalidNameException e) {
            e.printStackTrace();
        } catch (InvalidIdException e) {
            e.printStackTrace();
        } catch (InvalidHoursException e) {
            e.printStackTrace();
        } catch (InvalidRateException e) {
            e.printStackTrace();
        }



    }
}
