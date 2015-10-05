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

	void print(ListNode* head){
    	ListNode* cur = head;
    	while(cur!=NULL){
    		cout<<cur->val<<" ";
    		cur = cur->next;
    	}
    	cout<<endl;
    }

    bool isPalindrome(ListNode* head) {
    	if(head==NULL )return false;
    	if(head->next==NULL)return true;

    	ListNode *slow,*fast;
    	slow = fast = head;    	

    	while(fast!=NULL && fast->next!=NULL && fast->next->next!=NULL){    		    	
    		slow = slow->next;
    		fast = fast->next->next;    		    		
    	}
    	
    	
    	slow->next = reverse(slow->next);    	

    	ListNode *ptr1 = head;
    	ListNode *ptr2 = slow->next;

    	while(ptr2!=NULL){
    		if(ptr1->val!=ptr2->val)return false;
    		ptr1 = ptr1->next;
    		ptr2 = ptr2->next;
    	}

    	slow->next = reverse(slow->next);
    	return true;
    }
};


int main(){
	Solution obj;
	ListNode* head;
	ListNode n1(1);ListNode n2(2);ListNode n3(3);ListNode n4(2);ListNode n5(1);ListNode n6(1);
	n1.next = &n2;n2.next = &n3;n3.next = &n4;n4.next = &n5;//n5.next = &n6;
	head = &n1;
	obj.print(head);	
	cout<<obj.isPalindrome(head)<<endl;
	obj.print(head);	
	return 0;
}