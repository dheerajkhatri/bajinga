#include <bits/stdc++.h>
using namespace std;

class Queue {
public:
    stack<int>s1,s2;
    
    // Push element x to the back of queue.
    void push(int x) {
        s1.push(x);
    }

    // Removes the element from in front of queue.
    void pop(void) {
        int temp;
        if(s2.empty()){
            while(!s1.empty()){
                temp = s1.top();
                s2.push(temp);
                s1.pop();
            }
        }
        s2.pop();
    }

    // Get the front element.
    int peek(void) {
        int temp;
        if(s2.empty()){
            while(!s1.empty()){
                temp = s1.top();
                s2.push(temp);
                s1.pop();
            }
        }
        return s2.top();
    }

    // Return whether the queue is empty.
    bool empty(void) {
        if(s1.empty() && s2.empty())return true;
        return false;
    }

    void print(){
        cout<<"s1 :"; prints(s1);
        cout<<"s2 :"; prints(s2);
    }

    void prints(stack<int>s){
        stack<int>temp = s;
        while(!temp.empty()){
            cout<<temp.top()<<" ";
            temp.pop();
        }
        cout<<endl;
    }
};

int main(){
    Queue q;
    q.push(2);q.push(5);q.push(3);q.push(4);q.push(7);
    q.print();
    cout<<q.peek()<<endl;
    q.pop();
    cout<<q.peek()<<endl;
    q.pop();
    q.push(12);
    q.print();
    cout<<q.peek()<<endl;
    q.pop();q.pop();q.pop();
    cout<<q.peek()<<endl;
    q.pop();
    cout<<q.empty()<<endl;
    return 0;
}