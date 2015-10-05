#include <bits/stdc++.h>
using namespace std;

 struct ListNode {
     int val;
     ListNode *next;
     ListNode(int x) : val(x), next(NULL) {}
 };
 
 int findLen(ListNode* A){
     ListNode* head = A;
     int count = 0;
     while(head!=NULL){
         count++;
         head = head->next;
     }
     return count;
 }
 
ListNode* /*Solution::*/removeNthFromEnd(ListNode* A, int B) {
    int len = findLen(A);
    ListNode *head,*crawl;
    cout<<len<<endl;
    if(B>=len){
        head = A->next;
        return head;
    }
    
    int cur=1,front = len-B;
    crawl = head = A;
    
    cout<<"cur and from t are "<<cur<<" "<<front<<endl;
    while(cur<front){
        crawl = crawl->next;
        cur++;
        
    }
    crawl->next = crawl->next->next;
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
    ListNode* head;
    ListNode n1(1);ListNode n2(2);ListNode n3(3);ListNode n4(4);ListNode n5(5);
    n1.next = &n2;n2.next = &n3;n3.next = &n4;n4.next = &n5;
    head = &n1;
    print(head);
    head = removeNthFromEnd(head,1);
    print(head);
}