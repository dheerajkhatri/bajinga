#include <bits/stdc++.h>
using namespace std;

int main(){
	std::ios::sync_with_stdio(false);
	int t,m,x,y,count,hn,result;
	cin>>t;
	while(t--){
		result = 0;
		bool arr[101];
		memset(arr,0,101);
		cin>>m>>x>>y;
		count = x*y;
		while(m--){
			cin>>hn;
			arr[hn] = 1;

			for(int i=1;i<=count && hn+i<=100 ;i++){
				arr[hn+i] = 1;
			}

			for(int j=1;j<=count && hn-j>=0;j++){
				arr[hn-j] = 1;
			}
		}

		for(int k=1;k<=100;k++){
			if(!arr[k])result++;
		}
		cout<<result<<endl;
	}
	return 0;
}