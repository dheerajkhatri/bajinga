#include <bits/stdc++.h>
using namespace std;

bool search(vector<int> &arr, int low,int val){	
	int mid,i,start,end,size=arr.size();
	bool result = false;
	start = low;
	end = size-1;
	while(start<=end){
		mid = start+(end-start)/2;
		if(arr[mid]==val) return true;
		else if(arr[mid]<val)start = mid+1;
		else end = mid-1;
	}
	return result;
}


int /*Solution::*/diffPossible(vector<int> &A, int B) {
    int i,j,len=A.size(),tofind,prev;
    
    if(B==0){
        prev = A[0];
        for(i=1;i<len;i++){
            if(A[i]==prev)return true;
            else prev = A[i];
        }
        return false;
    }
    
    for(i=0;i<len-1;i++){        
        tofind = B+A[i];     
        //cout<<A[i]<<" "<<tofind<<endl;        
        if(search(A,i+1,tofind))return true;
    }
    return false;
}


int main(){
	vector<int>v = {2, 2, 27, 27, 32, 36, 43, 48, 64, 70, 79, 85, 89, 89, 90, 92, 98 };	
	//cout<<search(v,15,98)<<endl;
	cout<<diffPossible(v,8)<<endl;
	return 0;
}