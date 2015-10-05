//check for not perfect binary tree

#include <bits/stdc++.h>
using namespace std;



struct TreeLinkNode {
	int val;
	TreeLinkNode *left, *right, *next;
	TreeLinkNode(int x) : val(x), left(NULL), right(NULL), next(NULL) {}
};
 


class Solution {
public:
    void connect(TreeLinkNode *root) {
        if(root==NULL)return;
        TreeLinkNode *levelPointer = root;
        TreeLinkNode *cur = root;

        while(levelPointer!=NULL){
        	
        	cur = levelPointer;

        	if(cur->left!=NULL){
        		cur->left->next = cur->right;
        	}        	

        	while(cur->next!=NULL){
        		if(cur->right!=NULL)
        			cur->right->next = cur->next->left;

        		cur = cur->next;

        		if(cur->left!=NULL) 
        			cur->left->next = cur->right;        	 
        	}

        	levelPointer = levelPointer->left;
        }
    }
};

int main(){


	return 0;
}