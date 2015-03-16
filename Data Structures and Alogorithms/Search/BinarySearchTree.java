public class BinarySearchTree implements Search{
    private Node root;
    private int cost;
    @Override
    public void insert(int n) {
        root = insert(root, n);
    }

    private Node insert(Node node, int n) {
        if(node == null) {
            node = new Node(n);
        } else {
            if (n > node.data) {
                node.right = insert(node.right, n);
            } else if (n < node.data) {
                node.left = insert(node.left, n);
            }
        }
        return node;
    }

    @Override
    public boolean find(int n) {
        return find(root, n) != null;
    }

    private Node find(Node node, int n) {
        cost++;
        if(node != null) {
            if (node.data == n) {
                return node;
            } else {
                if(n < node.data)
                    return find(node.left, n);
                if(n > node.data)
                    return find(node.right, n);
            }
        } return null;
    }

    @Override
    public int getCost() {
        return cost;
    }

    @Override
    public void resetCost() {
        cost = 0;
    }
}
