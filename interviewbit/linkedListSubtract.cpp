#include <bits/stdc++.h>
using namespace std;

struct ListNode {
	int val;
	ListNode *next;
	ListNode(int x) : val(x), next(NULL) {}
};

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


int getcount(ListNode* head){
	ListNode* crawl = head;
	int count = 0;

	while(crawl){
		count++;
		crawl = crawl->next;
	}

	return count;
}

ListNode* /*Solution::*/subtract(ListNode* A) {
	int count = getcount(A);
	if(count<=1)return A;
	else if(count==2){
		A->val = A->next->val - A->val;
		return A;
	}
	//now count>=3
	ListNode *crawl,*half,*temp,*crawl2;
	int i,tomove = count/2;

	for(crawl = A,i=1;i<tomove;i++){
		crawl = crawl->next;
	}

	if(count%2)
		half = crawl = crawl->next;		
	else
		half = crawl;	

	crawl->next = reverse(crawl->next);
	crawl = A;
	crawl2 = half->next;
	for(i=0;i<tomove;i++){
		crawl->val = crawl2->val - crawl->val;
		crawl = crawl->next;
		crawl2 = crawl2->next;
	}
	half->next = reverse(half->next);
	return A;
}


void print(ListNode* head){
    	ListNode* cur = head;
    	while(cur!=NULL){
    		cout<<cur->val<<" ";
    		cur = cur->next;
    	}
    	cout<<endl;
}

int main(){

	ListNode* head;
	ListNode n1(1);ListNode n2(2);ListNode n3(3);ListNode n4(4);ListNode n5(5);ListNode n6(6);
	n1.next = &n2;n2.next = &n3;n3.next = &n4;//n4.next = &n5;//n5.next = &n6;
	head = &n1;
	print(head);
	head = subtract(head);
	print(head);
}