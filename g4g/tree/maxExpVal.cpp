#include <bits/stdc++.h>
using namespace std;

typedef vector<int> vi;
typedef vector<vi> vii;

inline int max(int a, int b, int c){
	return a>b?(a>c ? a:c):(b>c ? b:c);
}

int maxVal(vi&arr){
	int n = arr.size();
	vii dp(n,vi(n,0));
	for(int i=0;i<n;i++){
		dp[i][i] = arr[i];
	}
	
	for(int len=1;len<=n;len++){
		for(int i=0;i+len-1< n ;i++){
			int j = i+len-1;
			for(int k=i;k<j;k++){
				dp[i][j] = max(dp[i][j],dp[i][k]*dp[k+1][j],dp[i][k]+dp[k+1][j]);				
			}
		}
	}	
	return dp[0][n-1];
}

void print(vii &v){
	for(auto it:v){
		for(auto jt:it)
			cout<<jt<<" ";
		cout<<endl;
	}
	cout<<endl;
}

int main(){
	vector<int>arr1 = {1,3,4,5};
	vector<int>arr2 = {2,1,1,1,1,2};	
	cout<<maxVal(arr1)<<endl;
	cout<<maxVal(arr2)<<endl;	
}