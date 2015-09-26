import java.util.Scanner;

public class PostfixMainTest{
    public static void main(String[] args){
	String[] input={
	    "2 2 + ?",
	    "1 2 + 3 4 * + ?",
	    "1 2 3 4 # + * + ?",
	    "asdf 42 = asdf ?",
	    "a a 42 = a b 13 = b +  ?",
	    "1 2 + +",
	    "1 2 $",
	    "a 42 = 42 a = ?"
	};

	for(int i=0; i<input.length; i++){
	    String s=input[i];
	    System.out.println(s);
	    Postfix pf=new Postfix(new ScannerTokenizer(new Scanner(s)));
	    try{
		pf.run();
	    }catch(Exception e){
		e.printStackTrace();
	    }
	}

    }
}
