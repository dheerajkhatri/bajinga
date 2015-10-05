#include <bits/stdc++.h>
using namespace std;

struct RandomListNode {
	int label;
	RandomListNode *next, *random;
	RandomListNode(int x) : label(x), next(NULL), random(NULL) {}	
};

class Solution {
public:
	int getcount(RandomListNode *head){
		RandomListNode* ptr = head;
		int count = 0;
		while(ptr!=NULL){
			count++;
			ptr = ptr->next;
		}
		return count;
	}

	int getPosofRandom(RandomListNode* ptr,vector<RandomListNode*>vec){
		int pos = find(vec.begin(),vec.end(),ptr) - vec.begin();
		return pos;
	}

    RandomListNode *copyRandomList(RandomListNode *head) {

    	int len = getcount(head);    	
    	RandomListNode *deepList = NULL;
    	if(head==NULL)return deepList;
    	vector<RandomListNode *> oldAddress,newAddress;
    	RandomListNode *ptr = head;

		ptr = head;
		RandomListNode *newnode = new RandomListNode(ptr->label);    		
		deepList = newnode;
		RandomListNode *prev = newnode;
		oldAddress.push_back(ptr);
		newAddress.push_back(newnode);
		ptr = ptr->next;

    	for(int i=1;i<len && ptr!=NULL; i++){
    		oldAddress.push_back(ptr);
    		RandomListNode *newnode = new RandomListNode(ptr->label);    		
    		newAddress.push_back(newnode);
			prev->next = newnode;    		

			prev = newnode;
    		ptr = ptr->next;
    	}


    	RandomListNode *newptr = deepList;
    	RandomListNode *oldptr = head;

		//cout<<"odladdress\n";for(auto a1:oldAddress)cout<<a1<<endl;
    	//cout<<"newaddress\n";for(auto a2:newAddress)cout<<a2<<endl;

    	for(int j=0;j<len && newptr!=NULL && oldptr!=NULL ;j++){
    		int pos = getPosofRandom(oldptr->random,oldAddress);
    		if(pos==-1 || pos>=len) newptr->random = NULL;
    		else{
    			newptr->random = newAddress[pos];
    		}
    		newptr = newptr->next;
    		oldptr = oldptr->next;
    	}

    	return deepList;
    }

    void print(RandomListNode* head){
    	RandomListNode* cur = head;
    	while(cur!=NULL){
    		cout<<cur->label<<" ";
			cur = cur->next;    		
    	}
    	cout<<endl;
    }
};

void printadd(RandomListNode *head){
	RandomListNode * cur = head;
	while(cur!=NULL){
		cout<<cur<<endl;
		cur = cur->next;
	}
	cout<<"-----------"<<endl;
}

int main(){
	Solution obj;
	RandomListNode n1(1);RandomListNode n2(2);RandomListNode n3(3);
	n1.next = &n2;n2.next=&n3;
	n1.random = &n3;n3.random = &n2;n2.random = &n1;
	RandomListNode * head = &n1;
	obj.print(head);
	//printadd(head);
	RandomListNode * deepList = obj.copyRandomList(head);
	//printadd(deepList);
	obj.print(deepList);
	return 0;
}