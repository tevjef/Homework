import java.util.HashMap;

public class SymbolTable extends HashMap<String,Token>{
    public void put(Token t){
	if (!t.hasName()) return;
	put(t.name(),t);
    }
    public Token get(Token t){
	if (!t.hasName()) return t;
	if (!containsKey(t.name())) {
	    put(t);
	}
	return get(t.name());
    }
}
