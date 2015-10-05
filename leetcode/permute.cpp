#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    bool getPermutations(vector<vector<int>>& per,vector<int>&nums,vector<int>&cur,bool *check){
        int n = nums.size();

        if(cur.size()==n){
            per.push_back(cur);
            return true;
        }else{            

            for(int i=0;i<n;i++){
                if(!check[i]){                
                    //check for current element 
                    cur.push_back(nums[i]);
                    check[i] = true;
                    getPermutations(per,nums,cur,check);
                    //backtrack for checking all other answers
                    check[i] = false;
                    cur.erase(cur.begin()+cur.size()-1);
                }
            }    
        }        
    }

    vector<vector<int>> permute(vector<int>& nums) {
        vector<int>temp;
        int siz = nums.size();
        bool *checked;
        checked = new bool[siz];
        for(int k=0;k<siz;k++)checked[k]=false;

        vector<vector<int>> permutations;
        getPermutations(permutations,nums,temp,checked);
        return permutations;
        
    }
    
    void print(vector<vector<int>> v){
        for(int i=0;i<v.size();i++){
            cout<<i+1<<" -->";
            for(int j=0;j<v[i].size();j++){
                cout<<v[i][j]<<" ";
            }
            cout<<endl;
        }
    }
};


int main(){
    Solution obj;
    vector<int>v;
    v.push_back(1);v.push_back(2);v.push_back(3);v.push_back(4);
    vector<vector<int>>ret;
    ret = obj.permute(v);
    obj.print(ret);
    return 0;
}