#include <bits/stdc++.h>
#include "print.h"
using namespace std;


class Solution {
public:
	int debug = 0;
	Print p;

	set<vector<int>> subsetHelper(vector<int>orignialSet){	
		if(debug){cout<<"original set is ";p.print(orignialSet);}
		set<vector<int>> powerSet;
		if(!orignialSet.size()){
			vector<int>temp;
			powerSet.insert(temp);
			return powerSet;
		}
		
		int head = orignialSet[0];		
		vector<int> rest(orignialSet.begin()+1,orignialSet.end());
		if(debug){cout<<"rest set is "; p.print(rest);}

		set<vector<int>> restPowerSet = subsetHelper(rest);		
		if(debug){cout<<"rest power set is "<<endl; p.print(restPowerSet);}

		for(set<vector<int>>::iterator it=restPowerSet.begin();it!=restPowerSet.end();it++){
			vector<int> curRestPowerSet = *it;
			powerSet.insert(curRestPowerSet);
			curRestPowerSet.push_back(head);
			sort(curRestPowerSet.begin(),curRestPowerSet.end());
			powerSet.insert(curRestPowerSet);					
		}
		return powerSet;
	}

    vector<vector<int>> subsetsWithDup(vector<int>& nums) {
  		set<vector<int>>result = subsetHelper(nums);
  		vector<vector<int>> vv;
  		for(auto it:result){
  			vv.push_back(it);
  		}
  		return vv;
    }
};



int main(){
	vector<int> s = {2,2,1,3,3,3};
	Solution obj;
	Print pp;
	vector<vector<int>> finalset = obj.subsetsWithDup(s);	
	pp.print(finalset);
	return 0;
}