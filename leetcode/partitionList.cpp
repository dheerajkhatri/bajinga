#include <bits/stdc++.h>
using namespace std;

struct ListNode {
	int val;
	ListNode *next;
	ListNode(int x) : val(x), next(NULL) {}
};

class Solution {
public:
    ListNode* partition(ListNode* head, int x) {
        if(head==NULL || head->next==NULL)return head;
        ListNode *smaller,*bigger,*cur,*head1,*head2,*temp1,*ncur,*temp2;
        cur = smaller =bigger = head;
        int debug = 0;

        while(smaller!=NULL && smaller->val >= x){
        	smaller = smaller->next;
        }

        if(smaller==NULL)return head;

		while(bigger!=NULL && bigger->val < x){
        	bigger = bigger->next;
        }        

        if(bigger==NULL)return head;

        temp1 = head1 = smaller;
        temp2 = head2 = bigger;


        if(debug)cout<<"smaller bigger "<<smaller->val<<" "<<bigger->val<<endl;

        while(cur!=NULL){
        	if(debug)cout<<"now cur is "<<cur->val<<endl;
        	ncur = cur->next;

        	if(cur->val < x && smaller!=cur){
        		if(debug)cout<<"smaller :"<<cur->val <<" appended to " <<smaller->val<<endl;        	
    			smaller->next = cur;        		
    			smaller = smaller->next;        		
    			temp1 = cur;        		
        	}else if(cur->val >=x && bigger!=cur){
        		if(debug)cout<<"bigger :"<<cur->val <<" appended to " <<bigger->val<<endl;
        		bigger->next = cur;
        		bigger = bigger->next;
        		temp2 = cur;
        	}
        	cur = ncur;
        }
        
        temp1->next = head2;
        temp2->next = NULL;
        return head1;

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
	ListNode n1(5);ListNode n2(1);ListNode n3(4);ListNode n4(3);ListNode n5(3);ListNode n6(2);//ListNode n7(4);
	n1.next = &n2;n2.next = &n3;//n3.next = &n4;n4.next = &n5;n5.next = &n6;//n6.next = &n7;
	head = &n1;
	obj.print(head);	
	head = obj.partition(head,5);
	obj.print(head);	
	return 0;
}