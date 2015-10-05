#include <cmath>
#include <cstdio>
#include <vector>
#include <iostream>
#include <algorithm>
using namespace std;

void process(vector<bool>&v, int n1, int n2){    
    
    int cur = 0;
    
    while(cur<=50){
        v[cur] = true;
        if(cur+n1<=50)v[cur+n1] = true;
        if(cur+n2<=50)v[cur+n2] = true;
        if(cur+n1+n2<=50)v[cur+n1+n2] = true;
        
        cur++;
        while(!v[cur] && cur<=50)cur++;
    }
}


int main() {
    /* Enter your code here. Read input from STDIN. Print output to STDOUT */   
    int t,n1,n2,n3;
    cin>>t;
    
    string s1 = "Bob you will definitely get a job";
    string s2 = "Bob you need to practice";
    
    while(t--){
        cin>>n1>>n2>>n3;
        vector<bool>v(51,false);
        process(v,n1,n2);
        if(v[n3])cout<<s1<<endl;
        else cout<<s2<<endl;
    }
    
    return 0;
}
