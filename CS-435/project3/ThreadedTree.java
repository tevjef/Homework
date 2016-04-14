import java.util.Random;

public class ThreadedTree extends BinaryTree{

    Node root;

    ThreadedTree(){
        root=new Node(Integer.MIN_VALUE); // -infinity
        root.thread=true;
        root.right=root;
    }

    void insert(Node p, Node q){ 
        // always called with p non null
        // note difference with regular binary 
        // with recursion on right subtree
        if(q.data<p.data){
            if(p.left!=null) insert(p.left,q);
            else insertLeft(p,q);
        }else if(p.data<q.data){
            //*********** note difference with BinaryTree
            if(!p.thread) insert(p.right,q);
            else insertRight(p,q);
        }
    }

    void insert(int n){
        Node q=new Node(n);
        insert(root,q);
    }


    void insertRight(Node p, Node q){
        // insert q into right subtree of p
        // IMPLEMENT THIS METHOD
        Node temp = p.right;
        p.right = q;
        q.right = temp;
        q.thread = true;
        p.thread = false;   
    }

    void insertLeft(Node p, Node q){
        // insert q into left subtree of p
        // IMPLEMENT THIS METHOD
        p.left = q;
        q.right = p;
        q.thread = true;
    }

    Node succ(Node p){
        // Find inorder successor of p
        Node q=p.right;
        if(p.thread) return q;
        while(q.left!=null) q=q.left;
        return q;
    }
    void inorder(){
        // IMPLEMENT THIS METHOD USING THREADS
        System.out.print(root.data+ " ");
        Node curr = succ(root);
        while (curr != root) {
            System.out.print(curr.data+ " ");
            curr = succ(curr);
        }
    }
}