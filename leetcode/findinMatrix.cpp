#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    bool searchMatrix(vector<vector<int>>& matrix, int target) {
        int r=0,start,end,middle;
        int debug=0;
        while(matrix[r][0]<target && r<matrix.size()-1){
            r++;
        }
        if(matrix[r][0]==target)return true;
        if(matrix[r][0]>target && r)r--;
        if(debug)cout<<"now r are "<<r<<endl;
        start=0;end=((matrix[r].size())-1);
        if(debug)cout<<"start and end are "<<start<<" "<<end<<endl;
        while(start<end){
            middle = start+((end-start)/2);
            if(matrix[r][middle]==target)return true;
            else if(matrix[r][middle]>target)end=middle-1;
            else start=middle+1;
        }
        if(start==end && matrix[r][start]==target)return true;
        return false;
    }
};

int main(int argc,char* argv[]){
    Solution obj;
    vector<vector<int>>v;
    vector<int>temp;
    temp.push_back(1);temp.push_back(3);temp.push_back(5);temp.push_back(7);
    v.push_back(temp);temp.clear();

    temp.push_back(10);temp.push_back(11);temp.push_back(16);temp.push_back(20);
    v.push_back(temp);temp.clear();

    temp.push_back(23);temp.push_back(30);temp.push_back(34);temp.push_back(50);
    v.push_back(temp);temp.clear();

    cout<<obj.searchMatrix(v,atoi(argv[1]))<<endl;
    return 0;
}