#include <bits/stdc++.h>
using namespace std;


void printMat(vector<vector<int>>&mat){
	int row = mat.size();
	int col = mat[0].size();

	int dir=0,left=0,right=col-1,top=0,down=row-1;
	int count = 0;

	while(count!=row*col){		
		
		if(dir==0){
			//cout<<"DIR0"<<endl;
			for(int i=left;i<=right;i++)
				cout<<mat[top][i]<<" ";				
			count += right-left+1;
			top++;
			dir = 1;
		}else if(dir==1){
			//cout<<"DIR1"<<endl;
			for(int i=top;i<=down;i++)
				cout<<mat[i][right]<<" ";
			count += down-top+1;
			right--;		
			dir = 2;
		}else if(dir==2){
			//cout<<"DIR2"<<endl;
			for(int i=right;i>=left;i--)
				cout<<mat[down][i]<<" ";
			count += right-left+1;
			down--;
			dir = 3;
		}else if(dir==3){
			//cout<<"DIR3"<<endl;
			for(int i=down;i>=top;i--)
				cout<<mat[i][left]<<" ";
			count += down-top+1;
			left++;
			dir = 0;
		}
	}
	cout<<endl;	
	return;
}

int main(){
	
	vector<vector<int>>v = {{1,2,3,4},{5,6,7,8},{9,10,11,12},{13,14,15,16}};
	vector<vector<int>>v1 = {{1,2,3},{4,5,6},{7,8,9}};
	vector<vector<int>>v2 = {{1,2,3,4,5,6},{7,8,9,10,11,12},{13,14,15,16,17,18}};
	printMat(v);
	printMat(v1);
	printMat(v2);
	return 0;
}