/*Given an array and a value, remove all instances of that value in place and return the new length.

The order of elements can be changed. It doesn't matter what you leave beyond the new length. */

#include <bits/stdc++.h>
using namespace std;

class Solution {
public:	

    int removeElement(vector<int>& nums, int val) {
    	int start,end,len=nums.size();
    	if(!len)return 0;

    	if(len==1){
    		if(nums[0]==val)return 0;
    		else return 1;
    	}

    	start = 0;end = nums.size()-1;

    	while(1){
    		//cout<<"end and start are "<<start<<" "<<end<<endl;
    		if(nums[start]==val){
    		
    			while(end>=start && nums[end]==val){
    				end--;
    			}
    			if(end>start) {
    				nums[start] = nums[end];
    				end--;    				
    			}else return start;

    		}
    		start++;
    		if(end<start) return start;
    		else if(end==start) {
    			if(nums[end]!=val)return start+1;
    			else return start;
    		}
    	}
    	
    }
};

int main(){
	vector<int> myvec;
	//myvec.push_back(2);myvec.push_back(3);myvec.push_back(2);myvec.push_back(1);myvec.push_back(2);myvec.push_back(7);
	myvec.push_back(1);myvec.push_back(2);myvec.push_back(1);myvec.push_back(1);
	myvec.push_back(1);myvec.push_back(1);myvec.push_back(2);
	Solution obj;
	cout<<obj.removeElement(myvec,5)<<endl;
	return 0;
}