#include <bits/stdc++.h>
#include <cstdio>
using namespace std;

typedef long long LL;


int main(){
	ios_base::sync_with_stdio(false);
	LL t,i,cur,total,n,temp;
	cin>>t;
	while(t--){
		cur = total = i =0;
		cin>>n;
		for(i=0;i<n;i++){
			cin>>temp;
			if(cur<temp){
				total+=temp-cur;
			}

		cur = temp;
		}
		cout<<total<<endl;
	}
	return 0;
}