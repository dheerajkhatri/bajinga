#include <bits/stdc++.h>
using namespace std;

int /*Solution::*/searchInsert(vector<int> &A, int B) {
	int mid,i,start,end;
	start = 0;
	end = A.size()-1;
	while(start<=end){
		mid = start+(end-start)/2;
		if(A[mid]==B || (A[mid]>B && A[mid-1]<B)) return mid;		
		else if(A[mid]<B)start = mid+1;
		else end = mid-1;
	}
	return start;
}

int main(){
	vector<int> v = {1,3,5,6};
	cout<<searchInsert(v,1)<<endl;
	cout<<searchInsert(v,2)<<endl;
	cout<<searchInsert(v,3)<<endl;
	cout<<searchInsert(v,4)<<endl;
	cout<<searchInsert(v,5)<<endl;
	cout<<searchInsert(v,6)<<endl;
	cout<<searchInsert(v,7)<<endl;
	return 0;
}