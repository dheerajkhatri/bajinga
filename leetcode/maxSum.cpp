/* Find the contiguous subarray within an array (containing at least one number) which has the largest sum.
For example, given the array [−2,1,−3,4,−1,2,1,−5,4],
the contiguous subarray [4,−1,2,1] has the largest sum = 6. */

#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    int maxSubArray(vector<int>& nums) {
  		int max = numeric_limits<int>::min();
  		bool allneg = true;
  		int total = 0;

  		for(int i=0;i<nums.size();i++){
  			if(nums[i] >= 0){  				
				total +=  nums[i];  			
				if(max < total) max = total;
  			}else{
  				total += nums[i];
  				if(total<0) total = 0;
  			}
  		}

  		//if all elements are negative
  		if(max == numeric_limits<int>::min()){
  			for(int j=0;j<nums.size();j++){  
  				if(max<nums[j])
  					max = nums[j];
  			}
  		}
  		return max;
    }
};


int main(){
	vector<int>myvec;
	myvec.push_back(1);myvec.push_back(11);myvec.push_back(1);myvec.push_back(-2);
	//myvec.push_back(-1); myvec.push_back(2);myvec.push_back(1);myvec.push_back(-5);myvec.push_back(4);
	Solution obj;
	cout<<obj.maxSubArray(myvec)<<endl;	
	return 0;
}