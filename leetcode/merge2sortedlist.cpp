#include <bits/stdc++.h>
using namespace std;

//***if we don't create new ndoe then original lists will be damaged!!***

struct ListNode {
    int val;
    ListNode *next;
    ListNode(int x) : val(x), next(NULL) {}
};

class Solution {
public:
    ListNode* mergeTwoLists(ListNode* l1, ListNode* l2) {
        if(l1==NULL)return l2;
        if(l2==NULL)return l1;
        
        bool ltrue;
        ltrue = l1->val<=l2->val ? true:false;
        
        ListNode *head,*cur;
        
        if(l1->val <= l2->val) {
            cur = new ListNode(l1->val);
            l1 = l1->next;
        } else {
            cur = new ListNode(l2->val);
            l2 = l2->next;            
        }
        
        head = cur; 

        while(l1!=NULL && l2!=NULL){

            ltrue = l1->val <= l2->val ? true:false;
            
            if(ltrue){
                cur->next = new ListNode(l1->val);
                l1 = l1->next;    
            }else{
                cur->next = new ListNode(l2->val);
                l2 = l2->next;    
            }
            
            cur = cur->next;
        }    

        if(l1==NULL){         

            while(l2!=NULL){
                cur->next = new ListNode(l2->val);
                l2 = l2->next;
                cur = cur->next;
            }
        }
        
        if(l2==NULL){            
            while(l1!=NULL){
                cur->next = new ListNode(l1->val);
                l1 = l1->next;
                cur = cur->next;
            }
        }
        return head;
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
    h1 = &an1; an1.next = &an2; an2.next = &an3; an3.next = &an4; an4.next = &an5;

    obj.print(h1);

    ListNode *h2;
    ListNode bn1(1);
    ListNode bn3(7);
    ListNode bn2(3);
    ListNode bn4(8);
    h2 = &bn1; bn1.next = &bn2; bn2.next = &bn3; bn3.next = &bn4;

    obj.print(h2);

    ListNode * h = obj.mergeTwoLists(h1,h2);
    obj.print(h);

    cout<<"here"<<endl;
    obj.print(h1);
    obj.print(h2);
    return 0;
}