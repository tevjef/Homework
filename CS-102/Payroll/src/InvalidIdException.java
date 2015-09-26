public class InvalidIdException extends Exception{
    public InvalidIdException() {
        super("Error: Invaild ID");
    }
    
    public InvalidIdException(int id) {
        super("Error: Invaild ID: " + id);
    }
}
