public class InvalidRateException extends Exception{
    public InvalidRateException() {
        super("Error: Invaild rate");
    }
    
    public InvalidRateException(double rate) {
        super("Error: Invaild rate: " + rate);
    }
}
