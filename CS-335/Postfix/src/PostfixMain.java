import java.util.Scanner;

public class PostfixMain{
    public static void main(String[] args){
	Postfix pf=new Postfix(new ScannerTokenizer(new Scanner(System.in)));
	try{
	    pf.run();
	}catch(Exception e){
	    e.printStackTrace();
	}

    }
}
