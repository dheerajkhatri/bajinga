#include <bits/stdc++.h>
using namespace std;


bool feasible(vector<int>&v, int dist, int c){
	int taken = 1;
	int last = v[0];
	for(int i=1;i<v.size();i++){
		if(v[i]-last>=dist){
			taken++;
			last = v[i];
		}
	}
	return taken>=c;
}

int ans(vector<int>&v, int c){
	int low = 0;
	int high = *std::max_element(v.begin(),v.end()) - *std::min_element(v.begin(),v.end())+1;
	while(high-low>1){
		int mid = low+(high-low)/2;
		if(feasible(v,mid,c))
			low = mid;
		else high = mid;
	}
	return low;
}

int main() {
    std::ios::sync_with_stdio(false);
    int t,n,c,temp;
    cin>>t;
    while(t--){
    	cin>>n>>c;
    	vector<int>v(n);
    	for(int i=0;i<n;i++){
    		cin>>temp;
    		v[i] = temp;
    	}
    	sort(v.begin(),v.end());
    	cout<<ans(v,c)<<endl;
    }
}