import java.util.Arrays;

public class HeapSort{
    int[] a; // data is a[1..N]
    int N;
    int n;  // at each stage, data is a[1..n]
    HeapSort(int[] aa){ // constructor
        a=aa;
        N=a.length-1;
        n=N;
    }
    int left(int p){return 2*p;}
    int right(int p){return 2*p+1;}

    public String toString(){ // for output
        StringBuffer sb=new StringBuffer();
        sb.append("[").append("N="+N).append(",");
        sb.append("n="+n).append(",");
        sb.append(Arrays.toString(Arrays.copyOfRange(a,1,n+1)));
        sb.append(",");
        sb.append(Arrays.toString(Arrays.copyOfRange(a,n+1,N+1)));
        sb.append("]");
        return sb.toString();
    }

    void sort(){
        while(n>1){
            System.out.println(this);
            reheap();
            iswap(1,n);
            n--;
        }
    }

    void iswap(int p, int q) {
        // swap a[p] and a[q]
        System.out.println("swap a[" + p + "]=" + a[p] + ",a[" + q + "]=" + a[q]);
        int temp = a[p];
        a[p] = a[q];
        a[q] = temp;
    }

    // IMPLEMENT THESE METHODS
    int get(int p) {
        return p <= n ? a[p] : 0;
    }

    int imax(int p, int q) {
        return get(p) >= get(q) ? p : q;
    }

    int target(int p) {

        int largestChild = imax(left(p), right(p));

        if (p != imax(p, largestChild)) {
            return largestChild;
        }
        return p;
    }

    // IMPLEMENT THIS METHOD
    void reheap() {
        for (int p =n; p>= 1; --p) {
            int q = target(p);
            if(p != q) {
                iswap(p, q);
                p = q;
            }
        }
    }


    public static void main(String[] args){
        int[] a={0,5,3,4,6,2,1};
        HeapSort h=new HeapSort(a);
        System.out.println(h);
        h.sort();
        System.out.println(h);

        //test
        int[] b={0,5,3,4,6,2,1,20,7,19,10, 11, 11, 11 ,11,18,12,17,13,16};
        HeapSort g=new HeapSort(b);
        System.out.println(g);
        g.sort();
        System.out.println(g);
    }
}
