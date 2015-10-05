#include <bits/stdc++.h>
using namespace std;

void prt(vector<int>&v){
    for(auto it:v)cout<<it<<" ";
    cout<<endl;
}

void print(vector<vector<int>>result){
    for(int i=0;i<result.size();i++){
        for(int j=0;j<result[i].size();j++){
            cout<<result[i][j]<<" ";
        }
        cout<<endl;
    }
}

void genUtil(vector<int>&nums,vector<int>&cur,vector<vector<int>>&result,int iter){
    int i,len = nums.size(),curlen = cur.size();
    
    result.push_back(cur);
    
    
    if(iter<len){        
        for(i=iter;i<len;i++){
            cur.push_back(nums[i]);
            genUtil(nums,cur,result,i+1);                        
            cur.erase(cur.end()-1);
        }
    }    
}

class Solution {
public:
    vector<vector<int>> subsets(vector<int>& nums) {
        int i,j,len=nums.size();
        vector<vector<int>>result;        
        vector<int>cur;
        result.push_back(cur);
        sort(nums.begin(),nums.end());

        for(i=0;i<len;i++){
            cur.push_back(nums[i]);            
            genUtil(nums,cur,result,i+1);            
            cur.erase(cur.begin(),cur.end());
        }        
        return result;
    }
};

int main(){
    Solution obj;
    //to overflow the computer stack run this programme for v size>=20
    vector<int>v={1,2,3,4,5,6,7,8,9,10,11,12,13,14,15};
    vector<vector<int>>res = obj.subsets(v);
    print(res);
    return 0;
}