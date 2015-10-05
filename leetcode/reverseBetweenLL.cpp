#include <bits/stdc++.h>
using namespace std;

struct ListNode {
	int val;
	ListNode *next;
	ListNode(int x) : val(x), next(NULL) {}
};

class Solution {
public:

	//reverse from head to given count and dont consider remaining part if attached
    ListNode* reverseCount(ListNode *head, int count){		
		ListNode* cur = head;
		if(head->next==NULL)return head;
		int mycount = 1;
		ListNode *curnext = cur->next,*temp;

		cur->next = NULL;

		do{
			temp = curnext->next;

			curnext->next = cur;

			cur = curnext;
			curnext = temp;
			mycount++;
		}while(curnext!=NULL && mycount<count);

		head = cur;		
		return head;
	}


    ListNode* reverseBetween(ListNode* head, int m, int n) {
    	if(head==NULL || head->next == NULL || m==n)return head;    	

    	ListNode *cur,*prevhead,*nextappend,*toReverse,*temp;
    	int pos = 1,count = n-m+1;
    	bool isFirst = false;

    	if(m==1){
    		isFirst = true;
    		toReverse = cur;
    		temp = cur;
    	}else{
    		cur = head;
    		while(pos<m-1){
    			cur = cur->next;
    			pos++;
    		}    		
    		prevhead =  cur;
    		toReverse = prevhead->next;    		
    		temp = cur->next;
    	}    	    

    	//get the remaining list after nth pos
    	for(int j=0;j<count;j++){
    		temp = temp->next;
    	}

    	//reverse list from m to n
    	cur = reverseCount(toReverse,count);

    	//adjust starting part's pointers
        if(!isFirst)prevhead->next = cur;
        else head = cur;

        //get the end point of m-n list
        for(int k=0;k<count-1;k++){
        	cur = cur->next;
        }

        //append the last list to end point of m-n list
        cur->next = temp;

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
};


int main(){
	Solution obj;
	ListNode* head;
	ListNode n1(3);ListNode n2(5);ListNode n3(3);ListNode n4(4);ListNode n5(5);//ListNode n6(2);//ListNode n7(4);
	n1.next = &n2;n2.next = &n3;n3.next = &n4;n4.next = &n5;//n5.next = &n6;//n6.next = &n7;
	head = &n1;
	obj.print(head);	
	head = obj.reverseBetween(head,1,5);
	obj.print(head);	
	return 0;
}