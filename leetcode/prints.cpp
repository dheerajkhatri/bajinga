#include <bits/stdc++.h>
using namespace std;

class Print{
	
	public:

	void print(int* arr, int n){
		for(int i=0;i<n;i++){
			cout<<arr[i]<<" ";
		}
		cout<<endl;
	}

	void print(vector<int> arr){
		for(int i=0;i<arr.size();i++){
			cout<<arr[i]<<" ";
		}
		cout<<endl;
	}

	void print(vector<vector<int>> arr){
		for(int i=0;i<arr.size();i++){
			for(int j=0;j<arr[i].size();j++){
				cout<<arr[i][j]<<" ";
			}
			cout<<endl;
		}
	}

};

int main(){
	return 0;
}