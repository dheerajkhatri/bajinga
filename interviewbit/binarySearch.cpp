//binary seach first and last occurence for duplicated sorted array
#include <bits/stdc++.h>
using namespace std;

int searchInsert(vector<int> &A, int B) {
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


int main(int argc, char*argv[]){
	int i,len = 34;	
	int arr[] = {1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 4, 4, 5, 5, 5, 5, 5, 6, 6, 6, 7, 7, 8, 8, 8, 8, 9, 9, 10, 10, 10};


	int val = 1;

	cout<<search(arr,len,val,true)<<endl;
	cout<<search(arr,len,val,false)<<endl;
	return 0;
}
