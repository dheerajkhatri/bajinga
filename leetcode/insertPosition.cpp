#include <bits/stdc++.h>
using namespace std;



class Solution {
public:
    int searchInsert(vector<int>& nums, int target) {
        
        if(nums.size()==0 || (nums.size()>=1 && (target==nums[0] || target<nums[0])))return 0;
        if(nums.size()==1 && target> nums[0]) return 1;

        int start = 0;
        int end = nums.size()-1;
        int middle;
        while(end-start!=1){
       		middle = (end-start)/2 + start;
       		if(nums[middle] == target) return middle;
       		else if(nums[middle] > target){
       			end = middle;
       		}else{
       			start = middle;
       		}
        }
        //cout<<"in outer start "<<start<<" end "<<end<<endl;
        if(target < nums[start]) return start-1;
        else if(target==nums[start]) return start;
        else if(target > nums[start] && target < nums[end]) return start+1;
        else if(target == nums[end]) return end;
        else return end+1;
    }
};

int main(){

	vector<int> vec;
	vec.push_back(1);
	vec.push_back(3);
	vec.push_back(5);
	vec.push_back(6);
	//vec.push_back();
	Solution obj;
	cout<<obj.searchInsert(vec,0)<<endl;
	return 0;
}