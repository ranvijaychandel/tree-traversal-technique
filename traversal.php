<?php
// Define Node class
class Node {
    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

// Define BinaryTree class
class BinaryTree {
    public $root;

    public function __construct() {
        $this->root = null;
    }

    // Inorder Traversal (Left, Root, Right)
    public function inorderTraversal($node) {
        if ($node !== null) {
            $this->inorderTraversal($node->left);
            echo $node->data . " ";
            $this->inorderTraversal($node->right);
        }
    }

    // Preorder Traversal (Root, Left, Right)
    public function preorderTraversal($node) {
        if ($node !== null) {
            echo $node->data . " ";
            $this->preorderTraversal($node->left);
            $this->preorderTraversal($node->right);
        }
    }

    // Postorder Traversal (Left, Right, Root)
    public function postorderTraversal($node) {
        if ($node !== null) {
            $this->postorderTraversal($node->left);
            $this->postorderTraversal($node->right);
            echo $node->data . " ";
        }
    }

    // Level Order Traversal (BFS)
    public function levelOrderTraversal($root) {
        if ($root === null) return;

        $queue = [];
        array_push($queue, $root);

        while (!empty($queue)) {
            $node = array_shift($queue);
            echo $node->data . " ";

            if ($node->left !== null) {
                array_push($queue, $node->left);
            }
            if ($node->right !== null) {
                array_push($queue, $node->right);
            }
        }
    }
}

// Create tree and insert nodes
$tree = new BinaryTree();
$tree->root = new Node(1);
$tree->root->left = new Node(2);
$tree->root->right = new Node(3);
$tree->root->left->left = new Node(4);
$tree->root->left->right = new Node(5);
$tree->root->right->left = new Node(6);
$tree->root->right->right = new Node(7);

echo "<h1>Tree Traversal Techniques </h1>";
echo '<img src="img/binary.png"/>';
echo "<hr>";

// Display Traversals
echo "<b> Inorder Traversal: </b>";
$tree->inorderTraversal($tree->root);
echo "<br>";

echo "<b> Preorder Traversal: </b>";
$tree->preorderTraversal($tree->root);
echo "<br>";

echo "<b> Postorder Traversal: </b>";
$tree->postorderTraversal($tree->root);
echo "<br>";

echo "<b> Level Order Traversal (BFS): </b>";
$tree->levelOrderTraversal($tree->root);
echo "<br>";
?>
