#include <bits/stdc++.h>
using namespace std;
 
vector<vector<int>>dp;
vector<int> ar = {-1,-1,-1,0,0,1,1,1};
vector<int> ac = {-1,0,1,-1,1,-1,0,1};
 
bool isvalid(vector<vector<char>>&mat,int i, int j){
	int row = mat.size();
	int col = mat[0].size();
	if(i<0 || j<0 || j>=col || i>=row)return false;
	return true;
}
 
void print(vector<vector<int>>&dp){
	for(auto it:dp){
		for(auto jt:it){
			cout<<jt<<" ";
		}
		cout<<endl;
	}
}

int dfs(vector<vector<char>>&mat, int cr, int cc){
	//cout<<"checking for "<<cr<<" "<<cc<<"....."<<endl;
	int row = mat.size();
	int col = mat[0].size();
 
	if(dp[cr][cc])
		return dp[cr][cc];
 
	int maxans = 1,curans=-1;
 
	for(int i=0;i<9;i++){
		if(isvalid(mat,cr+ar[i],cc+ac[i]) and mat[cr+ar[i]][cc+ac[i]] == mat[cr][cc]+1){
			//cout<<cr+ar[i]<<" "<<cc+ac[i]<<" checked"<<endl;
			curans = dfs(mat,cr+ar[i],cc+ac[i]);
			if(curans+1>maxans)maxans = curans+1;
		}
	}
 
 	//print(dp);
 	dp[cr][cc] = maxans; 	
 	//cout<<cr<<" "<<cc<<" returned................"<<endl;	
 	return maxans;
}
 
int solve(vector<vector<char>>&mat, char c){
	int row = mat.size();
	int col = mat[0].size();
 
	int maxval = -1,ans=-1;
 
	for(int i=0;i<row;i++){
		for(int j=0;j<col;j++){
			if(mat[i][j]==c){				
				ans = dfs(mat,i,j);
				if(maxval<ans)maxval = ans;
			}
		}
	}
	return ans;
}
 
int main(){
	vector<vector<char>>mat;
	vector<char>v1 = {'a','c','d'};
	vector<char>v2   { 'h','b','a'};
	vector<char>v3 = { 'i','g','f'};
	mat.push_back(v1);mat.push_back(v2);mat.push_back(v3);
 
	int rows = mat.size();
	int cols = mat[0].size();
 
	dp.resize(rows,vector<int>(cols,0));
 
	cout<<solve(mat,'a')<<endl;
	cout<<solve(mat,'e')<<endl;
	cout<<solve(mat,'b')<<endl;
	cout<<solve(mat,'f')<<endl;
	return 0;	
}