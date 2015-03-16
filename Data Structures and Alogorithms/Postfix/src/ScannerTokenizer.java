import java.util.Scanner;

public class ScannerTokenizer implements Tokenizer {
    private Scanner scanner;

    public ScannerTokenizer(Scanner s) {
        scanner = s;
    }

    public boolean hasNext() {
        return scanner.hasNext();
    }

    public Token next() {
        if (scanner.hasNextDouble()) return new Token(scanner.nextDouble());
        String s = scanner.next();
        int first = s.codePointAt(0);
        if (Character.isLetter(first)) return new Token(s);
        else return new Token(first);
    }

}
