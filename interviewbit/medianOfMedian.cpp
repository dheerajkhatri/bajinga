#include <bits/stdc++.h>
using namespace std;


void swap(vector<int>&arr, int i, int j){
	int temp = arr[i];
	arr[i] = arr[j];
	arr[j] = temp;
}

int findMedian(vector<int>&arr, int start, int end){	
		sort(arr.begin()+start,arr.begin()+end+1);
		return arr[(start+(end-start)/2)];
}

int partiotin(vector<int>&arr,int left,int right,int pivot){
	int i;
	for(i=left;i<right;i++){
		if(arr[i]==pivot)break;
	}

	swap(arr,i,right);

	i=left;
	for(int j=left;j<=right-1;j++){
		if(arr[j]<=pivot){
			swap(arr,i,j);
			i++;
		}
	}
	swap(arr,i,right);
	return i;

}

int kthSmallest(vector<int>&arr,int l, int r, int k){
	cout<<"k is "<<k<<endl;
	if(k>0 && k<=r-l+1){
		int len = r-l+1;

		int i;
		vector<int>median((len+4)/5);

		for(i=0;i<len/5;i++){
			cout<<"i is "<<i<<endl;
			median[i] = findMedian(arr,l+i*5,l-1+(i+1)*5);
		}

		if(i*5<len){ //last group
			cout<<"if i is "<<i<<endl;
			cout<<l+i*5<<" "<<l-1+i*5+(len%5)<<endl;
			median[i] = findMedian(arr,l+i*5,l-1+i*5+(len%5));
			i++;
		}



		int medOfMed = i==1 ? median[i-1]:kthSmallest(median,0,i-1,i/2);

		int pos = partiotin(arr,l,r,medOfMed);

		if(pos-1==k-1)return arr[pos];
		else if(pos-1>k-1){
			return kthSmallest(arr,l,pos-1,k);
		}else{
			return kthSmallest(arr,pos+1,r,k-pos+l-1);
		}

	}

	return numeric_limits<int>::min();
}


int main(int argc,char*argv[]){
	vector<int>v={12, 3, 5, 7, 4, 19, 26};
	int k = atoi(argv[1]);
	cout<<k<<" k"<<endl;
	cout<<kthSmallest(v,0,6,atoi(argv[1]))<<endl;
	return 0;
}