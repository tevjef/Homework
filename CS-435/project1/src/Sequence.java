import java.util.Iterator;
import java.util.Stack;

public class Sequence extends Stack<Integer>{
    Sequence(){
    	super();
    }
    
    Sequence(int n){
    	push(n);
    }

    public Sequence copy(){
		Sequence t=new Sequence(); 
		t.addAll(this);
		return t;
    }

    @Override
    public synchronized String toString() {
        StringBuilder sb = new StringBuilder(this.size());
        for (int i : this) {
            sb.append(i);
            sb.append(" ");
        }
        return sb.toString().trim();
    }
}