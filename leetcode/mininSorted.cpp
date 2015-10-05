#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    int findMin(vector<int>& nums) {
        int start,end,middle,min,len=nums.size();
        if(!len)return 0;
        start=0;end=len-1;

        while(start<end){
        	if(start+1 == end)return nums[start]>nums[end] ? nums[end]:nums[start];
        	if(nums[start]<nums[end])return nums[start];
        	middle = start+((end-start)/2);
        	if(nums[start]==nums[middle]){

        	}
        	else if(nums[start]>nums[middle]){ //for helping in case of duplicates
        		end = middle;
        	}else start = middle;
        }

        return nums[start];
    }
};


int main(){
	vector<int>myvec;
	/*myvec.push_back(2);
	myvec.push_back(2);
	myvec.push_back(2);
	myvec.push_back(2);
	myvec.push_back(3);*/
	myvec.push_back(10);			
	myvec.push_back(1);
	myvec.push_back(10);
	myvec.push_back(10);
	myvec.push_back(11);
	/*myvec.push_back(1);
	myvec.push_back(1);
	myvec.push_back(2);
	myvec.push_back(2);
	myvec.push_back(-3);			
	//myvec.push_back(5);*/
	Solution obj;
	cout<<obj.findMin(myvec)<<endl;
	return 0;
}