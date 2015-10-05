#include<bits/stdc++.h>
using namespace std;

struct ListNode {
    int val;
    ListNode *next;
    ListNode(int x) : val(x), next(NULL) {}
};

void modify(ListNode** head){
	ListNode* next;
	next = (*head)->next;
	*head = &(*next);
}

void add1(ListNode* head){
	while(head){
		head->val = (head->val)+1;
		head = head->next;
	}
}

void print(ListNode* head){
	while(head){
		cout<<head->val<<" ";
		head = head->next;
	}
	cout<<endl;
}

int main(){
	ListNode node1(1);ListNode node2(2);ListNode node3(3);ListNode node4(4);
	ListNode* head = &node1;node1.next=&node2;node2.next=&node3;node3.next=&node4;
	print(head);
	//modify(&head);
	add1(head);
	print(head);
	return 0;
}