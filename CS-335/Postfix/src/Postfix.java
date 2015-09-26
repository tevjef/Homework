import java.util.Stack;

public class Postfix extends Stack<Token> {

    private Tokenizer tz;
    private SymbolTable st = new SymbolTable();

    public Postfix(Tokenizer tzz) {
        tz = tzz;
    }

    public Token push(Token t) {
        System.out.println("push " + t);
        return super.push(t);
    }

    public Token pop() {
        Token t = st.get(super.pop());
        System.out.println("pop  " + t);
        return t;
    }

    void run() throws PostfixException {
        while (tz.hasNext()) interpret(tz.next());
    }

    void interpret(Token t) throws PostfixException {
        if (t.isNumber() || t.isName()) {
            push(st.get(t));
        } else if (t.isOperator()) {

            String operator = String.valueOf(t.operator());

            if (operator.equals("?"))
                System.out.println(peek().toString());
            else if (operator.equals("#"))
                System.out.println(this);
            else {
                Token op1 = pop();
                Token op2 = pop();

                if (operator.equals("+"))
                    push(new Token(op2.number() + op1.number()));
                 else if (operator.equals("-"))
                    push(new Token(op2.number() - op1.number()));
                 else if (operator.equals("*"))
                    push(new Token(op2.number() * op1.number()));
                 else if (operator.equals("/"))
                    push(new Token(op2.number() / op1.number()));
                 else if (operator.equals("=")) {
                    if (op2.isName())
                        st.put(Token.assign(op2.name(), op1.number()));
                    else throw new PostfixException("Assignment to non-name: " + op2.toString());
                } else throw new PostfixException("Unrecognized operator: " + t.toString());
            }
        }
    }
}


