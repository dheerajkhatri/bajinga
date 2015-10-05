#include <iostream>
using namespace std;

int Floor(int* arr, int size,int left, int right, int element){
	int left,right,middle;

	while(left<=right){
		middle = left+(right-left)/2;
		if(arr[middle]>key)

	}


}

int floor(int* arr, int size, int element){
	if(element>=arr[size-1])return size-1;
	else if(element<=arr[0])return -1;
	else{
		return Floor(arr,size,0,size-1,element);
	}
}

int main(){

	int arr[] = {-1, 7, 11, 15, 116, 228, 339, 410};
	int size = sizeof(arr)/sizeof(arr[0]);
	int element;
	cin>>element;

	cout<<"floor of element "<<element<<" is "<<floor(arr,size,element)<<endl;
	return 0;
}