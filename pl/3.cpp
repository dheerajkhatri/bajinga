#include <bits/stdc++.h>
using namespace std;

int main(){
	int i,n,k,temp;
	cin>>n>>k;
	vector<int>v(n);

	for(i=0;i<n;i++){
		cin>>temp;
		v[i] = temp;
	}

	int toys = 0;
	sort(v.begin(),v.end());
	for(i=0;i<n;i++){
		if(k<v[i])break;
		else{
			toys++;
			k -= v[i];
		}
	}
	cout<<toys<<endl;
}