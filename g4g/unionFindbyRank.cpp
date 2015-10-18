#include <bits/stdc++.h>
using namespace std;

struct node{
	int key;
	int rank;
	node* parent;	
};

unordered_map<int,struct node*>mm;

void makeSet(int key){
	struct node *newnode = new struct node;
	newnode->key = key;
	newnode->parent = newnode;
	mm[key] = newnode;
}

void union(int data1, int data2){
	struct node* n1 = mm[data1];
	struct node* n2 = mm[data2];

	if(mm.find(data1)==mm.end() || mm.find(data2)==mm.end())return;
	struct node* p1 = findSet(mm[data1]);
	struct node* p2 = findSet(mm[data2]);

	//doesn't care about rank of non root node
	if(p1->key == p2->key)return;
	//UNION BY RANK
	else if(p1->rank >= p2->rank){
		p1->rank = (p1->rank == p2->rank) ? (p1->rank)+1 : p1->rank;
		p2->parent = p1;		
	}else{
		p1->parent = p2;
	}
}


struct node* findSetUtil(struct node* curnode){
	struct node* curparent = curnode->parent;
	if(curparent==curnode)return curparent;
	//PATH COMPRESSION
	curnode->parent = findSetUtil(curnode->parent);
	return curnode->parent;
}

int findSet(int key){
	if(mm[key]==mm.end())return -999;
	struct node* newnode =  findSetUtil(mm[key]);
	return newnode->key;
}

int main(){
	mm.clear();
	/*makeSet(0);makeSet(1);makeSet(2);
	makeSet(3);makeSet(4);makeSet(5);*/

	return 0;
}