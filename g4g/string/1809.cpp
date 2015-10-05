/*
Longest Repeating Subsequence
*/
#include <iostream>
#include <vector>
#include <map>
#include <string>
#include <algorithm>
using namespace std;


int findLongestRepeatingSubSeq(string s){
	int len = s.length();
	if(len<=1)return 0;
	vector<vector<int>>dp(len+1,vector<int>(len+1,0));

	for(int i=1;i<=len;i++){
		for(int j=1;j<=len;j++){
			if(s[i-1]==s[j-1] && i!=j){
				dp[i][j] = dp[i-1][j-1]+1;
			}else{
				dp[i][j] = max(dp[i-1][j],dp[i][j-1]);
			}
		}
	}
	for(auto it:dp){
		for(auto jt:it){
			cout<<jt<<" ";
		}
		cout<<endl;
	}
	return dp[len][len];
}

int main(){
    
    cout << "axxxb -->" << findLongestRepeatingSubSeq("axxxb")<<endl;
    cout << "abab -->" << findLongestRepeatingSubSeq("abab")<<endl;
    cout << "aab -->" << findLongestRepeatingSubSeq("aab")<<endl;
    return 0;
}