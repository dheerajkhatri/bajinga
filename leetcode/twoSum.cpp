#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    vector<int> twoSum(vector<int>& nums, int target) {
        unordered_map<int,int>mm;
        int len = nums.size();
        vector<int>ret;

        for(int i=0;i<len;i++){            
            unordered_map<int,int>::iterator it = mm.find(target-nums[i]);

            if(it!=mm.end()){
                ret.push_back((it->second)+1);
                ret.push_back(i+1);           
                return ret;     
            }else{
                mm.insert({nums[i],i});
            }
        }
        return ret;      
    }
};

int main(){
    Solution obj;
    vector<int>v = {14,2,7,11,15,-1,0};
    vector<int>res = obj.twoSum(v,14);
    cout<<res[0]<<" "<<res[1]<<endl;
    return 0;
}