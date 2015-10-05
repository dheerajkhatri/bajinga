#include<bits/stdc++.h>
using namespace std;

struct TreeNode {
	int val;
	TreeNode *left;
	TreeNode *right;
	TreeNode(int x) : val(x), left(NULL), right(NULL) {}
 };


void InorderMorris(TreeNode* node){
	if(!node)return;
	TreeNode *cur,*pre;
	cur = node;
	while(cur){
		if(cur->left==NULL){
			cout<<cur->val<<" ";
			cur = cur->right;
		}else{
			pre = cur->left;
			while(pre->right!=NULL && pre->right!=cur){
				pre = pre->right;
			}

			if(pre->right==NULL){
				pre->right = cur;
				cur = cur->left;
			}else{//while reverting back threads
				pre->right = NULL;
				cout<<cur->val<<" ";
				cur = cur->right;
			}
		}
	}
	cout<<endl;
}



int main(){
	TreeNode node1(1); TreeNode node2(2); TreeNode node3(3); TreeNode node4(4); TreeNode node5(5);
	TreeNode *root = &node1;
	node1.left = &node2; node1.right = &node3; node2.left = &node4; node2.right = &node5;
	InorderMorris(root);
	return 0;
}