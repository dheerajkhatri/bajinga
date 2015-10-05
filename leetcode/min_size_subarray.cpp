#include <bits/stdc++.h>
using namespace std;
class Solution {
public:
    int minSubArrayLen(int s, vector<int>& nums) {
    	if(nums.size()==0)return 0;
    	if(nums.size()==1 && s!=nums[0])return 0;
    	
    	int i,total=0,n=nums.size(),minlen=n+1,left=0,right=0;
    	
        while(right<n){
           // move right silder forward till total >= s
            do { total += nums[right++]; } while (right<num_len && total< s);
            // move left slider forward while maintaining total >= s
            while (left<right && total-nums[left]>=s) total -= nums[left++];
            // record if it's the minimum
            if(total>=s && minlen>right-left)minlen = right-left;
        }

    	if(minlen==n+1)return 0;
    	else return minlen;
    }
};

int main(){
	Solution obj;
	vector<int> v1 = {2,3,1,2,4,3};	
	cout<<obj.minSubArrayLen(7,v1)<<endl;
	
	return 0;
}