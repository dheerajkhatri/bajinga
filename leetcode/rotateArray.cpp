#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
	void reverse(vector<int>& nums,int start, int end){
		int temp;
		for(int i=start,j=end;i<j;i++,j--){
			temp = nums[i];
			nums[i] = nums[j];
			nums[j] = temp;
		}
	}

    void rotate(vector<int>& nums, int k) {
        int len = nums.size();
        if(!len)return;
        //(ab)-1 = (b)-1(a)-1 --> (b)-1-1(a)-1-1 -->ba
        if(k>nums.size())k=k%len;
        if(k){
        	reverse(nums,0,len-1);
        	reverse(nums,0,k-1);
        	reverse(nums,k,len-1);
        }
    }

    void print(vector<int>nums){
    	for(int i=0;i<nums.size();i++)cout<<nums[i]<<" ";
    	cout<<endl;
    }
};


int main(){
	vector<int>v;
	for(int i=0;i<10;i++)
		v.push_back(i);
	Solution obj;
	obj.print(v);
	obj.rotate(v,20);
	obj.print(v);
	return 0;
}