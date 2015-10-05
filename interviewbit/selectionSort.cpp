#include <bits/stdc++.h>
using namespace std;

void swap(int*arr, int pos1, int pos2){
	int temp = arr[pos1];
	arr[pos1] = arr[pos2];
	arr[pos2] = temp;
}

void selectionSort(int*arr,int len){
	int val,iMin;

	for(int pos=0;pos<len-1;pos++){
		val = arr[pos];
		iMin = pos;		
		for(int i=pos+1;i<len;i++){
			if(arr[i]<val){
				val = arr[i];
				iMin = i;
			}
		}
		swap(arr,pos,iMin);
	}
}

int main(){

	int i,*arr = new int[8];
	arr[0]=2;arr[1]=4;arr[2]=1;arr[3]=6;
	arr[4]=8;arr[5]=5;arr[6]=3;arr[7]=7;

	for(i=0;i<8;i++)cout<<arr[i]<<" ";cout<<endl;
	selectionSort(arr,8);
	for(i=0;i<8;i++)cout<<arr[i]<<" ";cout<<endl;
	return 0;
}