#include <bits/stdc++.h>
using namespace std;



class Solution {
public:
    bool containsDuplicate2(vector<int>& nums) {
        int prev,cur,val = 1;
        sort(nums.begin(),nums.end());
        if(nums.size()==0) return false;
        vector<int> ::iterator it = nums.begin();        
        prev = *it;        
        it++;
        for(;it!=nums.end();it++){
        	cur = *it;
        	if(prev==cur)return true;
        	prev = cur;
        }
    }

    bool containsDuplicate(vector<int>& nums){
    	unordered_set<int> uset; //average O(1)  time in insertion worst case O(n) but in set always log(n) like tree
    	for(int i=0;i<nums.size();i++){
    		if(!uset.insert(nums[i]).second) return true;
    	}
    	return false;
    }
};


int main(){
	Solution obj;
	vector<int> lol;
	cout<<obj.containsDuplicate(lol)<<endl;
	lol.push_back(5);
	lol.push_back(7);
	lol.push_back(6);
	lol.push_back(8);
	lol.push_back(5);
	cout<<obj.containsDuplicate(lol)<<endl;
}