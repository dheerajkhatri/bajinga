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
	bool symHelper(TreeNode* root1, TreeNode* root2){
		if(root1==NULL && root2==NULL)return true;
		if((root1==NULL && root2!=NULL) || root1!=NULL && root2==NULL)return false;
		bool lsym = symHelper(root1->left,root2->right);
		bool rsym = symHelper(root1->right,root2->left);
		if(root1->val!=root2->val || !lsym || !rsym)return false;
		return true;
	}

    bool risSymmetric(TreeNode* root) {
		if(root==NULL) return true;
		return(symHelper(root->left,root->right));
    }    

    bool isSymmetric(TreeNode* root){
    	int i,j,len,lol;
    	if(root==NULL)return true;
    	TreeNode *cur1,*cur2,*cur;
    	deque<TreeNode*>todo;
    	deque<TreeNode*>nowdo;
    	bool allnull = false;
    	todo.push_back(root);

    	while(!allnull){
    		allnull=true;	    		
    		while(!todo.empty()){
				cur = todo.front();
				todo.pop_front();				
				if(cur==NULL)continue;
				if(cur->left!=NULL){nowdo.push_back(cur->left);allnull=false;}//cout<<cur->left->val<<" left pushed"<<endl;cin>>lol;}
				else nowdo.push_back(NULL);
				if(cur->right!=NULL){nowdo.push_back(cur->right);allnull=false;}//cout<<cur->right->val<<" right pushed"<<endl;cin>>lol;}
				else nowdo.push_back(NULL);
    		}
    		todo.clear();todo=nowdo;nowdo.clear();
    		//check nowdo values are same
    		len = nowdo.size();
    		for(i=0,j=len-1;i<j;i++,j--){
    			if((nowdo[i]==NULL && nowdo[j]!=NULL) || (nowdo[i]!=NULL && nowdo[j]==NULL))return false;
				if(nowdo[i]!=NULL && nowdo[j]!=NULL)
    				if(nowdo[i]!=nowdo[j])return false;
    		}
    	}

    	return true;
    }
};


int main(){
	Solution obj;
	TreeNode node1(1);
	TreeNode node2(2);
	TreeNode node3(3);
	TreeNode node4(4);
	TreeNode node5(2);
	TreeNode node6(3);
	TreeNode node7(4);

	node1.left = &node2;
	/*node1.right = &node5;

	node2.left = &node3;
	node2.right = &node4;

	node5.left = &node7;
	node5.right = &node6;*/
	TreeNode* root = &node1;
	cout<<obj.isSymmetric(root)<<endl;

}