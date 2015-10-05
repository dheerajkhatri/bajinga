#include <bits/stdc++.h>
using namespace std;

 struct ListNode {
     int val;
     ListNode *next;
     ListNode(int x) : val(x), next(NULL) {}
 };

ListNode* /*Solution::*/mergeTwoLists(ListNode* A, ListNode* B) {
    if(A==NULL)return B;
    if(B==NULL)return A;
    ListNode *head,*cur,*ptr1,*ptr2;
    ListNode n1(0);
    head = cur = &n1;
    
    ptr1 = A;
    ptr2 = B;
    while(ptr1!=NULL && ptr2!=NULL){
        if(ptr1->val<=ptr2->val){
            cur->next = ptr1;
            ptr1 = ptr1->next;            
        }else{
            cur->next = ptr2;
            ptr2 = ptr2->next;
        }
        cur = cur->next;
    }
    
    if(ptr1==NULL)cur->next = ptr2;
    else if(ptr2==NULL)cur->next = ptr1;
    
    head = head->next;
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

int main(){
    ListNode *head1,*head2;
    ListNode n1(1);ListNode n2(2);ListNode n3(3);ListNode n4(4);ListNode n5(5);
    n1.next = &n2;n2.next = &n3;/*n3.next = &n4;*/n4.next = &n5;
    head1 = &n1;
    head2 = &n4;
    print(head1);
    print(head2);
    ListNode* head = mergeTwoLists(head1,head2);
    print(head);
}
