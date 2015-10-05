#include <bits/stdc++.h>
using namespace std;

vector<int>v = {1,1};
void print(vector<int>&);

void /*Solution::*/nextPermutation(vector<int> &A) {
	if(A.size()<=1)return ;
    int len=A.size(),i,j,firstindex=-1,secondindex=-1,temp;
    
    for(i=0;i<len-1;i++){
        if(A[i]<A[i+1]){        	
            firstindex = i;
        }  
    }

    if(firstindex==-1){  // this is the last permutation sort all the element to get first permutation
        for(i=0;i<len/2;i++){
            temp = A[i];
            A[i] = A[len-1-i];
            A[len-1-i] = temp;
        }
        return;
    }else{
        for(j=firstindex+1;j<len;j++){
            if(A[j]>A[firstindex]){
                secondindex = j;                
            }
        }
        //cout<<"firstindex "<<firstindex<<" secondindex "<<secondindex<<endl;
        temp = A[firstindex];
        A[firstindex] = A[secondindex];
        A[secondindex] = temp;        
                
        //print(A);
        int start = firstindex+1;
        int end = len-1;
        while(start<end){
            temp = A[start];
            A[start] = A[end];
            A[end] = temp;
            start++;
            end--;
        }
        return;
        
    }
}

void print(vector<int>&v){
	for(auto it:v)cout<<it<<" ";
	cout<<endl;
}

int main(){
	print(v);
	cout<<"------------------------------------------------------------------------"<<endl;
	nextPermutation(v);
	print(v);
	return 0;
}