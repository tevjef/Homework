import java.util.HashMap;

public class ID{
    // object pool: class (not instance) variable
    private static HashMap<ID,ID> pool=new HashMap<ID,ID>();

    // fields for instance variables
    private String name;
    private int number;

    // constructor
    ID(String s, int n){name=s; number=n;}

    // string version
    public String toString() {
        StringBuffer sb=new StringBuffer();
        sb.append("[").append(name).append(",").append(number).append("]");
        return sb.toString();
    }

    //equals: is this equal to obj?
    public boolean equals(Object obj){ 
        if (obj == null) return false;
        if (obj instanceof ID) {
            ID id = (ID)obj;
            return this.name.equals(id.name) && this.number == id.number;
        }
        return false;
    }

    // hashCode: must be compatible with equals
    public int hashCode(){ 
        return name.hashCode() + number;
    }

    // intern: returns reference to pool
    public ID intern(){
        if (!pool.containsKey(this)) {
            pool.put(this, this);
        }
        return pool.get(this);
    }

    public static void main(String[] args){
        // create two equal but not identical objects
        ID id1=new ID("John",123);
        ID id2=new ID("John",123);
        System.out.println(id1+" "+id2);
        System.out.println(id1.equals(id2)); // expect true
        System.out.println(id1==id2);        // expect false
        // intern the objects: they should now be identical
        id1=id1.intern();
        id2=id2.intern();
        System.out.println(id1+" "+id2);
        System.out.println(id1.equals(id2)); // expect true
        System.out.println(id1==id2);        // expect true
    }
}