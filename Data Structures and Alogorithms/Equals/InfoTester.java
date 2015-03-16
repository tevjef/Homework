import java.util.ArrayList;
import java.util.HashSet;

public class InfoTester{
    
    public static void test(Info a, Info b, Info c){
	System.out.println("a="+a);
	System.out.println("b="+b);
	System.out.println("a==b: "+(a==b));
	System.out.println("a.equals(b): "+a.equals(b));
	System.out.println("a.hashCode()==b.hashCode(): "+(a.hashCode()==b.hashCode()));
	System.out.println("a.hashCode()="+a.hashCode());
	System.out.println("b.hashCode()="+b.hashCode());
	ArrayList<Info> list=new ArrayList<Info>();
	list.add(a);
	System.out.println("list.contains(a): "+list.contains(a));
	System.out.println("list.contains(b): "+list.contains(b));
	HashSet<Info> set=new HashSet<Info>();
	set.add(a);
	System.out.println("set.contains(a): "+set.contains(a));
	System.out.println("set.contains(b): "+set.contains(b));
	System.out.println("c="+c);
	System.out.println("a==c: "+(a==c));
	System.out.println("a.equals(c): "+a.equals(c));
	System.out.println("a.hashCode()="+a.hashCode());
	System.out.println("c.hashCode()="+c.hashCode());
	System.out.println("list.contains(c): "+list.contains(c));
	System.out.println("set.contains(c): "+set.contains(c));
    }
}
