import java.util.Arrays;
import java.util.Scanner;
import java.io.InputStream;

public class Decoder{
    // constants
    static final int CLEAR_TABLE=256;
    static final int END_OF_DATA=257;
    // instance variables
    Table table;
    Sequence s;
    Scanner scanner;
    boolean debug=false;
    // constructor
    Decoder(InputStream is){scanner=new Scanner(is);}
    // set debugging flag
    public void setDebug(boolean b){debug=b;}

    //**** Implement this method
    // decode(n) decodes a single integer n

    int lastindex = 257;
    public void decode(int n){
        if (debug) print("decode\t" + n + "->" + Arrays.toString(table.get(n).toArray()));
        if (n == CLEAR_TABLE || n == END_OF_DATA) return;

        if (table.size() > 258) {
            table.get(table.size()-1).push(table.get(n).firstElement());
            if (debug) print("append\t" + lastindex + "->" + table.get(table.size()-1));
        }
        if (debug) print("emit\t" + n + "->" + table.get(n));
        s.addAll(table.get(n));
        if (debug) print("add\t\t" + table.size() + "->" +table.get(n).copy());
        table.add(table.get(n).copy());
        lastindex++;
    }

    void print(String str) {
        System.out.println(str);
    }
    // wrapper method to marshall input:
    // calls decode(n) on each integer n in input
    public void decode(){
    	table=new Table();
    	s=new Sequence();

    	while(scanner.hasNextInt()){
    	    int n=scanner.nextInt();
    	    decode(n);
    	}

    	if(!debug) {
            System.out.println(s.toString());
        }
    }
}