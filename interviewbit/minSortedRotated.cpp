#include <bits/stdc++.h>
using namespace std;

int /*Solution::*/findMin(const vector<int> &A) {
    int start,end,mid,i;
    start = 0;
    end = A.size()-1;
    while(start<=end){
    	mid = start+(end-start)/2;
        if(start==end || A[start]<=A[end])return A[start];
        else if(A[mid]<A[start])end = mid;
        else if(A[mid]>A[end])start = mid+1;
    }
}


int main(){
	vector<int> v;
	v = {5, 6, 1, 2, 3, 4}; cout<<findMin(v)<<endl;
	v = {1, 2, 3, 4}; cout<<findMin(v)<<endl;
	v = {1}; cout<<findMin(v)<<endl;
	v = {1,2}; cout<<findMin(v)<<endl;
	v = {2,1}; cout<<findMin(v)<<endl;
	v = {5, 6,7, 1, 2, 3, 4}; cout<<findMin(v)<<endl;
	v = {1, 2, 3, 4, 5, 6, 7}; cout<<findMin(v)<<endl;
	v = {5, 6,7, 1, 2, 3, 42, 3, 4, 5, 6, 7, 8, 1}; cout<<findMin(v)<<endl;
	v = {3,4,5,1,2}; cout<<findMin(v)<<endl;

	return 0;
}