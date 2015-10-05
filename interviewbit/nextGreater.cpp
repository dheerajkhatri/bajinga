#include <bits/stdc++.h>
using namespace std;

struct data{
	int val;
	int pos;
};

vector<int> /*Solution::*/nextGreater(vector<int> &A) {
    stack<data>s;   
    int len = A.size();
    int topval;
    vector<int>v(len);
    for(int j=0;j<len;j++)v[j]=-1;
    struct data newdata;
    newdata.val = A[0];
    newdata.pos = 0;

    s.push(newdata);

    for(int i=1;i<len;i++){
    	while(!s.empty()){
    		topval = (s.top()).val;
    		if(topval < A[i]){
    			v[(s.top()).pos] = A[i];
    			s.pop();	
    		}else break;    	
    	}
    	struct data curdata;
    	curdata.val = A[i];
    	curdata.pos = i;
    	s.push(curdata);
    }    
    return v;
}

int main(){
	vector<int> v = {34, 35, 27, 42, 5, 28, 39, 20, 28};
	vector<int>res = nextGreater(v);
	for(auto it:res){
		cout<<it<<" ";
	}
	cout<<endl;
	return 0;
}
