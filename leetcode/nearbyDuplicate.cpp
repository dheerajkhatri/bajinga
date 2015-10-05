#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    
    bool containsNearbyDuplicate(vector<int>& nums, int k) {
        int prev,len = nums.size();
        unordered_map<int,int>mm;
                    
        for(int i=0;i<len;i++){
            if(mm.find(nums[i])==mm.end()){
                mm[nums[i]] = i;
            }else{
                prev = mm[nums[i]];
                if(i-prev<=k)return true;
                mm[nums[i]] = i;
            }
        }        
        
        return false;
    }
};


int main(int argc,char*argv[]){
    Solution obj;
    vector<int> num;
    num.push_back(1);num.push_back(2);num.push_back(3);num.push_back(2);num.push_back(3);num.push_back(1); 
    cout<<obj.containsNearbyDuplicate(num,atoi(argv[1]))<<endl;    
    return 0;
}