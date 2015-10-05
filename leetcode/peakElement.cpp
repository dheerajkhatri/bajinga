/*https://stackoverflow.com/questions/16933543/peak-element-in-an-array-in-c/16933686#16933686*/

#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    int findPeakElement(vector<int>& nums) {
		if(nums.size()==0)return 0;
		int low,mid,high,len=nums.size(),midn;
		low  = 0;
		high = len-1;

		while(low<high){
			//cout<<"low and high are "<<low<<" "<<high<<endl;
			mid = low+(high-low)/2;
			midn = mid+1;
			//cout<<"mid and midn are "<<mid<<" "<<midn<<endl;
			if(nums[midn]>nums[mid]){
				low = midn;
			}else{
				high = mid;
			}
		}

		return nums[low];
    }
};



int main(){
	vector<int>nums = {1,11,3,4,5,6,7,8,9};
	Solution obj;
	cout<<obj.findPeakElement(nums)<<endl;
	return 0;
}