#include <bits/stdc++.h>
using namespace std;

int main(){
	int n,temp;
	cin>>n;
	stack<pair<int,int>>ss;
	vector<int>v(n);
	vector<int>res(n,-2);
	for(int i=0;i<n;i++){
		cin>>temp;
		v[i]=temp;
	}
	ss.push({v[n-1],n-1});
	for(int i=n-2;i>=0;i--){
		int cur = v[i];
		while(!ss.empty() && (ss.top()).first<cur){
			res[(ss.top()).second] = i;
			ss.pop();
		}
		ss.push({cur,i});
	}
	for(int i=0;i<n;i++)cout<<res[i]+1<<" ";
	cout<<endl;
	return 0;
}