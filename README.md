# Tree Traversal Technique
All Traversal techniques are explained along with code implementation in core php. The code is presented as a learning tool for understanding Data Structures and Algorithms (DSA).
## A: Depth-First Search (DFS)
*DFS explores as far as possible along each branch before backtracking. This category includes:*
### 1: Inorder Traversal (Left → Root → Right)
* Visits the left subtree, then the root node, then the right subtree.
* Commonly used in Binary Search Trees (BSTs) to print nodes in sorted order.
* Order: Left -> Root -> Right.
### 2: Preorder Traversal (Root → Left → Right)
* Visits the root node, then the left subtree, then the right subtree.
* Commonly used in BSTs to create a copy of the tree.
* Order: Root -> Left -> Right.
### 3: Postorder Traversal (Left → Right → Root)
* Visits the left subtree, then the right subtree, then the root node.
* Commonly used in BSTs to delete a tree.
* Order: Left -> Right -> Root.
## B: Breadth-First Search (BFS)
*BFS explores all the nodes at the present depth prior to moving on to nodes at the next depth
level.*
### 1: Level Order Traversal (Root → Left → Right)

