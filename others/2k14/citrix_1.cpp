#include <bits/stdc++.h>
using namespace std;

bool prom(vector<int>& girls,vector<int>& boys){
	int n = girls.size();
	int m = boys.size();

	if(m>n)return 0;

	sort(boys.begin(),boys.end(),std::greater<int>());
	sort(girls.begin(),girls.end(),std::greater<int>());


	int j=0;
	for(int i=0;i<m;){
		if(j==n)return 0;
		if(boys[i]>girls[j]){
			cout<<boys[i]<<" "<<girls[j]<<endl;
			i++;j++;
		}else{
			j++;
		}
	}
	return 1;
}


int main(){
	vector<int>b1 = {3,6,9};
	vector<int>g1 = {1,2,3,4,5,7,8};

	vector<int>b2 = {3,6,9};
	vector<int>g2 = {1,7,8,9};

	vector<int>b3 = {3,3,6,6,7,9};
	vector<int>g3 = {1,2,3,4,5,6,7,8};

	cout<<prom(g1,b1)<<endl;	
	cout<<prom(g2,b2)<<endl;
	cout<<prom(g3,b3)<<endl;

	return 0;
}