#include <bits/stdc++.h>
using namespace std;

struct Node{
    int data;
    struct Node *left, *right;
};
 
// A utility function to create a new Binary Tree node
Node* newNode(int data){
    Node *temp = new Node;
    temp->data = data;
    temp->left = temp->right = NULL;
    return temp;
}
 
void print(map<int,vector<int>>& mm){
	for(auto it:mm){
		cout<<"level "<<it.first<<" -->";
		for(auto jt:it.second){
			cout<<jt<<" ";
		}
		cout<<endl;
	}
}

void vertical(Node* root,map<int,vector<int>>&mm, int level){
	if(!root)return;
	if(mm.find(level)==mm.end()){
		mm[level] = {root->data};
	}else{
		mm[level].push_back(root->data);
	}
	vertical(root->left,mm,level-1);
	vertical(root->right,mm,level+1);
}

int main(){
    // Create binary tree shown in above figure
    Node *root = newNode(1);
    root->left = newNode(2);
    root->right = newNode(3);
    root->left->left = newNode(4);
    root->left->right = newNode(5);
    root->right->left = newNode(6);
    root->right->right = newNode(7);
    root->right->left->right = newNode(8);
    root->right->right->right = newNode(9);
 
    cout << "Vertical order traversal is \n";
    map<int,vector<int>>mm;
 	vertical(root,mm,0);
 	print(mm);
    return 0;
}