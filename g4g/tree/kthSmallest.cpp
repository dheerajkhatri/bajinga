#include <bits/stdc++.h>
using namespace std;
#define MAX 1e8

//only for size 5 array
int findMedian(vector<int>&arr,int n){
	sort(arr.begin(),arr.begin()+n);	
	return arr[n/2];
}

void swap(vector<int>&arr, int x, int y){
	assert(x>=0 && y>=0 && x<arr.size() && y<arr.size());
	int temp = arr[x];
	arr[x] = arr[y];
	arr[y] = temp;
}

int partition(vector<int>&arr, int l, int r, int val){
	int i;
	//move val to the end
	for(int i=l;i<r;i++){
		if(arr[i]==val)
			break;		
	}
	swap(arr,i,r);
	//now partition the array by last value that is pivot
	i = l;
	for(int j=l;j<r;j++){
		if(arr[j]<=val){
			swap(arr,i,j);
			i++;
		}
	}
	swap(arr,i,r);
	return i;
}

int kthSmallest(vector<int>&arr, int l, int r, int k){
	//cout<<l<<" "<<r<<" "<<k<<" called"<<endl;
	if(k>0 && k<=r-l+1){
		int i,n = r-l+1;
		int buckets = (n+4)/5;
		vector<int>medianArr(buckets);
		//get the median array
		for(i=0;i<n/5;i++){
			medianArr[i] = findMedian(arr.begin()+l+i*5,5);
			//cout<<medianArr[i]<<" ";
		}
		if(i*5<n){
			medianArr[i] = findMedian(arr.begin()+l+i*5,n%5);
			//cout<<medianArr[i]<<" ";
			i++;
		}//cout<<endl;
		//find median of median
		int medianOfMedian = i==1 ? medianArr[i-1]:kthSmallest(medianArr,0,i-1,i/2);
		//get the pos of medianOfMedian in original array
		int pos = partition(arr,l,r,medianOfMedian);

		if(pos-l==k-1)
			return arr[pos];
		if(pos-l>k-1)
			return kthSmallest(arr,l,pos-1,k);		
		return kthSmallest(arr,pos+1,r,k-pos+l-1);
	}
	return MAX;
}

int main(){
	vector<int>arr = {12, 3, 5, 7, 4, 19, 26};	
	//for(int i=1;i<7;i++)
	cout<<kthSmallest(arr,0,6,4)<<endl;	
	/*for(int i=0;i<7;i++)
		cout<<arr[i]<<" ";cout<<endl;	*/	
	return 0;
}