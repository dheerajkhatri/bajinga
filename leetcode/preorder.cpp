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

    vector<int> preorderHelper(TreeNode* root, bool firstTime) {
       static vector<int> preorder;

       if(firstTime) preorder.clear();       		       	
       //if(root!=NULL)cout<<"root is "<<root->val<<endl;

       if(root==NULL)return preorder;
       else preorder.push_back(root->val);

       preorder = preorderHelper(root->left,0);
       //cout<<"left done for "<<root->val<<endl;
       preorder = preorderHelper(root->right,0);
       //cout<<"right done for "<<root->val<<endl;
       return preorder;
    }

    bool vprint(vector<int> v){
    	vector<int>::iterator it;
    	for(it=v.begin();it!=v.end();it++){
    		cout<<*it<<" ";
    	}
    	cout<<endl;
    }

    vector<int> preorderTraversal(TreeNode* root){
    	vector<int> myvec;
    	myvec = preorderHelper(root,1);
    	return myvec;
    }
};


int main(){
	TreeNode node1(1);
	TreeNode node2(2);
	//TreeNode node3(3);
	
	TreeNode *root = &node1;
	node1.left = &node2;
	//node2.left = &node3;


	TreeNode node3(3);
	TreeNode *root2 = &node3;

	Solution obj;
	vector<int> myvec;
	myvec = obj.preorderTraversal(root);
	obj.vprint(myvec);
	myvec = obj.preorderTraversal(root2);	
	obj.vprint(myvec);
	return 0;
}