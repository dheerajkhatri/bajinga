#include <bits/stdc++.h>
using namespace std;

struct ListNode {
    int val;
    ListNode *next;
    ListNode(int x) : val(x), next(NULL) {}
};

class Solution {
public:
    ListNode* swapPairs(ListNode* head) {
    	if(head==NULL)return NULL;
    	if(head->next==NULL)return head;
    	else {
    		ListNode* cur = head;
    		ListNode* ncur = head->next;
    		ListNode* temp = ncur->next;

    		ncur->next = cur;
    		cur->next = swapPairs(temp);
    		return ncur;
    	}
    }

    void print(ListNode* head){
	    while(head!=NULL){
	        cout<<head->val<<" ";
	        head = head->next;
	    }
	    cout<<endl;
	    return;
    }
};

int main(){
	Solution obj;

    ListNode *h1;
    ListNode an1(2); 
    ListNode an2(7);
    ListNode an3(9);
    ListNode an4(10);
    ListNode an5(11);
    ListNode an6(12);
    ListNode an7(13);
    h1 = &an1; an1.next = &an2; an2.next = &an3; an3.next = &an4; an4.next = &an5;an5.next = &an6;an6.next = &an7;

    obj.print(h1);
    ListNode* h = obj.swapPairs(h1);
    obj.print(h);
    return 0;
}


/**
 * Definition for singly-linked list.
 * struct ListNode {
 *     int val;
 *     ListNode *next;
 *     ListNode(int x) : val(x), next(NULL) {}
 * };
 */
ListNode* swaptwo(ListNode* first){
    if(first==NULL || first->next==NULL)return first;
    else{
        first->next->next = first;
        return first->next;
    }
}
 
/*ListNode* Solution::swapPairs(ListNode* A) {
    if(A==NULL || A->next==NULL)return A;
    ListNode *cur,*nnn,*head;
    ListNode *addedtemp = new ListNode(-11111);
    addedtemp->next = A;
    
    head = cur = addedtemp;
    do{
        if(cur->next!=NULL && cur->next->next!=NULL && cur->next->next->next!=NULL)nnn = cur->next->next;
        else nnn = NULL;
        
        ListNode* temp = swaptwo(cur->next);
        if(temp==NULL)return head->next;
        else{
            cur->next = temp;
            if(cur->next)cur=cur->next;
            if(cur->next)cur=cur->next;
        }
        
    }while(nnn!=NULL)
    
    return head->next;
    
}*/
