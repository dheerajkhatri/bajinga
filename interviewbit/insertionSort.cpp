#include <bits/stdc++.h>
using namespace std;

void insertionSort(int*arr, int len){
	int hole,value;

	for(int i=1;i<len;i++){
		value = arr[i];
		hole = i;
		while(hole>0 && arr[hole-1]>value){
			arr[hole] = arr[hole-1];
			hole--;
		}
		arr[hole] = value;
	}
}


int main(){
	int i,*arr = new int[8];
	arr[0]=2;arr[1]=4;arr[2]=1;arr[3]=6;
	arr[4]=8;arr[5]=5;arr[6]=3;arr[7]=7;

	for(i=0;i<8;i++)cout<<arr[i]<<" ";cout<<endl;
	insertionSort(arr,8);
	for(i=0;i<8;i++)cout<<arr[i]<<" ";cout<<endl;
	return 0;

}