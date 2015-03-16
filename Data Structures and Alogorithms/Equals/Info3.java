public class Info3 extends Info {
    String name;
    int number;
    
    void init(String s, int n){
	name=s; number=n;
    }

    public boolean equals (Object obj) {

    	if(obj != null) return false;
    	if(obj instanceof Info3) {
    		return this.hashCode() == ((Info3)obj).hashCode();
    	}

    	return false;
    	
    }

    public int hashCode() {
    	return (name+number).hashCode();
    }
}
