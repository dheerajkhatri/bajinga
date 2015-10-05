#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
	void print(vector<int>v){
		for(auto it:v)cout<<it<<" ";cout<<endl;
	}

    int minimumTotal(vector<vector<int>>& triangle) {
  		int row,col,i,j,min,temp1,temp2,r,ele;  		
  		row = triangle.size();

  		if(!row)return 0;
  		else if(row==1)return triangle[0][0];
  		else{
  			vector<int> prev;

  			prev.push_back(triangle[0][0]);

  			for(r=1;r<row;r++){  				
  				vector<int>v(r+1);
  				v[0] = prev[0]+triangle[r][0];
  				for(ele=1;ele<r;ele++){  					
  					min = prev[ele-1]>prev[ele] ? prev[ele] : prev[ele-1];
  					v[ele] = triangle[r][ele]+min;
  				}
  				v[ele] = triangle[r][ele]+prev[ele-1];  				
  				//print(v);
  				prev.clear();
  				prev = v;  				
  			}

  			min = *min_element(prev.begin(),prev.end());
  			return min;
  		}  		
    }
};

int main(){
	vector<vector<int>>v = {{2},{3,4},{6,5,7},{4,1,8,3}};
	Solution obj;
	cout<<obj.minimumTotal(v)<<endl;
	return 0;
}