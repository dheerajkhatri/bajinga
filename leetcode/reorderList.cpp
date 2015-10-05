#include <bits/stdc++.h>
using namespace std;

struct ListNode {
	int val;
	ListNode *next;
	ListNode(int x) : val(x), next(NULL) {}
};

class Solution {
public:

	ListNode* reverse(ListNode *head){		
		ListNode* cur = head;
		if(head->next==NULL)return head;
		ListNode *curnext = cur->next,*temp;

		cur->next = NULL;

		do{
			temp = curnext->next;

			curnext->next = cur;

			cur = curnext;
			curnext = temp;
		}while(curnext!=NULL);

		head = cur;		
		return head;
	}

    void reorderList(ListNode* head) {    	
    	if(head==NULL || head->next==NULL)return;
    	ListNode *slow,*fast;
    	slow = fast = head;    	

    	while(fast!=NULL && fast->next!=NULL && fast->next->next!=NULL){    		    	
    		slow = slow->next;
    		fast = fast->next->next;    		    		
    	}

    	
    	ListNode *middleStart = slow->next;    	
    	slow->next = NULL;
    	ListNode *secptr = reverse(middleStart);		

    	ListNode* firstptr = head;    	
    	ListNode *fnext,*snext;

    	//print(head);print(secptr);

    	while(firstptr!=NULL && secptr!=NULL){
    		fnext = firstptr->next;
    		snext = secptr->next;

    		firstptr->next = secptr;
    		secptr->next = fnext;

    		firstptr = fnext;
    		secptr = snext;
    	}

    	return;

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
	ListNode n1(1);ListNode n2(2);ListNode n3(3);ListNode n4(4);ListNode n5(5);ListNode n6(6);
	//n1.next = &n2;//n2.next = &n3;n3.next = &n4;//n4.next = &n5;n5.next = &n6;
	head = &n1;
	obj.print(head);
	obj.reorderList(head);
	obj.print(head);
}