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
    int minDepth(TreeNode* root) {    	
    	if(root==NULL)return 0;
        int count = 1;
    	vector<TreeNode*> curlevel;       	
    	TreeNode* cur = root;    	
    	curlevel.push_back(cur);    	

    	while(curlevel.size()>0){    		    	
    		//print(curlevel);
    		vector<TreeNode*> nextlevel;    		
    		TreeNode* node;

    		for(int i =0;i<curlevel.size();i++){    			
    			node = curlevel[i];    			
    			if(node->left==NULL && node->right==NULL)return count;    			
    			if(node->left!=NULL) nextlevel.push_back(node->left);    				
    			if(node->right!=NULL) nextlevel.push_back(node->right);    				

    		}
    		curlevel.clear();    		
    		curlevel = nextlevel;
            count++;    		
    	}

    	return count;
    }

    void print(vector<TreeNode*> v){    	
    	for(int i=0;i<v.size();i++)
    		cout<<v[i]->val<<" ";
    	cout<<endl;
    }
};

int main(){
	TreeNode node1(5); TreeNode node2(4); TreeNode node3(8);
	TreeNode node4(11);TreeNode node5(13);TreeNode node6(4);
	TreeNode node7(7);TreeNode node8(2);TreeNode node9(1);

	TreeNode *root = &node1; node1.left = &node2; node1.right = &node3;
	node2.left = &node4; node3.left = &node5; node3.right= &node6;
	node4.left = &node7;node4.right = &node8;node6.right = &node9;

	Solution obj;    
	cout<<obj.minDepth(root)<<endl;
	return 0;
}