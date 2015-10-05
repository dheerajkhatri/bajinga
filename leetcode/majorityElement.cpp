#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
	bool confirm(vector<int> &nums,int num){
		int len = nums.size();
		int counter = 0;
		for(int i=0;i<len;i++){
			if(nums[i]==num)counter++;
		}
		if(counter > floor(len)/2)
			return true;

		return false;
	}

    int majorityElement(vector<int>& nums) {
        int cur = nums[0]; //which numner
        int curcounter=1,len=nums.size(); //count of cur number
        int inf = numeric_limits<int>::min();

        for(int i=1;i<len;i++){
        	if(cur == nums[i])curcounter++;        	
        	else if(cur == inf){
        		cur = nums[i];
        		curcounter++;
        	} else{
        		if(curcounter==1) cur = inf;        		
        		curcounter--;
        	}        	
        }

        //cout<<"cur counter "<<curcounter<<"cur "<<cur<<endl;
        if(confirm(nums,cur))return cur;
        else return -1;
    }
};

int main(){

	vector<int>myvec;
	myvec.push_back(1);
	myvec.push_back(3);
	myvec.push_back(4);
	myvec.push_back(2);
	myvec.push_back(3);
	myvec.push_back(2);
	myvec.push_back(3);
	myvec.push_back(3);
	myvec.push_back(4);
	myvec.push_back(3);
	myvec.push_back(4);
	myvec.push_back(3);
	myvec.push_back(3);
	myvec.push_back(3);

	Solution obj;
	cout<<obj.majorityElement(myvec)<<endl;
	return 0;
}