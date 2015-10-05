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
    	//cout<<head<<endl;
        set<ListNode *>myset;
        if(head==NULL)return false;
        myset.insert(head);
        head = head->next;

        while(head!=NULL){
        	//cout<<head<<endl;        	
        	if(myset.insert(head).second == false) return true;        	//if we cannot insert in set then check by
        	head = head->next;									//second (false means value already present in the set)
        }
        return false;
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

	cout<<&node1<<" "<<&node2<<" "<<&node3<<endl;

	ListNode *head = &node1;	
	cout<<obj.hasCycle(head)<<endl;

	return 0;
}