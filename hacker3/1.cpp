#include <bits/stdc++.h>
using namespace std;

string say(string str){
    string ret = "";
    int i=0,len = str.length(),count;
    char cur;
    
    for(i=0;i<len;){
        cur = str[i];
        count = 1;
        i++;
        while(i<len && str[i]==cur){
            count++;
            i++;
        }
        
        ret += (count+'0');
        ret += cur;
    }
    
    return ret;
}

int main() {    
    int t;
    string n;
    cin>>t;
    while(t--){
        cin>>n;                        
        cout<<say(n)<<endl;
    }
    return 0;
}