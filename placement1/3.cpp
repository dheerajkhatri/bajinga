#include <cmath>
#include <cstdio>
#include <vector>
#include <iostream>
#include <algorithm>
#include <set>
using namespace std;


int main() {
    /* Enter your code here. Read input from STDIN. Print output to STDOUT */   
    string s1 = "Bob I am good as you are";
    string s2 = "Bob I have defeated you";
    string s;
    int i,n,k,flag=1,bf,temp;
    set<int>ss;
    cin>>n>>k;
    
    for(i=0;i<n;i++){
        cin>>temp;
        ss.insert(temp);
    }
    
    for(i=0;i<k;i++){
        cin>>temp;
        if(ss.find(temp)==ss.end()) flag = 0;        
    }
    
    cin>>s;
    if(s=="Yes")bf = 1;
    else bf = 0;    
    
    //cout<<bf<<flag<<endl;
    
    if(bf==flag)cout<<s1<<endl;
    else cout<<s2<<endl;
    
    return 0;
}
