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
    bool balanceHelper(TreeNode* root, int& height){
        if(root==NULL){
            height = 0;
            return true;
        }
        
        if(root->left==NULL && root->right==NULL){
            height = 1;
            return true;
        }

        int lh=0,rh=0,lb=0,rb=0;
        lb = balanceHelper(root->left,lh);
        rb = balanceHelper(root->right,rh);
        
        if(!lb || !rb){
            height = -1;
            return false;
        }else if(abs(lh-rh)>1){
            height = -1;
            return false;
        }else{
            height =  max(lh,rh)+1;
            return true;
        }
    }

    bool isBalanced(TreeNode* root) {
        if(root==NULL)return true;
        int lh=0,rh=0,lb=0,rb=0;
        lb = balanceHelper(root->left,lh);
        rb = balanceHelper(root->right,rh);
        //cout<<lh<<" "<<rh<<endl;
        if(!lb || !rb)return false;
        else if(abs(lh-rh)>1)return false;
        else return true;
    }
};

int main(){
    TreeNode *root;
    TreeNode node1(1);
    TreeNode node2(2);
    TreeNode node3(3);

    node1.right = &node2;
    node1.left   = &node3;
    root = &node1;
    Solution obj;
    cout<<obj.isBalanced(root)<<endl;
    return 0;
}