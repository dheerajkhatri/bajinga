#include <bits/stdc++.h>
using namespace std;

void swap(int*arr, int pos1, int pos2){
	int temp = arr[pos1];
	arr[pos1] = arr[pos2];
	arr[pos2] = temp;
}

void bubbleSort(int*arr,int len){
	for(int iter=0;iter<len-1;iter++){
		int allsorted = 1;
		for(int i=0;i<len-iter-1;i++){
			if(arr[i]>arr[i+1]){swap(arr,i,i+1);allsorted=0;}
		}
		if(allsorted)break;		
	}
}

int main(){

	int i,*arr = new int[8];
	arr[0]=2;arr[1]=4;arr[2]=1;arr[3]=6;
	arr[4]=8;arr[5]=5;arr[6]=3;arr[7]=7;

	for(i=0;i<8;i++)cout<<arr[i]<<" ";cout<<endl;
	bubbleSort(arr,8);
	for(i=0;i<8;i++)cout<<arr[i]<<" ";cout<<endl;
	return 0;
}