public class Fraction{
    final int num, denom, hashcode;

    Fraction(int n, int d){
	if(d==0) throw new Error("Fraction("+n+","+d+"): denominator cannot be zero");
	num=n; denom=d; hashcode=n+d;
    }

    public String toString(){
	return "["+num+"/"+denom+"]";
    }

    public boolean equals(Object obj){

        if(obj == null || !(obj instanceof Fraction)) {
            return false;
        }

        Fraction f = ((Fraction) obj);

        return f.num == this.num && f.denom == this.denom;

    }

    public int hashCode(){return hashcode;}

    public static int gcd(int a, int b){
	a=Math.abs(a); b=Math.abs(b);
	if (a<b) return gcd(b,a);
	if (b==0) return a;
	if (a==b) return a;
	return gcd(b,a%b);

    }


    public Fraction normalize0(){
	/* implement this method */
	// Let n, d be values of num and denom.
	// If d<0, negate n and d.
	// Divide n and d by gcd(n,d) and return new Fraction.


        int n = num;
        int d = denom;

        if (d<0) {
            n = n*-1;
            d = d*-1;
        }

        int gcn = gcd(n, d);

        return new Fraction(n/gcn, d/gcn);


    }

    public static Fraction add(Fraction a, Fraction b){

        return new Fraction(a.num * b.denom + b.num * a.denom, a.denom * b.denom);


    }
    public static Fraction multiply(Fraction a, Fraction b){

        return new Fraction(a.num * b.num, a.denom * b.denom);

    }

    public Fraction intern(){return FractionFactory.get(this);}

    public Fraction normalize(){return FractionNormalizer.get(this);}
}
