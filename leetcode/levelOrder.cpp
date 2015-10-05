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
    vector<vector<int>> levelOrder(TreeNode* root) {    	
    	vector<vector<int>> alllevel;

    	if(root==NULL)return alllevel;        

    	vector<TreeNode*> curlevel;
    	vector<int> curnum;

    	TreeNode* cur = root;    	
    	curlevel.push_back(cur);    	
    	curnum.push_back(cur->val);
    	alllevel.push_back(curnum);

    	while(curlevel.size()>0){    		    	
    		//print(curlevel);
    		vector<TreeNode*> nextlevel;    		
    		vector<int> nextnum;
    		TreeNode* node;

    		for(int i =0;i<curlevel.size();i++){    			
    			node = curlevel[i];    			

    			if(node->left!=NULL) {nextlevel.push_back(node->left);nextnum.push_back(node->left->val);}
    			if(node->right!=NULL) {nextlevel.push_back(node->right); nextnum.push_back(node->right->val);}

    		}
    		curlevel.clear();    		
    		curlevel = nextlevel;
    		if(nextnum.size())alllevel.push_back(nextnum);
    		curnum.clear();
            curnum = nextnum;
    	}

    	return alllevel;
    	
    }

    void print(vector<vector<int>> v){    	
    	for(int i=0;i<v.size();i++){
    		for(int j=0;j<v[i].size();j++)
    			cout<<v[i][j]<<" ";
    		cout<<endl;
    	}    	
    }
};

int main(){
	TreeNode node1(5); TreeNode node2(4); TreeNode node3(8);
	TreeNode node4(11);TreeNode node5(13);TreeNode node6(4);
	TreeNode node7(7);TreeNode node8(2);TreeNode node9(1);

	TreeNode *root = &node1; node1.left = &node2; node1.right = &node3;
	node2.left = &node4; node3.left = &node5; node3.right= &node6;
	node4.left = &node7;node4.right = &node8;node6.right = &node9;

	vector<vector<int>>v;

	Solution obj;    
	v = obj.levelOrder(root);
	obj.print(v);
	return 0;
}