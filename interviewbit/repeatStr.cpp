#include <bits/stdc++.h>
using namespace std;

string s = "A3uoQpIGAmirlATMYWqeFh8KE9cHZ";
//string s = "dabdccdabed";

int /*Solution::*/lengthOfLongestSubstring(string A) {
    int arr[256];
    memset(arr,0,sizeof(arr));
    int start,end,len=A.length(),curlen,maxlen;
    start = end  = maxlen = 0;
    curlen = 0;    

    while(end<len){    	        
        
        while(end<len && !arr[A[end]]){
            arr[A[end]] = true;
            end++;
            curlen++;
        }

        //cout<<"start is "<<start<<" end reached to "<<end<<" and curlen is "<<curlen<<endl;

        if(maxlen<curlen){
            maxlen = curlen;
            //cout<<"maxlen changed for "<<start<<" "<<end<<" curlen is "<<curlen<<endl;
        }
                
        if(end<len){
            if(A[start]==A[end])start++;
            else{                
                while(A[start]!=A[end]){
                    arr[A[start]]=false;
                    start++;
                    curlen--;                
                }
                start++;
            }            
        }
        end++;                    
    }
    
    return maxlen;
    
}

int main(){
	cout<<lengthOfLongestSubstring(s)<<endl;
	return 0;
}