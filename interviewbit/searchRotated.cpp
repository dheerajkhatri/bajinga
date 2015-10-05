//Only work when there are no dulplicates in the array

#include <bits/stdc++.h>
using namespace std;


int findMin(const vector<int> &A) {
    int start,end,mid,i;
    start = 0;
    end = A.size()-1;
    while(start<=end){
        mid = start+(end-start)/2;
        if(start==end || A[start]<=A[end])return start;
        else if(A[mid]<A[start])end = mid;
        else if(A[mid]>A[end])start = mid+1;
    }
}
 
 
int binarySearch(const vector<int>&arr,int val, int low, int high){
    int mid,i,start,end,result=-1;
    start = low;
    end = high;
    while(start<=end){
        mid = start+(end-start)/2;
        if(arr[mid]==val) return mid;
        else if(arr[mid]<val)start = mid+1;
        else end = mid-1;
    }
    return result;
}
 
int /*Solution::*/search(const vector<int> &A, int B) {
    int startpos = findMin(A);
    int result,len=A.size();
    
    if(B>=A[startpos] && B<=A[len-1]){
        result = binarySearch(A,B,startpos,len-1);    
    }else if(B>=A[0] && B<=A[startpos-1]){
        result = binarySearch(A,B,0,startpos-1);    
    }
    
    return result;
}

int main(){
	
    vector<int>v = {4 ,5, 6 ,7 ,0 ,1 ,2};
    cout<<"number found at "<<search(v,4)<<endl;
    cout<<"number found at "<<search(v,5)<<endl;
    cout<<"number found at "<<search(v,6)<<endl;
    cout<<"number found at "<<search(v,7)<<endl;
    cout<<"number found at "<<search(v,0)<<endl;
    cout<<"number found at "<<search(v,1)<<endl;
    cout<<"number found at "<<search(v,2)<<endl;
    /*vector<int>v = {1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1};
	cout<<"number found at "<<search(v,0)<<endl;*/
	return 0;
}
