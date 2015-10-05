#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    vector<string> summaryRanges(vector<int>& nums) {
        vector<string>summary;
        int len = nums.size();
        int cur,next,i=0;        
        if(len==0)return summary;

        do{
        	string s = "";
        	s += to_string(nums[i]);
        	cur = nums[i];
        	bool range = false;

        	i++;
        	while(i<len){
        		next = nums[i];
        		if(next-cur!=1)break;
        		else {cur = next;range=true;i++;}        		
        	}
        	
        	if(range){
        		s += "->";
        		s += to_string(cur);
        	}

        	summary.push_back(s);
        	cur = next;
        }while(i<len);
    }

    void print(vector<string>sum){
    	for(int i=0;i<sum.size();i++)
    		cout<<sum[i]<<" ";
    	cout<<endl;
    }
};

int main(){
	Solution obj;
	vector<int>v;
	vector<string>s;
	v.push_back(-12);v.push_back(-1);v.push_back(0);v.push_back(5);v.push_back(8);v.push_back(11);v.push_back(12);v.push_back(13);v.push_back(15);

	s = obj.summaryRanges(v);
	obj.print(s);
	return 0;
}