#include <bits/stdc++.h>
using namespace std;
typedef unsigned long long LL;

void replaceLevel(int* arr,int level){
	LL dstart,dend,ustart,uend,i,temp,j;
	dstart = (1<<(level-1))-1;
	dend = (1<<level)-2;
	j = ustart = (1<<(level-2))-1;

	for(i=dstart;i<dend;i+=2,j++){
		temp = max(arr[i],arr[i+1]);
		arr[j] *= temp;
	}	
}

LL tProduct(int *arr, int h){
	if(h==1){
		return(arr[0]);
	} else {
		for(int i=h;i<=1;i++){
			replaceLevel(arr,i);
			cout<<"now level is "<<endl;
			
		}
		return(arr[0]);
	}
}

int main(){
	int h,i,siz;	
	cin>>h;
	while(h){
		int * arr;
		siz = (1<<h)-1;
		arr = new int[siz];
		for(i=0;i<siz;i++){
			cin>>arr[i];
		}
		cout<<tProduct(arr,h)<<endl;
		cin>>h;
	}
}