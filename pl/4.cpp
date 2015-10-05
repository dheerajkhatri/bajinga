#include <bits/stdc++.h>
using namespace std;

int main(){
	int i,n,k,temp;
	cin>>n>>k;
	unordered_set<int>ms;
	
	for(i=0;i<n;i++){
		cin>>temp;
		ms.insert(temp);
	}

	int count = 0;
	for(auto it:ms){
		if(ms.find(it+k)!=ms.end())count++;
	}
	cout<<count<<endl;
}