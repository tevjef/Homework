public class Info2 extends Info1{
    String name;
    int number;
    String comment;
    
    void init(String s, int n, String c){
	name=s; number=n; comment=c;
    }

    public int hashCode () {
    	return (name+number+comment).hashCode();
    }
}