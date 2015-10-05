//Given an array where elements are sorted in ascending order, convert it to a height balanced BST.

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
	TreeNode* helper(int start, int end, vector<int>& nums){
		if(start>end) return NULL;
		int middle = start+((end-start)/2);
		TreeNode* root;
		root = new TreeNode(nums[middle]);		
		root->left = helper(start,middle-1,nums);
		root->right = helper(middle+1,end,nums);
		return root;
	}

    TreeNode* sortedArrayToBST(vector<int>& nums) {
 		int len = nums.size();
 		if(len==0)return NULL;
 		return(helper(0,len-1,nums));
    }

    void inorder(TreeNode* root){
    	if(root==NULL)return;
    	if(root->left!=NULL)
    		inorder(root->left);
    	cout<<root->val<<" ";
    	if(root->right!=NULL)
    		inorder(root->right);
    }
};


int main(){
	vector<int>myvec;
	Solution obj;
	for(int i =0;i<100;i++)
		myvec.push_back(i);

	TreeNode *root = obj.sortedArrayToBST(myvec);
	obj.inorder(root);
	cout<<endl;
	return 0;
}