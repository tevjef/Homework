import java.util.HashMap;

public class FractionNormalizer{
    public static HashMap<Fraction,Fraction> normalizations=new HashMap<Fraction,Fraction>();
    
    public static Fraction get(Fraction f){
        if(!normalizations.containsKey(f)) {
            Fraction v = f.normalize0();
            normalizations.put(f, v);
        }
        return normalizations.get(f);
    }

    public String toString(){return normalizations.toString();}
}
