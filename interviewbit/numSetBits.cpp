#include <bits/stdc++.h>
using namespace std;

int /*Solution::*/numSetBits(unsigned int A) {
	int cur = 1,count=0;
	for(int i=1;i<32;i++){
		if(A&cur)count++;
		cout<<cur<<endl;
		cur = cur<<1;
	}
	return count;
}

int main(){
	int a = 10;
	cout<<numSetBits(a)<<endl;

	return 0;
}