#include <bits/stdc++.h>
using namespace std;

struct ListNode {
	int val;
	ListNode *next;
	ListNode(int x) : val(x), next(NULL) {}
};
//this is bubble sort when you get time implement insertion sort
class Solution {
public:
    ListNode* insertionSortList(ListNode* head) {
        if(head==NULL || head->next==NULL)return head;
        ListNode *ptr,*curMin,*newhead,*moveptr,*newcur,*temp,*curMinprev;
        bool isFirst;
        ptr = head;
        newhead = newcur = NULL;        

        while(ptr!=NULL){        	
        	isFirst = false;
        	//print(ptr);
        	curMinprev = curMin = ptr;        
        	moveptr = ptr;

        	while(moveptr!=NULL && moveptr->next!=NULL){
        		if(moveptr->next->val < curMin->val){
        			curMinprev = moveptr;
        			curMin = moveptr->next;        			
        		}
        		moveptr = moveptr->next;
        	}
        	
        	if(curMin == ptr && curMinprev == ptr)ptr = ptr->next;
        	else{
        		curMinprev->next = curMin->next;
        	}

        	//cout<<"curMin is "<<curMin->val<<endl;

        	if(newhead==NULL)newhead = newcur = curMin;
        	else {
        		newcur->next = curMin;
        		newcur = newcur->next;
        	}
        	newcur->next=NULL;        	
        }

        return newhead;
    }

    void print(ListNode* head){
    	ListNode* ptr = head;
    	while(ptr!=NULL){
    		cout<<ptr->val<<" ";
    		ptr = ptr->next;
    	}
    	cout<<endl;
    }
};

int main(){
	Solution obj;
	ListNode* head;
	ListNode n1(3);ListNode n2(2);ListNode n3(4);ListNode n4(11);ListNode n5(9);ListNode n6(7);
	n1.next = &n2;n2.next = &n3;n3.next = &n4;n4.next = &n5;n5.next = &n6;
	head = &n1;
	obj.print(head);	
	head = obj.insertionSortList(head);
	obj.print(head);	
	return 0;
}