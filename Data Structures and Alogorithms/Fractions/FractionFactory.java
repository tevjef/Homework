import java.util.HashMap;

public class FractionFactory{
    public static HashMap<Fraction,Fraction> fractions=new HashMap<Fraction,Fraction>();

    public static Fraction get(Fraction f){
        if(!fractions.containsKey(f)) {
            fractions.put(f, f);
        }
        return fractions.get(f);
    }

    public String toString(){return fractions.toString();}
}
