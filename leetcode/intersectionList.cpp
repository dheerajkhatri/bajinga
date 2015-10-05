#include <bits/stdc++.h>
using namespace std;

struct ListNode {
	int val;
	ListNode *next;
	ListNode(int x) : val(x), next(NULL) {}
};

class Solution {
public:
    int getlength(ListNode* head){
    	ListNode* cur = head;
    	int count = 0;
    	while(cur!=NULL){
    		count++;
    		cur = cur->next;
    	}
    	return count;
    }

    void print(ListNode* head){
    	ListNode* cur = head;
    	while(cur!=NULL){
    		cout<<cur->val<<" ";
    		cur = cur->next;
    	}
    	cout<<endl;
    }

    ListNode *getIntersectionNode(ListNode *headA, ListNode *headB) {
        int len1 = getlength(headA);
        int len2 = getlength(headB);
        int diff = len1>=len2 ? len1-len2:len2-len1;
        ListNode* extra = len1>=len2 ? headA:headB;

        for(int i=0;i<diff && extra!=NULL;i++){
        	extra = extra->next;
        }

        ListNode* other = len1>=len2 ? headB:headA;
        
        while(extra!=NULL || other!=NULL){
        	if(extra==other)return extra;
        	else{
        		extra = extra->next;
        		other = other->next;
        	}
        }

        return NULL;
    }
};

int main(){
	ListNode *head1,*head2;
	ListNode c1 = ListNode(10);ListNode c2 = ListNode(11);//ListNode a3 = ListNode(3);//ListNode a1 = ListNode(1);
	c1.next = &c2;
	ListNode a1 = ListNode(1);ListNode a2 = ListNode(2);ListNode a3 = ListNode(3);//ListNode a1 = ListNode(1);
	a1.next = &a2; a2.next = &a3;//a3.next = &c1;
	ListNode b1 = ListNode(-1);ListNode b2 = ListNode(-2);//ListNode a3 = ListNode(3);//ListNode a1 = ListNode(1);
	b1.next = &b2;b2.next = &c1; 

	head1 = &a1;head2 = &b1;
	Solution obj;
	obj.print(head1);
	obj.print(head2);
	ListNode* tempnode = obj.getIntersectionNode(head1,head2);
	if(tempnode!=NULL)cout<<tempnode->val<<endl;
	else cout<<"0"<<endl;
	obj.print(head1);
	obj.print(head2);
	return 0;
}