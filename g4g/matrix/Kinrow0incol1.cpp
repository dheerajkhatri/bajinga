#include <bits/stdc++.h>
using namespace std;

int findK(vector<vector<bool>>& v){
	int row = v.size();
	int col = v[0].size();

	int i=0,j=col-1,result=-1;

	while(true){
		if(!v[i][j]){ //check in this row
			while(j>=0 && (!v[i][j] || i==j))
				j--;

			if(j==-1){
				result = i;
				break;
			}else i++;

		}else{ //check in this col
			while(i<row && (v[i][j] || i==j))
				i++;

			if(i==row){
				result = j;
				break;
			}else j--;
		}		
	}

	if(result!=-1){
		for(i=0;i<col;i++){
			if(v[result][i] && i!=result)return -1;			
		}
		for(i=0;i<row;i++){
			if(!v[i][result] && i!=result)return -1;			
		}				
	}

	return result;
}

int main(){
	vector<vector<bool>>v;
	v.push_back({0, 0, 1, 1, 0});
	v.push_back({0, 0, 0, 1, 0});
	v.push_back({1, 1, 1, 1, 0});
	v.push_back({0, 0, 0, 0, 0});
	v.push_back({1, 1, 1, 1, 1});	                     

	cout<<findK(v)<<endl;

	return 0;
}