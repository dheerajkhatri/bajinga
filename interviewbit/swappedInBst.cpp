#include<bits/stdc++.h>
using namespace std;

struct TreeNode {
	int val;
	TreeNode *left;
	TreeNode *right;
	TreeNode(int x) : val(x), left(NULL), right(NULL) {}
 };


vector<int> InorderMorris(TreeNode* node){
	int val1=numeric_limits<int>::min(),val2=numeric_limits<int>::min();
	TreeNode *node1 = NULL,*node2=NULL,*prevnode=NULL;
	int preval = numeric_limits<int>::min();
	bool inv1=false,inv2=false;
    
    vector<int>result;
	if(!node)return result;
	TreeNode *cur,*pre;
	cur = node;

	while(cur){
		if(cur->left==NULL){			
			cout<<cur->val<<" ";
			if(cur->val < preval && (!inv1 || !inv2)){				
				if(!inv1){
					val1 = preval;
					inv1 = true;
					node1 = prevnode;
				}else{
					val2 = cur->val;
					inv2 = true;
					node2 = cur;
					//break;
				}				
			}
			preval = cur->val;
			prevnode = cur;
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
				if(cur->val < preval && (!inv1 || !inv2)){					
					if(!inv1){
						val1 = preval;
						inv1 = true;
						node1= prevnode;
					}else{
						val2 = cur->val;
						inv2 = true;
						node2 = cur;
						//break;
					}				
				}
				preval = cur->val;
				prevnode = cur;
				cur = cur->right;
			}
		}
	}
	cout<<endl;cout<<"that's completed-------------------------------------------------"<<endl;		
	
	if(inv1 && inv2){
		cout<<"inv2 true"<<endl;
		cout<<val1<<" "<<val2<<endl;	
		result.push_back(val2);
		result.push_back(val1);
	}
	if(inv1 && !inv2){
		cout<<"getSuccessor of "<<node1->val<<endl;		
		node2 = node1->right;		
		while(node2->left)	{
			node2 = node2->left;
		}
		if(node2)cout<<node2->val<<endl;		
		result.push_back(node2->val);
		result.push_back(node1->val);
	}
	return result;
}

TreeNode* getNode(int val){
	TreeNode *newnode = new TreeNode(val);	
	newnode->left = NULL;
	newnode->right = NULL;
	return newnode;
}

void inorder(TreeNode* root){
	if(root){
		if(root->left)inorder(root->left);
		cout<<root->val<<" ";
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
	//cout<<"INORDER----------------------------------------------------------------------"<<endl;
	//inorder(head);cout<<endl;
	cout<<"MORRIS-----------------------------------------------------------------------"<<endl;
	vector<int>ret = InorderMorris(head);	
	cout<<"-----------------------------------------------------------------------------"<<endl;
	//cout<<ret[0]<<" "<<ret[1]<<endl;
	return 0;
}