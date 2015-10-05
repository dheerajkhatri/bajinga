#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
	long long getnext(int cur, int n, int i){						
        long long a = (n-i+1);
        long long b = (a*cur)/i;        
        return b; 
	}	

    vector<int> getRow(int rowIndex) {    	
        vector<int>arr(rowIndex+1);       
        int n = rowIndex;
        int cur=1;
        arr[0] = cur;

        for(int i=1;i<=rowIndex/2;i++){        	
        	arr[i] = getnext(cur,n,i);
        	cur = arr[i];
        }

        for(int j=rowIndex;j>rowIndex/2;j--){
        	arr[j] = arr[rowIndex-j];
        }
        return arr;
    }

    void print(vector<int>v){
    	for(int i=0;i<v.size();i++){
    		cout<<v[i]<<" ";
    	}
    	cout<<endl;
    }
};

int main(int argc, char* argv[]){
	Solution obj;
	int val = atoi(argv[1]);
	vector<int> v = obj.getRow(val);
	obj.print(v);
	return 0;
}