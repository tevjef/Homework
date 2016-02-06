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
    int lastIndex;

    public void decode(int n){
        lastIndex = table.size() - 1;
        print("decode\t" + n + "->" + Arrays.toString(table.get(n).toArray()));
        if (n == 256 || n == 257) return;

        Sequence seq;

        if (n < table.size()) {
             seq = table.get(n);

            if (table.size() != 258) {
                table.get(lastIndex).push(seq.firstElement());
                print("append\t" + lastIndex + "->" + table.get(lastIndex).toString());
            }

            print("emit\t" + n + "->" + table.get(n));

            table.add(seq.copy());
            print("add\t\t" + (table.size() - 1) + "->" + table.get(table.size() -1).toString());
            s = seq.copy();

        } /*else {
            seq = s.copy();
            seq.push(seq.firstElement());
            System.out.println(n + "->" + java.util.Arrays.toString(seq.toArray()));
            table.add(seq);
        }*/


    }

    int line = 1;
    void print(String str) {
        System.out.println(line++ + ":\t" + str);
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
            System.out.println();
        }
    }
}