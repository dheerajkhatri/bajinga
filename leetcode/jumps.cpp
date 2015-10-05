#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    bool canJump(vector<int>& nums) {
        int max = nums[0];
        int n = nums.size();

        for(int i=1;i<=max && max<n-1;i++) {
            if(nums[i]+i > max) {
                max = nums[i]+i;
            }
        }
        return max>n-2;
    }
};

int main(){
    Solution obj;
    vector<int>v = {5,9,3,2,1,0,2,3,3,1,0,0};
    cout<<obj.canJump(v)<<endl; //true
    v = {2,3,1,1,4}; //true
    cout<<obj.canJump(v)<<endl;
    v = {3,2,1,0,4}; //false
    cout<<obj.canJump(v)<<endl;
    v = {3,0,0,2,3,0,1}; //true
    cout<<obj.canJump(v)<<endl;
    v = {2,8,0,0,0}; //true
    cout<<obj.canJump(v)<<endl;
    return 0;
}