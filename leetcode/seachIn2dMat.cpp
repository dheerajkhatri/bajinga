#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    bool searchMatrix(vector<vector<int>>& matrix, int target) {
        int row=matrix.size();
        if(!row)return false;
        int col = matrix[0].size();
        int i,j;
        i = 0;
        j = col-1;

        while(j>=0 && i<row){
            if(matrix[i][j]==target)return true;
            else if(matrix[i][j]<target)i++;
            else j--;
        }
        
        return false;
    }
};

int main(){
    Solution obj;
    vector<int>v = {-5};
    vector<vector<int>>vv;
    vv.push_back(v);

    cout<<obj.searchMatrix(vv,-2)<<endl;
    return 0;
}

