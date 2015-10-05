#include <bits/stdc++.h>
using namespace std;

struct ListNode {
	int val;
	ListNode *next;
	ListNode(int x) : val(x), next(NULL) {}
};

class Solution {
public:
    ListNode* deleteDuplicates(ListNode* head) {    	
    	if(head==NULL)return head;
    	ListNode *cur=NULL,*moveptr=head,*newhead=NULL;
    	bool headfound = false;

    	while(moveptr!=NULL && moveptr->next!=NULL){
    		//cout<<"cur "<<moveptr->val<<" list:";
    		if(moveptr->val	== moveptr->next->val){
    			//cout<<"in duplicate found"<<endl;
    			int vals = moveptr->val;
    			while(moveptr!=NULL && moveptr->val == vals)moveptr = moveptr->next;
    		}else{
    			if(!headfound){    				
    				//cout<<"head found ";
    				cur = moveptr;
    				newhead = cur;    				
    				headfound = true;    				    				
    			}else{
    				//cout<<"non head found ";
    				cur->next = moveptr;
    				cur = cur->next;					
    			}

    			moveptr = moveptr->next;
    		}
    		//print(newhead);
    	}    
        	
        /*cout<<"outer list: ";
        print(newhead);*/

    	if(moveptr!=NULL){
    		if(!headfound)newhead = moveptr;
    		else cur->next = moveptr;
    	} else{
    		if(!headfound)newhead = NULL;
    		else cur->next = NULL;
    	}
    	return newhead;
    }

	void print(ListNode* head){
		ListNode* cur = head;
		while(cur!=NULL){
			cout<<cur->val<<" ";
			cur = cur->next;
		}
		cout<<endl;
	}
};

int main(){
	Solution obj;
	ListNode* head;
	ListNode n1(3);ListNode n2(3);ListNode n3(4);ListNode n4(5);ListNode n5(5);ListNode n6(6);
	n1.next = &n2;n2.next = &n3;n3.next = &n4;//n4.next = &n5;n5.next = &n6;
	head = &n1;
	obj.print(head);	
	head = obj.deleteDuplicates(head);
	obj.print(head);
}