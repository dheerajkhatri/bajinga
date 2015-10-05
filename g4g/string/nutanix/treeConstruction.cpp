#include <bits/stdc++.h>
using namespace std;

struct Node{
	int data;
	Node *left,*right;
};

Node* createNode(int n){
	Node* newnode = new Node;
	newnode->data = n;
	newnode->left = newnode->right = NULL;
	return newnode;
}

Node* makeTree(){
	Node *root = createNode(1);
    root->left = createNode(2);
    root->right = createNode(3);
    root->left->left = createNode(4);
    root->left->right = createNode(5);
    root->right->left = createNode(6);
    root->right->right = createNode(7);
    root->right->left->right = createNode(8);
    root->right->right->right = createNode(9);
    return root;
}

void printInorder(Node* root){
	if(root){
		cout<<root->data<<" ";
		printInorder(root->left);
		printInorder(root->right);
	}
}

void printMap(map<int,vector<int>>& mm){
	for(auto it:mm){
		cout<<it.first<<" ..";
		for(auto jt:it.second){
			cout<<jt<<" ";
		}
		cout<<endl;
	}
}

void printVec(vector<int>&v){
	for(auto it:v){
		cout<<it<<" ";
	}
	cout<<endl;
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

/*TODO
height of tree
levelOrder zigZa
left view right view top view
boundary elements
inorder,preorder,postorder by stack
populate next pointer
LCA invert mirror flattentoList*/

Node* inprePostUtil(){

}

Node* inprePost(){

}

vector<int>inOrder(Node* node){
	if(!node)return vector<int>();
	Node* cur = node;
	stack<Node*>s;
	vector<int>result;

	while(!s.empty() || cur){
		if(cur){
			s.push(cur);
			cur = cur->left;
		}else{
			Node* st = s.top();
			s.pop();
			result.push_back(st->data);
			cur = st->right;			
		}
	}
	return result;
}

vector<int>preOrder(Node* node){
	if(!node)return vector<int>();
}

vector<int>preOrder(Node* node){

}

Node* inpostPreUtil(vector<int>& in,int istart, int iend, vector<int>& post, int pstart, int pend, bool possible){
	if(istart>iend || pstart>pend || !possible)return NULL;
	int rootval = post[pend];
	Node* root = createNode(rootval);

	int rootindex,i;
	//find root in inorder
	for(i=istart;i<=iend;i++){
		if(in[i]==rootval){
			rootindex = i;
			break;
		}
	}
	if(i==iend+1){
		cout<<"Not possible"<<endl;
		possible = false;
		return NULL;
	}
	//split left right in inorder and postorder
	int arrlen = rootindex-istart;
	root->left = inpostPreUtil(in,istart,rootindex-1,post,pstart,pstart+arrlen-1,possible);
	root->right = inpostPreUtil(in,rootindex+1,iend,post,pstart+arrlen,pend-1,possible);
	return root;
}

Node* inpostPre(vector<int>& in ,vector<int>& post){
	if(in.size()!=post.size()){
		cout<<"NOt possible size not same"<<endl;
		return NULL;
	}else{
		bool possible = true;
		Node* root =  inpostPreUtil(in,0,in.size()-1,post,0,post.size()-1,possible);		
		if(!possible){
			cout<<"NOt possible"<<endl;
			return NULL;	
		}else{
			return root;
		}
	}
}

int main(){
	vector<int> in = {4,2,5,1,6,8,3,7,9};
	vector<int>post = {4,5,2,8,6,9,7,3,1};
	vector<int>pre = {1,2,4,5,3,6,8,7,9};
	

	//get preorder from inorder and postorder
	Node* root = inpostPre(in,post);
	cout<<"Inorder of pre <-- in+post ...\n";
	printInorder(root);cout<<endl;

	root = makeTree();
	
	//get inorder vector
	cout<<"Inorder by stack.."<<endl;
	vector<int>invec = inOrder(root);
	printVec(invec);

	cout<<"Preorder by stack.."<<endl;
	vector<int>prevec = preOrder(root);
	printVec(prevec);	

}