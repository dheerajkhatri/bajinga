#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    int strStr(string haystack, string needle) {
        
        if(!haystack.length() && !needle.length())return 0;
        else if(!haystack.length()) return -1;
        else if(!needle.length()) return 0;
        
        
        int lh = haystack.length(),ln = needle.length(),i,j,startpos;
        int result = -1;
        for(i=0;i<=lh-ln;){
            if(needle[0]!=haystack[i]){
                i++;
                continue;
            }
            startpos = i;
            for(j=1;i<=lh-ln && j<ln;j++){
                if(needle[j]!=haystack[i+j])break;
            }
            
            if(j==ln)return startpos;
            i++;
        }
        return -1;        
    }
};



int main(){
    Solution obj;
    string s1 = "aaa";
    string s2 = "aaa";
    cout<<obj.strStr(s1,s2)<<endl;
}