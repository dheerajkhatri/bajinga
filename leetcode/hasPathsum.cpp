#include <bits/stdc++.h>
using namespace std;

//leaf which has both left and right child as NULL

struct TreeNode {
	int val;
	TreeNode *left;
	TreeNode *right;
	TreeNode(int x) : val(x), left(NULL), right(NULL) {}
};

class Solution {
public:
    bool hasPathSum(TreeNode* root, int sum) {    	
    	if(root==NULL)return false;

    	vector<TreeNode*> curlevel;   
    	vector<int> cursum;
    	TreeNode* cur = root;    	
    	curlevel.push_back(cur);
    	cursum.push_back(cur->val);

    	while(curlevel.size()>0){    		    	
    		//print(curlevel);
    		vector<TreeNode*> nextlevel;
    		vector<int> nextsum;
    		TreeNode* node;
    		int sumtill = 0;
    		for(int i =0;i<curlevel.size();i++){
    			
    			node = curlevel[i];
    			sumtill = cursum[i];

    			if( (node->left==NULL && node->right==NULL) && sumtill==sum)return true;    			

    			if(node->left!=NULL){
    				nextlevel.push_back(node->left);
    				nextsum.push_back(sumtill+node->left->val);
    			}
    			if(node->right!=NULL){
    				nextlevel.push_back(node->right);
    				nextsum.push_back(sumtill+node->right->val);
    			}    			

    		}
    		curlevel.clear();
    		cursum.clear();
    		curlevel = nextlevel;
    		cursum = nextsum;
    	}
    	return false;
    }

    void print(vector<TreeNode*> v){    	
    	for(int i=0;i<v.size();i++)
    		cout<<v[i]->val<<" ";
    	cout<<endl;
    }
};

int main(){
	TreeNode node1(1); TreeNode node2(2); /*TreeNode node3(8);
	TreeNode node4(11);TreeNode node5(13);TreeNode node6(4);
	TreeNode node7(7);TreeNode node8(2);TreeNode node9(1);*/

	TreeNode *root = &node1; node1.left = &node2; /*node1.right = &node3;
	node2.left = &node4; node3.left = &node5; node3.right= &node6;
	node4.left = &node7;node4.right = &node8;node6.right = &node9;*/

	Solution obj;
	cout<<obj.hasPathSum(root,1)<<endl;cout<<"-----------"<<endl;
	cout<<obj.hasPathSum(root,2)<<endl;cout<<"-----------"<<endl;
	cout<<obj.hasPathSum(root,3)<<endl;cout<<"-----------"<<endl;
	return 0;
}