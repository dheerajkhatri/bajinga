#include <bits/stdc++.h>
using namespace std;

class Stack {
public:
    // Push element x onto stack.
    queue<int>q1,q2;    

    void push(int x) {
    	q1.push(x);
    }

    // Removes the element on top of the stack.
    void pop() {
        int temp;
        while(q1.size()!=1){
        	temp = q1.front();
        	q2.push(temp);
        	q1.pop();
        } 
        q1.pop();
        swap(q1,q2);
    }

    // Get the top element.
    int top() {
        int temp;
        while(!q1.empty()){
        	temp = q1.front();
        	q2.push(temp);
        	q1.pop();
        } 
        swap(q1,q2);
        return temp;
    }

    // Return whether the stack is empty.
    bool empty() {
        if(q1.empty() && q2.empty())return true;
        return false;
    }
    void print(){
        cout<<"q1 :"; prints(q1);
        cout<<"q2 :"; prints(q2);
    }

    void prints(queue<int>q){
        queue<int>temp = q;
        while(!temp.empty()){
            cout<<temp.front()<<" ";
            temp.pop();
        }
        cout<<endl;
    }
};

int main(){
    Stack s;
    s.push(2);s.push(5);s.push(3);s.push(4);s.push(7);
    s.print();
    cout<<s.top()<<endl;
    s.pop();
    cout<<s.top()<<endl;
    s.pop();
    s.push(12);
    s.print();
    cout<<s.top()<<endl;
    s.pop();s.pop();s.pop();
    cout<<s.top()<<endl;
    s.pop();
    cout<<s.empty()<<endl;
    return 0;
}