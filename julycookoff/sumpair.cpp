#include <bits/stdc++.h>
using namespace std;

int main(){
	std::ios::sync_with_stdio(false);
	long long t,n,d,temp,result;
	cin>>t;

	while(t--){
		result = 0;
		cin>>n>>d;
		vector<int>v;
		for(int k=0;k<n;k++){
			cin>>temp;
			v.emplace_back(temp);
		}
		sort(v.begin(),v.end());

		for(int i=n-1;i>0;){
			if(v[i]-v[i-1]<d){
				result = result+v[i]+v[i-1];
				i -= 2;
			}else{
				i--;
			}
		}

		cout<<result<<endl;
	}
	return 0;
}