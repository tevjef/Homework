import java.util.ArrayList;
import java.util.HashSet;

public class InfoMain{

    public static void main(String[] args){
	{
	    System.out.println("Info");
	    Info a=new Info(); a.init("asdf",123,"comment");
	    Info b=new Info(); b.init("asdf",123,"comment");
	    Info c=new Info(); c.init("asdf",123,"");
	    InfoTester.test(a,b,c);
	}
	{
	    System.out.println("Info1");
	    Info a=new Info1(); a.init("asdf",123,"comment");
	    Info b=new Info1(); b.init("asdf",123,"comment");
	    Info c=new Info1(); c.init("asdf",123,"");
	    InfoTester.test(a,b,c);
	}
	{
	    System.out.println("Info2");	
	    Info a=new Info2(); a.init("asdf",123,"comment");
	    Info b=new Info2(); b.init("asdf",123,"comment");
	    Info c=new Info2(); c.init("asdf",123,"");
	    InfoTester.test(a,b,c);
	}
	{
	    System.out.println("Info3");
	    Info a=new Info3(); a.init("asdf",123,"comment");
	    Info b=new Info3(); b.init("asdf",123,"comment");
	    Info c=new Info3(); c.init("asdf",123,"");
	    InfoTester.test(a,b,c);
	}
	{
	    System.out.println("Info4");
	    Info a=new Info4(); a.init("asdf",123,"comment");
	    Info b=new Info4(); b.init("asdf",123,"comment");
	    Info c=new Info4(); c.init("ASDF",123,"");
	    InfoTester.test(a,b,c);
	}

    }


}
