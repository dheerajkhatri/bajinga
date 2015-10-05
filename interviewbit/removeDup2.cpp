#include <bits/stdc++.h>
using namespace std;

void print(vector<int>A, int up){
    for(int i=0;i<=up;i++)cout<<A[i]<<" ";cout<<endl;
}


int /*Solution::*/removeDuplicates(vector<int> &A) {
    int i,prev,cur=0,len=A.size(),count=0,curcount;
    if(len==0)return cur;
        
    
    for(i=0;i<len;){
        prev = A[i++];
        curcount = 1;

        while(i<len && A[i]==prev) {
            i++;
            curcount++;
        }
            
        if(curcount==1)A[cur++] = prev;
        else {
            A[cur++] = prev;
            A[cur++] = prev;
        }                        
    }        
    return cur;
}

int main(){
    vector<int>v={0,1,1,2,3,3};

    cout<<removeDuplicates(v)<<endl;
    return 0;
}