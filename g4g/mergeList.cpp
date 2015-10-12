/*liked list merge sort*/
#include <bits/stdc++.h>
using namespace std;

struct node{
    int data;
    struct node* next;
};

void splitList(struct node* head,struct node **front,struct node** back){
	struct node *fast,*slow;
	if(head==NULL || head->next==NULL){
		*front = head;
		*back = NULL;
		return;
	}else{
		slow = head;
		fast = head->next;
		while(fast!=NULL){
			fast = fast->next;
			if(fast!=NULL){
				slow = slow->next;
				fast = fast->next;
			}
		}
		*front = head;
		*back = slow->next;
		slow->next = NULL;
	}	
}

struct node* merge(struct node* a, struct node* b){
	struct node* result = NULL;
	if(a==NULL)return b;
	else if(b==NULL)return a;
	
	if(a->data <= b->data ){
		result = a;
		result->next = merge(a->next,b);
	}else{
		result = b;
		result->next = merge(a,b->next);
	}
	return result;
}

struct node* mergeSort(struct node** head){
	struct node *a,*b,*result,*cr;
	cr = *head;
	if(cr==NULL || cr->next==NULL)return cr;

	splitList(cr,&a,&b);	
	return merge(a,b);
}


void push(struct node** head_ref, int data){  
	struct node* newnode = new node;   
	newnode->data  = data;
	newnode->next = (*head_ref);    
	(*head_ref) = newnode;
} 

void pritList(struct node* head){
	while(head!=NULL){
		cout<<head->data<<" ";
		head = head->next;
	}
	cout<<endl;
}

int main(){
	struct node* res = NULL;
	struct node* a = NULL;	
	/*Created lists shall be a: 2->3->20->5->10->15 */
	push(&a, 15);push(&a, 10);push(&a, 5); push(&a, 20);push(&a, 3);push(&a, 2); 	
	pritList(a);
	res = mergeSort(&a);
	pritList(res);
	return 0;	
}