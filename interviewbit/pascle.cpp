#include <bits/stdc++.h>
using namespace std;

vector<vector<int> > /*Solution::*/generate(int A) {
	vector<vector<int>> sol;
	if(A==0)return sol;

	vector<int>temp;
	temp.push_back(1);
	sol.push_back(temp);
	if(A==1)return sol;

	for(int i=2;i<=A;i++){
		vector<int>v(i);
		v[0] = 1;		
		for(int j=1;j<=ceil(i/2);j++){
			v[j] = sol[i-2][j-1]+sol[i-2][j];
		}
		for(int k=i-1;k>=i/2;k--){
			v[k] = v[i-k-1];			
		}
		sol.push_back(v);
	}
	return sol;
}

void print(vector<vector<int>>v){
	for(int i=0;i<v.size();i++){
		for(int j=0;j<v[i].size();j++){
			cout<<v[i][j]<<" ";
		}
		cout<<endl;
	}
}

int main(){
	vector<vector<int>> v = generate(8);
	print(v);
	return 0;
}