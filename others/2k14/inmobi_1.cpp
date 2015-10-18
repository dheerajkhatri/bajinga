#include <bits/stdc++.h>
using namespace std;

struct mypair{
	int val;
	int rank;
	bool operator <(mypair other) const{
		return rank>other.rank;
	}
};


//sort by rank in decreasing order and the processed
int votes(vector<int>& values, vector<int>& ranks){	
	int len = values.size();
	struct mypair *arr = new struct mypair[len];

	for(int i=0;i<len;i++){
		arr[i].val = values[i];
		arr[i].rank = ranks[i];
	}

	sort(arr,arr+len);
	
	int prev = numeric_limits<int>::min();
	int count = 0;
	for(int i=0;i<len;i++){
		if(arr[i].rank==-1)break;
		if(arr[i].val<=prev){
			count += (prev-arr[i].val)+1;
			prev = prev+1;
		}else{
			prev = arr[i].val;
		}
	}
	return count;
}

int main(){
	vector<int>r1 = {0,2,1,3,-1};
	vector<int>v1 = {10,8,6,4,3};

	vector<int>r2 = {4,0,1,3,2};
	vector<int>v2 = {10,100,40,15,15};

	vector<int>r3 = {3,2,1,0};
	vector<int>v3 = {15,15,16,15};

	cout<<votes(v1,r1)<<endl;
	cout<<votes(v2,r2)<<endl;
	cout<<votes(v3,r3)<<endl;
	return 0;
}