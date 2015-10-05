#include <bits/stdc++.h>
using namespace std;

int main(){
	int n;
	cin>>n;
	int *arr = new int[n];

	for(int i=0;i<n;i++){
		cin>>arr[i];
	}

	sort(arr,arr+n);
	int i;
	cout<<abs(arr[0]-arr[1])<<" "<<abs(arr[0]-arr[n-1])<<endl;

	for(i=1;i<n-1;i++){
		cout<<min(abs(arr[i]-arr[i-1]),abs(arr[i]-arr[i+1]))<<" "<<max(abs(arr[i]-arr[n-1]),abs(arr[i]-arr[0]))<<endl;
	}

	cout<<abs(arr[n-1]-arr[n-2])<<" "<<(abs(arr[n-1]-arr[0]))<<endl;
	int temp = 1000000000;
	int temp2 = -1000000000;
	cout<<temp<<" "<<temp2<<endl;
	return 0;
}