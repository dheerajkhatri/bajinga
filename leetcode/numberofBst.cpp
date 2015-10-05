#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    int numTrees(int n) {
        //need to find value of catalan number C(2n,n)/n+1
    	long long num = 1;

        for(int i=n+1;i<=2*n;i++){
        	num = (num* i)/(i-n);
        	cout<<"number is "<<num<<endl;
        }
        num /= n+1;
        return num;
    }
};


int main(){
	Solution obj;
	for(int i =0;i<10;i++){
		cout<<obj.numTrees(i)<<endl;	
	}
	

	return 0;
}