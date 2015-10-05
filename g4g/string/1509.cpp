/*
Maximum weight transformation of a given string
*/
#include <iostream>
#include <vector>
#include <map>
#include <string>
#include <algorithm>
using namespace std;

int solve(string& s, int curpos, vector<int>& dp){
	int len = s.length();
	if(curpos>=len)return 0;
	if(dp[curpos]!=-1)return dp[curpos];

	int single = 1+solve(s,curpos+1,dp);
	int ans = single;

	if(curpos+1<len){
		if(s[curpos]!=s[curpos+1]){
			ans = max(ans,4+solve(s,curpos+2,dp));
		}else{
			ans = max(ans,3+solve(s,curpos+2,dp));
		}
	}
	dp[curpos] = ans;
	return ans;
}


int getMaxWeight(string s){
	int len = s.length();
	if(!len)return 0;
	if(len==1)return 1;
	vector<int>dp(len,-1);
	return solve(s,0,dp);
}

int main(){
    string str = "AAAAABB";
    cout << "Maximum weight of a transformation of "
         << str << " is " << getMaxWeight(str)<<endl;
    return 0;
}