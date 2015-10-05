#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    int rob(vector<int>& nums) {
    	if(!nums.size())return 0;
        if(nums.size()==1)return nums[0];
        if(nums.size()==1)return max(nums[0],nums[1]);
        int pprev = 0, prev = nums[0],cur;

        for(int i=1;i<nums.size();i++){
        	cur = max(pprev+nums[i],prev);
        	pprev = prev;
        	prev = cur;
        }
        return cur;
    }
};


int main(){

	vector<int>v;
	v.push_back(6);v.push_back(1);v.push_back(1);v.push_back(7);
	Solution obj;
	cout<<obj.rob(v)<<endl;
	return 0;
}