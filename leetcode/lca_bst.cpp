#include <bits/stdc++.h>
using namespace std;

struct TreeNode {
	int val;
	TreeNode *left;
	TreeNode *right;
	TreeNode(int x) : val(x), left(NULL), right(NULL) {}
 };

class Solution {
public:    

    TreeNode* lowestCommonAncestor(TreeNode* root, TreeNode* p, TreeNode* q) {
 		if(root==NULL) return root; 		 		
 		TreeNode *ptr = root; 		
 		while(ptr!=NULL){ 			
 			if(ptr->val > p->val && ptr->val > q->val) ptr = ptr->left;
 			else if(ptr->val < p->val && ptr->val < q->val) ptr = ptr->right;
 			else return ptr; 		
 		} 		
 		return ptr;
    }
};

int main(){
	TreeNode node1(b);
	TreeNode node2(2);
	TreeNode node3(3);
	TreeNode node4(6);
	TreeNode node5(8);

	node1.left = &node2;
	node2.right = &node3;
	node1.right = &node4;
	node4.right = &node5;

	TreeNode *root = &node1;
	TreeNode *n1 = &node2;
	TreeNode *n2 = &node4;
	Solution obj;		
	root = obj.lowestCommonAncestor(root,n1,n2);	
	cout<<root->val<<endl;	
	return 0;
}