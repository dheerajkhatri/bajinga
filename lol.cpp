#include <bits/stdc++.h>
using namespace std;

void print(vector<vector<int>>&v){	
	int i=0;

	for(auto it:v){
		cout<<i<<" ....";
		for(auto jt:it){
			cout<<jt<<" ";
		}
		cout<<endl;
		i++;
	}
}

int count(vector<int>&v, int t){
	int n = v.size();
	vector<vector<int>>dp(n+1,vector<int>(t+1,0));
	
	for(int i=0;i<=n;i++){
		for(int s=0;s<=t;s++){
			if(i==0)dp[i][s] = 0;
			else if(s==0)dp[i][s] = 1;
			else{
				//dont include cur element + include cur element
				dp[i][s] = dp[i-1][s];
				if(s-v[i-1]>=0)
					dp[i][s] += dp[i-1][s-v[i-1]];  
			}
		}
	}
	
	print(dp);
	
	return dp[n][t];
}


int main(){
	vector<int>v = {9,4,3,2,6};
	int target = 15;
	cout<<count(v,target)<<endl;
	return 0;
}
