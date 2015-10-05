#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    vector<int> majorityElement(vector<int>& nums) {
        int num1,num2,count1,count2,com,i;
        count2 = count1 = 0;
        for(i=0;i<nums.size();i++){
        	if(nums[i]==num1 || count1 ==0 ){
        		count1++;
        		num1 = nums[i];
        	}else if(nums[i]==num2 || count2==0){
        		count2++;
        		num2 = nums[i];
        	}else{
        		count2--;
        		count1--;
        	}
        }
        
        com = floor(nums.size()/3);

        for(count1=count2=i=0;i<nums.size();i++){
        	if(nums[i]==num1)count1++;
        	else if(nums[i]==num2)count2++;
        }

        vector<int>v;
        if(count1>com)v.push_back(num1);
        if(count2>com)v.push_back(num2);
        return v;
    }
};

int main(){
	Solution obj;
	vector<int>nums = {3,2,3,2,5,3};
	vector<int> v = obj.majorityElement(nums);
	for(auto it:v)cout<<it<<endl;
	return 0;
}