#include <bits/stdc++.h>
using namespace std;


void genSub(vector<vector<int>>&ans, vector<int>&nums,vector<int>& cur,int pos){
    int len = nums.size(),curlen=cur.size();
    ans.push_back(cur);
    
    for(int i=pos;i<len;i++){
        cur.push_back(nums[pos]);
        genSub(ans,nums,cur,pos+1);
        cur.erase(cur.end()-1);
    }
    
    if(i==pos)cur.erase(cur.end()-1);
}

vector<vector<int> > Solution::subsets(vector<int> &A) {
    vector<vector<int>>vv;
    vector<int>cur;
    sort(A.begin(),A.end());
    genSub(vv,A,cur,0);
    return vv;
}
