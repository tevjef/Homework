public class Main{
    public static void main(String[] args){
	{   // Basic construction, gcd, normalization
	    System.out.println("Basic");
	    Fraction f;
	    f=new Fraction(2,-5); System.out.println(f);
	    f=new Fraction(2,4); System.out.println(f);
	    System.out.println(Fraction.gcd(132,55));
	    System.out.println(f.normalize());
	}
	{
	    // Testing intern()
	    System.out.println("intern()");
	    Fraction a, b;
	    a=new Fraction(3,7); b=new Fraction(3,7);
	    Fraction aa=a.intern(); Fraction bb=b.intern();
	    System.out.println((a==aa)+" "+(a.equals(aa)));
	    System.out.println((b==bb)+" "+(b.equals(bb)));
	    System.out.println((a==b)+" "+(aa.equals(bb)));
	}
	{   // Testing arithmetic
	    System.out.println("Arithmetic");
	    Fraction c=(new Fraction(3,4)).intern();
	    Fraction d=(new Fraction(2,5)).intern();
	    Fraction e=Fraction.add(c,d);
	    Fraction f=Fraction.multiply(c,d);
	    System.out.println(e+" "+f);
	}   
	{
	    // Testing normalization
	    System.out.println("Normalization");
	    System.out.println(Fraction.gcd(-(1003*73),-(973*1003)));
	    Fraction a=FractionFactory.get(new Fraction(-(1003*73),-(973*1003)));
	    Fraction b=a.normalize();
	    System.out.println(a+" "+b);
	}
    }
}
