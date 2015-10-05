#include <bits/stdc++.h>
using namespace std;

Node{
	int data;
	Node *left,*right;
};

print(Node* root){
	if(root){
		cout<<root->data<<" ";
		print(root->left);
		print(root->right);
	}
}

Node* inprePost(){

}

Node* inpostPre(vector<int>& in,int istart, int iend, vector<int>& post, int pstart, int pend){

}

int main(){
	

}