public class InvalidHoursException extends Exception{
    public InvalidHoursException() {
        super("Error: Invaild hours");
    }
    
    public InvalidHoursException(int hours) {
        super("Error: Invaild hours: " + hours);
    }
}
