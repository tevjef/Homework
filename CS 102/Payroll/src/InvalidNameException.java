public class InvalidNameException extends Exception{    
    public InvalidNameException() {
        super("Error: Invaild name");
    }  
    public InvalidNameException(String name) {
        super("Error: Invaild name: " + name);
    }        
}
