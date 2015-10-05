#include <bits/stdc++.h>
using namespace std;

/* 
Not valid version:
1.001 1.2.003

valid ones:
1 & 1.0    --> 0
1.1 & 1.10 --> -1
1.0 & 1.1.0 --> -1
1.2 & 1.112 --> -1
*/

class Solution {
public:
    
    int getfirst(string s, int &pos){
        string trimmed="";
        int i;
        for(i=0;i<s.length();i++){
            if(s[i]=='.')break;
            else if(s[i]=='0' && !trimmed.length())continue;
            else trimmed += s[i];
        }

        pos = i+1;
        if(!trimmed.length())return 0;
        else{
            return stoi(trimmed);
        }
    }

    double getnext(string s,int &pos){
        int i,len = s.length();
        if(pos>=len)return 0;

        double d=0;                

        for(i=pos;i<len;i++){
            if(s[i]=='.')break;
            int cur = s[i]-'0';            
            d *= 10;
            d += cur;
        }
        pos = i+1;
        return d;
    }

    int compareVersion(string version1, string version2) {
        int pos1,pos2,debug=0;
        if(debug)cout<<version1<<" "<<version2<<endl;
        int i1 = getfirst(version1,pos1);
        int i2 = getfirst(version2,pos2);        
        if(debug)cout<<"i1 and i2 are "<<i1<<" "<<i2<<endl;

        if(i1>i2)return 1;
        else if(i1<i2)return -1;

        while(pos1<version1.length() || pos2<version2.length()){            
            double d1 = getnext(version1,pos1);
            double d2 = getnext(version2,pos2);
            if(debug)cout<<"d1 and d2 are "<<d1<<" "<<d2<<endl;            
            if(d1>d2)return 1;
            else if(d2>d1)return -1;
            else if(d1==d2)continue;            
        }    
        return 0;
    }
};

int main(){
    Solution obj;
    cout<<obj.compareVersion("1","1.1")<<endl;cout<<"---------------------------"<<endl;
    cout<<obj.compareVersion("1.1","1.10")<<endl;cout<<"---------------------------"<<endl;
    cout<<obj.compareVersion("01.1","1.010")<<endl; cout<<"---------------------------"<<endl;
    cout<<obj.compareVersion("001.201","1.19999")<<endl;    cout<<"---------------------------"<<endl;
    cout<<obj.compareVersion("0.1","0.0.1")<<endl;    cout<<"---------------------------"<<endl;
    cout<<obj.compareVersion("1.2","1.10")<<endl;    cout<<"---------------------------"<<endl;
    cout<<obj.compareVersion("1","1.0")<<endl;cout<<"---------------------------"<<endl;
    return 0;
}