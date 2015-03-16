import java.util.Random;

public class BinaryMain{
    public static void main(String[] args) throws Exception{
        int n=Integer.valueOf(args[0]);
        BinarySearchTree s=new BinarySearchTree();
        // Random test
        Random r;
        // insert()
        r=new Random(0);
        for(int i=0; i<n; i++) s.insert(r.nextInt(Integer.MAX_VALUE));
        // find()
        r=new Random(0);
        int m=0;
        for(int i=0; i<n; i++){
            if (!s.find(m=r.nextInt(Integer.MAX_VALUE)))
                throw new Exception(m+" not found");
        }
        System.out.println("random     "+n+" "+s.getCost());

        s=new BinarySearchTree();
        // Sequential test
        // insert()
        for(int i=0; i<n; i++) s.insert(i);
        // find()
        for(int i=0; i<n; i++){
            if (!s.find(i))
                throw new Exception(i+" not found");
        }
        System.out.println("sequential "+n+" "+s.getCost());
    }
}
