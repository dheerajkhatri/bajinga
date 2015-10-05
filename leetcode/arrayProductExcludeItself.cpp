#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    vector<int> productExceptSelf2(vector<int>& nums) {
    	int len = nums.size();
    	int left[len],right[len],i,j,temp;
    	left[0] = right[len-1] = 1;    
    	for(i=0,temp=1;i<len;i++){
    		left[i] = temp;
    		temp *= nums[i];
    	}
    	for(temp=1,i=len-1;i>=0;i--){
    		right[i] = temp;
    		temp *= nums[i];
    	}    
    	vector<int>v(len);
    	for(i=0;i<len;i++) v[i] = left[i]*right[i];
    	return v;
    }


    vector<int> productExceptSelf(vector<int>& nums) {
    	int len = nums.size();
    	int i,j,temp=1;
    	vector<int>v(len);
    	for(i=0;i<len;i++){
    		v[i] = temp;
    		temp *= nums[i];
    	}
    	for(temp=1,i=len-1;i>=0;i--){
    		v[i] = v[i]*temp;
    		temp *= nums[i];
    	}
    	return v;
    }
};

int main(){
	Solution obj;
	vector<int>v = {1,2,3,4};
	vector<int> result;
	result = obj.productExceptSelf(v);
	for(auto i:result)cout<<i<<" ";cout<<endl;
	return 0;
}