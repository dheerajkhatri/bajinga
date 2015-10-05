#include <bits/stdc++.h>
using namespace std;


int intToNum(vector<int>&v, int start, int end){
	long long num = 0;
	for(int i=start;i<end;i++){
		num = num*10 + v[i];
	}
	if(num>numeric_limits<int>::max())return -1;
	else return num;
}

void getNumUtil(set<int>& result,vector<int>& v, int curpos){	
	if(curpos>=10)return;
	int curnum = intToNum(v,0,curpos);
	if(curnum!=-1){
		result.insert(curnum);
	}

	if(v[curpos-1]!=9){
		v[curpos] = v[curpos-1]+1;
		getNumUtil(result,v,curpos+1);
	}

	if(v[curpos-1]!=0){
		v[curpos] = v[curpos-1]-1;
		getNumUtil(result,v,curpos+1);
	}	

}

set<int> getNum(int minv, int maxv){
	vector<int>v(10,0);
	set<int>result;
	for(int i=0;i<=9;i++){
		v[0] = i;
		getNumUtil(result,v,1);
	}
	return result;
}

int main(){	
	int a,b;
	cin>>a>>b;
	set<int>result = getNum(a,b);
	vector<int>out;

	for(auto i:result){
		if(i>=a && i<=b){
			if(!out.empty() && out[out.size()-1]==i)continue;
			else out.push_back(i);
		}
	}
	for(auto it:out)cout<<it<<" ";cout<<endl;
	return 0;
}