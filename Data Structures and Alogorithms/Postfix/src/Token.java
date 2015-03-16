public class Token {
    // Constants for types
    public static final int NUMBER = -1;
    public static final int NAME = -2;
    // Fields
    private int ttype;
    private double dval;
    private String sval;

    // Constructors
    Token(int t) {
        ttype = t;
    }

    Token(double d) {
        ttype = NUMBER;
        dval = d;
    }

    Token(String s) {
        ttype = NAME;
        sval = s;
    }

    Token(int t, String s, double d) {
        ttype = t;
        sval = s;
        dval = d;
    }

    // Assignment method: value in op2 is assigned to name in op1
    public static Token assign(String op1, double op2) {
        return new Token(NAME, op1, op2);
    }

    // Accessor methods
    public int type() {
        return ttype;
    }

    public double dvalue() {
        return dval;
    }

    public double number() {
        return dval;
    }

    public String svalue() {
        return sval;
    }

    public String name() {
        return sval;
    }

    public char operator() {
        return (char) ttype;
    }

    // Convenience methods for type
    public boolean isNumber() {
        return ttype == NUMBER;
    }

    public boolean isName() {
        return ttype == NAME;
    }

    public boolean isOperator() {
        return ttype > 0;
    }

    public boolean hasName() {
        return sval != null;
    }

    // toString() method
    public String toString() {
        StringBuffer sb = new StringBuffer();
        sb.append('[');
        if (isOperator()) sb.append("OPERATOR,").append(operator());
        else if (isNumber()) sb.append("NUMBER,").append(number());
        else if (isName()) sb.append("NAME,").append(name()).append('=').append(number());
        sb.append(']');
        return sb.toString();
    }
}
