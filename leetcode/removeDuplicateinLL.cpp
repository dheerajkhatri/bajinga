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
        ListNode* finalhead = head;
        ListNode* cur = head;
        if(head==NULL)return head;

        while(cur->next!=NULL){        	
        	//cout<<"cur->next is "<<cur->next->val<<endl;
        	if(cur->val == (cur->next)->val)
        		cur->next = (cur->next)->next;

        	else cur = cur->next;        
        }

        return finalhead;
    }

    void print(ListNode *head){    	
    	if(head==NULL)return;
    	while(head!=NULL){
    		cout<<head->val<<" ";
    		head = head->next;    	
    	}    	
    }
};

int main(){
	ListNode node1(1);
	ListNode node2(2);
	ListNode node3(2);

	node1.next = &node2;
	node2.next = &node3;

	ListNode *head = &node1;

	Solution obj;
	
	obj.print(head);cout<<endl;
	head = obj.deleteDuplicates(head);
	obj.print(head);cout<<endl;
	return 0;
}
