#include <bits/stdc++.h>
using namespace std;


class MinStack {
public:
	stack<int>mystack,minstack;

    void push(int x) {
    	mystack.push(x);
    	if(minstack.empty())minstack.push(x);
    	else{
    		int topval = minstack.top();
    		if(topval>x)minstack.push(x);
    		else minstack.push(topval);
    	}
    }

    void pop() {
        if(!minstack.empty())minstack.pop();
        if(!mystack.empty())mystack.pop();
    }

    int top() {
        if(!minstack.empty())return mystack.top();
        else return 0;
    }

    int getMin() {
        if(!minstack.empty())return(minstack.top());
        else return 0;
    }
};

int main(){


	return 0;
}