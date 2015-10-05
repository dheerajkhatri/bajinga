#include <bits/stdc++.h>
using namespace std;

int /*Solution::*/evalRPN(vector<string> &A) {
    stack<int>s;
    int num1,num2,res,cur;
    for(int i=0;i<A.size();i++){
        if(A[i].length()==1 && (A[i]=="+" || A[i]=="-" || A[i]=="*" || A[i]=="/")){
            num2 = s.top();
            s.pop();
            num1 = s.top();
            s.pop();
            //cout<<num1<<" "<<num2<<endl;
            if(A[i]=="+")res = num1+num2;
            else if(A[i]=="-")res = num1-num2;
            else if(A[i]=="*")res = num1*num2;
            else if(A[i]=="/")res = num1/num2;            
            s.push(res);
        }else {
            cur = stoi(A[i]);
            s.push(cur);
        }        
    }
    return s.top();
}

int main(){
    vector<string>s;
    s.push_back("2");s.push_back("2");s.push_back("/");
    cout<<evalRPN(s)<<endl;
    return 0;
}