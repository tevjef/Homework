import java.util.ArrayList;


public class LinearSearch extends ArrayList<Integer> implements Search{
    private int cost;
    public int getCost(){return cost;}
    public void resetCost(){cost=0;}

    public void insert(int n){add(n);}

    public boolean find(int n){
	for(Integer i: this){
	    cost++;
	    if (i.intValue()==n) return true;
	}
	return false;
    }
}
