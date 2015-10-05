#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    int removeDuplicates(vector<int>& nums) {
        if(nums.size()==0)return 0;
        int len = nums.size();
        int prev = nums[0],count=1;        
        
        for(int i=1;i<len;i++){
        	if(prev==nums[i])continue;
        	else{
        		nums[count] = nums[i];
        		count++;
        		prev = nums[i];
        	}
        }

        return count;
    }

    void print(vector<int>v){
    	for(int i=0;i<v.size();i++){
    		cout<<v[i]<<" ";
    	}
    	cout<<endl;
    }
};

int main(){
	Solution obj;
	vector<int>v;
	v.push_back(1);v.push_back(2);v.push_back(2);//v.push_back(2);v.push_back(3);
	cout<<obj.removeDuplicates(v)<<endl;
	obj.print(v);
	return 0;
}