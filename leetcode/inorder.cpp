#include <bits/stdc++.h>
#include <typeinfo>
using namespace std;

 
 
struct TreeNode {
	int val;
	TreeNode *left;
	TreeNode *right;
	TreeNode(int x) : val(x), left(NULL), right(NULL) {}
};
 

class Solution {
public:	

    vector<int> inorderHelper(TreeNode* root, bool firstTime) {
       static vector<int> inorder;

       if(firstTime) inorder.clear();       		       	
       //if(root!=NULL)cout<<"root is "<<root->val<<endl;

       if(root==NULL)return inorder;
       inorder = inorderHelper(root->left,0);

       inorder.push_back(root->val);

       inorder = inorderHelper(root->right,0);
       return inorder;
    }

    bool vprint(vector<int> v){
    	vector<int>::iterator it;
    	for(it=v.begin();it!=v.end();it++){
    		cout<<*it<<" ";
    	}
    	cout<<endl;
    }

    vector<int> inorderTraversal(TreeNode* root){
    	vector<int> myvec;
    	myvec = inorderHelper(root,1);
    	return myvec;
    }
};


int main(){
	TreeNode node1(1);
	TreeNode node2(2);
	TreeNode node3(3);
	
	TreeNode *root = &node1;
	node1.right = &node2;
	node2.left = &node3;	

	Solution obj;
	vector<int> myvec;
	myvec = obj.inorderTraversal(root);
	obj.vprint(myvec);	
	return 0;
}