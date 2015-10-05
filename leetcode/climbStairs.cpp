#include <bits/stdc++.h>
using namespace std;


class Solution {
public:
    int climbStairs(int n) {
        if(!n)return 0;
        if(n==1)return 1;
        if(n==2)return 2;

        int prev1,prev2,cur;                

        for(int i=3,prev=2,prev2=1;i<=n;i++){
        	cur = prev+prev2;
        	prev2 = prev;
        	prev = cur;
        }
		return cur;        
    }
};

int main(){
	Solution obj;
	for(int i=0;i<10;i++)
		cout<<obj.climbStairs(i)<<endl;
	return 0;
}