#include <bits/stdc++.h>
using namespace std;

void print(vector<vector<int>>&vv){
	for(auto it:vv){
		for(auto jt:it)cout<<jt<<" ";
		cout<<endl;
	}
}

int editDistance(string& s1, string& s2){
	//E(i, j) = min( [E(i-1, j) + D], [E(i, j-1) + I],  [E(i-1, j-1) + R if i,characters are not same] )
	int i,j,len1=s1.length(),len2=s2.length(),cur;

	//2d array of len1xlen2
	vector<vector<int>>vv(len1+1,vector<int>(len2+1,numeric_limits<int>::max()));

	for(i=0;i<=len1;i++){
		for(j=0;j<=len2;j++){
			if(!i)vv[i][j] = j;
			else if(!j)vv[i][j] = i;
			else{
				vv[i][j] = min(vv[i-1][j]+1,vv[i][j-1]+1);
				cur = s1[i-1] == s2[j-1] ? vv[i-1][j-1] : vv[i-1][j-1]+1;
				vv[i][j] = min(vv[i][j],cur);
			}
		}
	}
	print(vv);

	return vv[len1][len2];

}

int main(){
	string s1 = "SUNDAY";
	string s2 = "SATU";
	cout<<editDistance(s1,s2)<<endl;
	return 0;
}