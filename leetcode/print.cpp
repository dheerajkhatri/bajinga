#include "print.h"	

void Print::print(vector<int>v){
	for(auto it : v) cout<<it<<" "; cout<<endl;
}

void Print::print(vector<vector<int>>vv){
	for(auto it : vv){
		for(auto jt:it) cout<<jt<<" ";				
		cout<<endl;
	}					
}

void Print::print(set<vector<int>>sv){
	for(auto it : sv){
		for(auto jt:it) cout<<jt<<" ";				
		cout<<endl;
	}					
}

void Print::print(list<int>l){
	for(auto it : l) cout<<it<<" "; cout<<endl;
}

void Print::print(int *arr, int size){
	for(int i=0;i<size;i++) cout<<arr[i]<<" ";
	cout<<endl;
}

void Print::print(int **arr, int row, int col){
	for(int i=0;i<row;i++){
		for(int j=0;j<col;j++) cout<<arr[i][j]<<" ";				
		cout<<endl;
	}
}