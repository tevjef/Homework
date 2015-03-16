public class Info1 extends Info{
    String name;
    int number;
    String comment;
    
    void init(String s, int n, String c){
	name=s; number=n; comment=c;
    }

    public boolean equals (Object obj) {

    	if(obj != null) return false;
    	if(obj instanceof Info1) {
    		return ((Info1)obj).name.equals(name) && 
    			((Info1)obj).number == number &&
    			((Info1)obj).comment.equals(comment);
    	}

    	return false;
    	
    }
    
}
