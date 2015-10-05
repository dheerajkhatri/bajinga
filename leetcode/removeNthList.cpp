#include <bits/stdc++.h>
using namespace std;

struct ListNode{
	int val;
	ListNode* next;
	ListNode(int x) : val(x), next(NULL) {}	
};


class Solution {
public:
	int getcount(ListNode* head){
		int count = 0;
		while(head!=NULL){
			count++;
			head = head->next;
		}
		return count;
	}

    ListNode* removeNthFromEnd(ListNode* head, int n) {
        int count = getcount(head);
        int cur = count-n-1;
        int curcount = 0;
        ListNode* curnode = head;
        if(n>count || n<1)return head;
        
        if(count==1){
        	if(n==1) return NULL;
        }else{
        	if(n==count)return (head->next);
        	else{
        		while(curcount<cur){
        			curnode = curnode->next;
        			curcount++;
        		}
        		curnode->next = curnode->next->next;
        		return head;
        	}
        }        
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
	cout<<obj.getcount(head)<<endl;
	head = obj.removeNthFromEnd(head,7);
	obj.print(head);
	return 0;
}