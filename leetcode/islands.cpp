#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
	bool isvalid(int x,int y, int row, int col){
		if(x<0 || x>=row || y<0 || y>=col)return false;
		return true;
	}

	bool dfs(vector<vector<char>>grid,vector<vector<int>> &isVisited,int x, int y, int row, int col){

		//cout<<"x and y are "<<x<<" "<<y<<endl;
		if(isVisited[x][y] || grid[x][y]=='0')return false;		
		isVisited[x][y] = 1;

		int arrx[] = {-1,1,0,0};
		int arry[] = {0,0,-1,1};

		for(int i=0;i<4;i++){			
				if(isvalid(x+arrx[i],y+arry[i],row,col) && grid[x+arrx[i]][y+arry[i]]=='1' && !isVisited[x+arrx[i]][y+arry[i]]){					
					dfs(grid,isVisited,x+arrx[i],y+arry[i],row,col);
				}			
		}
		return true;
	}

    int numIslands(vector<vector<char>>& grid) {
  		int row,col,i,j,val,count;
  		row = grid.size();
  		if(!row) return 0;
  		col = grid[0].size();

  		vector<int>rv(col,0);
  		vector<vector<int>>isVisited(row,rv);  		

  		for(i=count=0;i<row;i++){
  			for(j=0;j<col;j++){  			  				
  					//cout<<i<<" "<<j<<" ------------------"<<endl;
  					if(grid[i][j]=='1' && !isVisited[i][j]  && dfs(grid,isVisited,i,j,row,col)) count++;  					  					
  					//print(isVisited);  					  					  				
  			}
  		}

  		return count;
    }

    void print(vector<vector<int>>vv){
    	int row = vv.size();
    	int col = vv[0].size();
    	for(int i=0;i<row;i++){
    		for(int j=0;j<col;j++){
    			cout<<vv[i][j]<<" ";
    		}
    		cout<<endl;
    	}
    }

};


int main(){
	vector<vector<char>>vv;
	/*vector<char> v1 = {'0','0','0','0','0'};
	vector<char> v2 = {'0','0','0','0','0'};
	vector<char> v3 = {'0','0','0','0','0'};
	vector<char> v4 = {'0','0','0','0','0'};*/
	vector<char> v1 = {'1','0','1','0','1'};
	vector<char> v2 = {'1','0','1','0','1'};
	vector<char> v3 = {'0','1','0','1','0'};
	vector<char> v4 = {'1','0','1','1','1'};
	vv.push_back(v1);vv.push_back(v2);vv.push_back(v3);vv.push_back(v4);

	Solution obj;
	cout<<obj.numIslands(vv)<<endl;
	return 0;
}
