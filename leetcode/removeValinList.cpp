#include <bits/stdc++.h>
using namespace std;

struct ListNode{
	int val;
	ListNode* next;
	ListNode(int x) : val(x), next(NULL) {}	
};

class Solution {
public:
    ListNode* removeElements(ListNode* head, int val) {
    	if(head==NULL)return head;
    	if(head->next==NULL){
    		if(head->val==val)return NULL;
    		else return head;
    	}

    	ListNode *cur,*nextcur,*newhead;
    	cur = head;
    	nextcur = head->next;

    	while(nextcur!=NULL){
    		if(nextcur->val == val){
    			cur->next = nextcur->next;
    			nextcur = nextcur->next;
    		}else{
    			cur = nextcur;
    			nextcur = cur->next;
    		}
    	}

    	if(head->val==val){
    		if(head->next==NULL)return NULL;
    		else{
    			head = head->next;
    		}
    	}

    	return head;
    }


    void print(ListNode* head){
    	while(head!=NULL){
    		cout<<head->val<<" ";
    		head = head->next;
    	}
    	cout<<endl;
    }
};

int main(){
	Solution obj;
	ListNode *head;
	ListNode node1(1);ListNode node2(6);ListNode node3(5);ListNode node4(5);ListNode node5(1);ListNode node6(1);
	head = &node1;node1.next = &node2;node2.next = &node3;node3.next = &node4;node4.next = &node5;node5.next = &node6;	
	obj.print(head);	
	head = obj.removeElements(head,-1);
	obj.print(head);
	return 0;
}