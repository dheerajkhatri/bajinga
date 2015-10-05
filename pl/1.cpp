#include <bits/stdc++.h>
using namespace std;

int main(){
	int t,n,i;
	cin>>t;
	while(t--){
		cin>>n;		
		vector<int>v(n);
		int a;

		for(i=0;i<n;i++){
			cin>>a;
			if(!i)v[i] = a;
			else v[i] = v[i-1]+a;
		}


		if(n==1)cout<<"YES"<<endl;
		else if(n==2)cout<<"NO"<<endl;
		else{
			for(i=1;i<n;i++){
				if(v[i-1]==v[n-1]-v[i]){
					cout<<"YES"<<endl;
					break;
				}
			}
			if(i==n)cout<<"NO"<<endl;	
		}
		

	}
	return 0;
}