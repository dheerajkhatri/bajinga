#include <bits/stdc++.h>
#include <typeinfo>
using namespace std;

 
struct ListNode {
 int val;
 ListNode *next;
 ListNode(int x) : val(x), next(NULL) {}
};
 
class Solution {
public:
    bool hasCycle(ListNode *head) {
    	ListNode *slow,*fast;
    	if(head==NULL)return false;
    	slow = fast = head;
    	do{
    		slow = slow->next;
    		if(slow==NULL)return false;

    		if(fast->next!=NULL)fast = fast->next->next;
    		else return false;

    		if(fast==NULL)return false;
    	}while(slow!=fast);
    	return true;
    }
};


int main(){
	Solution obj;
	ListNode node1(2);		
	ListNode node2(4);
	ListNode node3(6);

	node1.next = &node2;
	node2.next = &node3;
	node3.next = &node1;

	//cout<<&node1<<" "<<&node2<<" "<<&node3<<endl;

	ListNode *head = &node1;	
	cout<<obj.hasCycle(head)<<endl;

	return 0;
}