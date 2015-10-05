#include <bits/stdc++.h>
#include <typeinfo>
using namespace std;

class Solution {
public:
    vector<vector<int>> generate(int numRows) {
		vector<vector<int>> v;
		vector<int>temp;		
		if(numRows==0)return v;
		temp.push_back(1);
		v.push_back(temp);
		if(numRows==1)return v;
		
		for(int i = 2; i <= numRows ; i++){
			vector<int>cur;
			for(int j = 1; j<=i ; j++){
				if(j==1 || j==i)cur.push_back(1);
				else cur.push_back(v[i-2][j-1]+v[i-2][j-2]);
			}			
			v.push_back(cur);
		}
		return v;		
    }

    void print(vector<int>v){
    	for(int i=0;i<v.size();i++)cout<<v[i]<<" ";
    	cout<<endl;
    }

    void print(vector<vector<int>> v){
    	for(int i=0;i<v.size();i++){
    		for(int j=0;j<v[i].size();j++) cout<<v[i][j]<<" ";
    		cout<<endl;
    	}
    }

};

int main(int argc,char* argv[]){
	Solution obj;
	vector<vector<int>>v = obj.generate(atoi(argv[1]));	
	obj.print(v);
	return 0;
}