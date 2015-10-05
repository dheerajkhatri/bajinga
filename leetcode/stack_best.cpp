#include <bits/stdc++.h>
using namespace std;

typedef long long ll;
static ll profit = 0;

	int minelement(int start, int end, vector<int>value){
		int siz = value.size();
		int min = start;
		for(int i=start;i<=end;i++){
			if(value[i]<value[min]){
				min = i;
			}
		}
		return min;
	}


ll max_profit(int start, int end, vector<int> value){	
	ll allmax,indmax,minindex;

	if(end<start)return 0;

	if(end == start) {
		if(profit<value[start]){
			profit = value[start];
		}
		return profit;
	}

	if(end-start<=1){
		//cout<<"INNER start "<<start<<" end "<<end<<endl;
		allmax = min(value[start],value[end])*2;
		indmax = max(value[start],value[end]);

		if(max(allmax,indmax) > profit){
			profit = max(allmax,indmax);			
		}

		return profit;
	}
	
	//cout<<"OUTER start "<<start<<" end "<<end<<endl;
	minindex = minelement(start,end,value);
	//cout<<minindex<<" is minindex"<<endl;
	allmax = (end-start+1)*value[minindex];
	//cout<<allmax<<" allmax"<<endl;
	indmax = max(max_profit(start,minindex-1,value),max_profit(minindex+1,end,value));
	//cout<<indmax<<" indmax"<<endl;
	//cout<<max(allmax,indmax)<<endl;
	if(max(allmax,indmax) > profit){
		profit = max(allmax,indmax);
	}
	return profit;
}


int main(){
	vector<int> myvec;
	int n,temp; cin>>n;

	for(int i =0 ;i<n;i++){
		cin>>temp;
		myvec.push_back(temp);
	}

	cout<<max_profit(0,n-1,myvec)<<endl;	
	return 0;
}