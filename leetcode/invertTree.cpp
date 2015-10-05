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
    TreeNode* invertTree(TreeNode* root) {
        if(root==NULL) return root;
        TreeNode* temp = root->right;
        root->right = root->left;
        root->left = temp;
        if(root->left!=NULL)root->left = invertTree(root->left);
        if(root->right!=NULL)root->right = invertTree(root->right);
        return root;
    }

    void print(TreeNode* root){
    	if(root==NULL)return;

    	if(root->left!=NULL)
    		print(root->left);    	

    	cout<<root->val<<" ";

    	if(root->right!=NULL)
    		print(root->right);    	
    }
};

int main(){
	TreeNode node1(4);
	TreeNode node2(2);
	TreeNode node3(3);
	TreeNode node4(7);
	TreeNode node5(9);

	node1.left = &node2;
	node2.right = &node3;
	node1.right = &node4;
	node4.right = &node5;

	TreeNode *root = &node1;
	Solution obj;
	obj.print(root);
	cout<<endl;
	root = obj.invertTree(root);
	obj.print(root);
	cout<<endl;
	return 0;
}