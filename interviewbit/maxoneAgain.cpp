#include <bits/stdc++.h>
using namespace std;

vector<int> /*Solution::*/maxone(vector<int> &A, int B) {
    int left,right,maxsize,nzeros=0,len = A.size(),ind=-1;
    left = right = 0;
    maxsize = -1;
    
    while(right<len){

        if(nzeros<=B){            
            if(A[right]==0) nzeros++;
            right++;                            
        }
        
        if(nzeros>B){
            if(A[left]==0) nzeros--; 
            left++;
        }
        
        cout<<left<<" -> "<<right<<endl;
        if(right-left > maxsize){
            ind = left;        
            maxsize = right-left;
        }
    }
    
    vector<int>v;
    //cout<<left<<endl;
    for(int i=0;i<maxsize;i++)v.push_back(ind+i);
    
    return v;
}


void print(vector<int>v){
    for(auto it:v)cout<<it<<" ";cout<<endl;
}

int main(){
    vector<int>v={1 ,1 ,0 ,1 ,1 ,0 ,0 ,1 ,1 ,1};
    vector<int>ans =  maxone(v,1);
    print(ans);
    return 0;
}    