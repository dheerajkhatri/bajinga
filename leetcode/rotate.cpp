#include <bits/stdc++.h>
using namespace std;


class Solution {
public:
    vector<vector<int>> generateMatrix(int n) {
        int level=0,total_level = ceil(log(n)),counter=1;
        int rows,cols;
        int rs,re,cs,ce,row_start,row_end,col_start,col_end;

        vector<vector<int>>mat;
        for(int m=0;m<n;m++) mat[i].resize(n);        

        rows=cols=n-1;
        for(level=0;level<total_level;level++){
        	row_start = level;col_start=level;
        	row_end = rows-level; col_end = cols-level;

        	while(cs!=ce){
        		mat[rs][cs] = counter++;
        		cs++;
        	}

        	while(rs!=re){
        		mat[rs][cs] = counter++;
        		rs++;
        	}

        	cs = col_start;
        	while(ce!=cs){
        		mat[re][ce] = conter++;
        		ce--;
        	}

        	rs = row_start;
        	while(re!=rs){
        		mat[re][cs] = counter++;
        		re--;
        	}

        }
    }

    void print(vector<vector<int>> v){
       	for(int i=0;i<v.size();i++){
            for(int j=0;j<v[i].size();j++){
                cout<<v[i][j]<<" ";
            }
            cout<<endl;
        }
    }
};

int main(){
	Solution obj;	
	obj.print(obj.generateMatrix(3));
	return 0;
}