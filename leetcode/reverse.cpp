#include <bits/stdc++.h>
using namespace std;

 
struct ListNode {
 int val;
 ListNode *next;
 ListNode(int x) : val(x), next(NULL) {}
};
 
class Solution {
public:
    bool hasCycle(ListNode *head) {
        
    }
};


int main(){
	Solution obj;
	ListNode a(5);	
	ListNode b(6);
	ListNode c(7);
	a->next = b;
	b->next = c;
	c->next = b;
	cout<<a<<endl;
	return 0;
}