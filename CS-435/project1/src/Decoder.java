import java.io.FileNotFoundException;
import java.io.PrintWriter;
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
    private String debugOutput;
    private boolean writeToFile;

    // constructor
    Decoder(InputStream is){scanner=new Scanner(is);}
    // set debugging flag
    public void setDebug(boolean b){debug=b;}
    public void writeToFile(boolean b){writeToFile=b;}

    //**** Implement this method
    // decode(n) decodes a single integer n

    int lastIndex = 257;
    public void decode(int n){
        if (debug) print("decode\t" + n + "->" + Arrays.toString(table.get(n).toArray()));
        if (n == CLEAR_TABLE || n == END_OF_DATA) return;

        if (table.size() > 258) {
            table.get(table.size()-1).push(table.get(n).firstElement());
            if (debug) print("append\t" + lastIndex + "->" + table.get(table.size()-1));
        }
        if (debug) print("emit\t" + n + "->" + table.get(n));
        s.addAll(table.get(n));
        if (debug) print("add\t\t" + table.size() + "->" +table.get(n).copy());
        table.add(table.get(n).copy());
        lastIndex++;
    }

    void print(String str) {
        debugOutput+=str;
        debugOutput+="\n";
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

        String fileName = debug? "decoder.output.debug": "decoder.output";
        String fileContents = debug? debugOutput:s.toString();

        if (writeToFile) {
            try {
                PrintWriter out = new PrintWriter(fileName);
                out.println(fileContents);
                out.flush();
                out.close();
                System.out.print("Wrote file: "+fileName);
            } catch (FileNotFoundException e) {
                e.printStackTrace();
            }
        } else {
            System.out.print(fileContents);
        }
    }
}