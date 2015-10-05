#include <bits/stdc++.h>
using namespace std;

void swap(vector<int>&v,int i, int j){
	int temp = v[i];
	v[i] = v[j];
	v[j] = temp;
}

int main(){
	int len,temp,sw=0;
	cin>>len;
	vector<int>v(len);

	for(int i=0;i<len;i++){
		cin>>temp;
		v[i] = temp;
	}

	for(int iter=0;iter<len-1;iter++){
		int allsorted = 1;
		for(int i=0;i<len-iter-1;i++){
			if(v[i]>v[i+1]){swap(v,i,i+1);allsorted=0;sw++;}
		}
		if(allsorted)break;		
	}

	cout<<sw<<endl;
	return 0;
}