#include <bits/stdc++.h>
using namespace std;

struct ListNode {
	int val;
	ListNode *next;
	ListNode(int x) : val(x), next(NULL) {}
};

class Solution {
public:
	ListNode* getSecondLast(ListNode *head){
		if(head==NULL)return head;
		ListNode *cur = head;
		ListNode *curforward = head->next;

		while(curforward->next!=NULL){
			curforward = curforward->next;
			cur = cur->next;
		}

		return cur;
	}

	int getlen(ListNode* head){
		ListNode* cur = head;
		int count = 0;
		while(cur!=NULL){
			count++;
			cur = cur->next;
		}
		return count;
	}

    void reorderList(ListNode* head) {    	
    	if(head==NULL || head->next==NULL)return;
    	ListNode *cur,*curnext,*toAppendPrev,*toAppend;
    	curnext = toAppendPrev = toAppend = NULL;
    	cur = head;curnext = cur->next;
    	int len = getlen(head);
    	
		if(len%2==0)len-=2;
		len/=2;    	

    	for(int i=0;i<len;i++){
    		toAppendPrev = getSecondLast(head);
    		toAppend = toAppendPrev->next;
    		

    		cur->next = toAppend;
    		toAppend->next = curnext;
    		toAppendPrev->next = NULL;

    		cur = curnext;
    		curnext = cur->next;

    		//cout<<"for i "<<i<<" ";print(head);
    	}

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
	n1.next = &n2;n2.next = &n3;n3.next = &n4;n4.next = &n5;n5.next = &n6;
	head = &n1;
	obj.print(head);
	obj.reorderList(head);
	obj.print(head);
}