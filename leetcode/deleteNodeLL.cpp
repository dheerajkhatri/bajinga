#include <bits/stdc++.h>
using namespace std;

struct ListNode {
    int val;
    ListNode *next;
    ListNode(int x) : val(x), next(NULL) {}
};

class Solution {
public:
    ListNode* removeElements(ListNode* head, int val) {
        if(head==NULL)return head;
        ListNode *cur,*prev;
        
        prev = head;
        cur = head->next;        
        
        while(cur!=NULL){
            while(cur!=NULL && cur->val==val ){
                prev->next = cur->next;
                cur = cur->next;
            }
            prev = cur;
            if(cur!=NULL)cur = cur->next;
        }
        
        if(head->val==val){
            head = head->next;
        }
        
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
    ListNode n1(1);ListNode n2(3);ListNode n3(3);ListNode n4(3);ListNode n5(5);ListNode n6(2);ListNode n7(4);
    n1.next = &n2;n2.next = &n3;n3.next = &n4;//n4.next = &n5;n5.next = &n6;n6.next = &n7;
    head = &n1;
    obj.print(head);    
    head = obj.removeElements(head,3);
    obj.print(head);    
    return 0;
}
