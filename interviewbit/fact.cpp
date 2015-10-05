#include <bits/stdc++.h>
using namespace std;

unsigned long long arr[100];



int main(){
	arr[0]=0;
	arr[1]=1;
	for(int i=2;i<100;i++){
		arr[i] = (i*(arr[i-1]%1000003))%1000003;
	}

	for(auto it:arr)cout<<it<<",";cout<<endl;
	return 0;
}