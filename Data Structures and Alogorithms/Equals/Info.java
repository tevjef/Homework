public class Info{
    String name;
    int number;
    String comment;
    
    void init(String s, int n, String c){
	name=s; number=n; comment=c;
    }
    public String toString(){
	return getClass().getName()+"["+name+","+number+","+comment+"]";
    }
}
