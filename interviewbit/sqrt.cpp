#include <bits/stdc++.h>
using namespace std;

int ssqrt(int A){
	if(A<1)return 0;
	if(A==1)return 1;

	unsigned long long start,end,mid,i,val,lval;
	start = 1;
	end = 100;
	while(start<=end){
		mid = start+(end-start)/2;
		val = mid*mid;
		lval = (mid-1)*(mid-1);

		if(val == A)return mid;		
		else if(A>lval && A<val) return mid-1;
		else if(val > A)end = mid;
		else if(val < A)start = mid+1;
	}
}


int main(){
	for(int i=2;i<101;i++)cout<<i<<" --> "<<ssqrt(i)<<endl;
	return 0;
}