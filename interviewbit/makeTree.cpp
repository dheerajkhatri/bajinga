#include <bits/stdc++.h>
using namespace std;

struct TreeNode {
	int val;
	TreeNode *left;
	TreeNode *right;
	TreeNode(int x) : val(x), left(NULL), right(NULL) {}
 };


TreeNode* getNode(int val){
	TreeNode *newnode = new TreeNode(val);	
	newnode->left = NULL;
	newnode->right = NULL;
	return newnode;
}

void inorder(TreeNode* root){
	if(root){
		if(root->left)inorder(root->left);
		cout<<root->val<<endl;
		if(root->right)inorder(root->right);	
	}	
}

int main(int argc,char*argv[]){
	int len = atoi(argv[1]),pos=0,num1,num2;
	
	vector<TreeNode*>makeTree;
	TreeNode *head;

	TreeNode *node1 = getNode(atoi(argv[2]));
	makeTree.push_back(node1);
	head = node1;

	for(int i=1;i<len;++i,++pos){
		num1  = atoi(argv[i+2]);
		i++;
		num2  = atoi(argv[i+2]);

		if(num1!=-1){
			TreeNode  *newnode = getNode(num1);
			makeTree[pos]->left = newnode;
			makeTree.push_back(newnode);
		}
		if(num2!=-1){
			TreeNode  *newnode = getNode(num2);
			makeTree[pos]->right = newnode;
			makeTree.push_back(newnode);
		}
	}

	inorder(head);
	//cout<<endl;
}