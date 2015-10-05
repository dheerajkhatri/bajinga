#include <bits/stdc++.h>
using namespace std;

int c(int curval, int prevhealth){
    if(curval==0)return prevhealth;

    if(curval>0){
        if(curval >= prevhealth)
            return 1;
        else
            return prevhealth-curval;
    }

    return prevhealth-curval;
}

//dp[i][j] - min health at this position so that the knight can survive at bottom-righ

int dungen(vector<vector<int>>& d){
    int row = d.size();
    int col = d[0].size();

    vector<vector<int>>dp(row,vector<int>(col));

    if(d[row-1][col-1]>=0){
        dp[row-1][col-1] = 1;
    }else{
        dp[row-1][col-1] = 1-d[row-1][col-1];
    }

    for(int i=row-2;i>=0;i--){
        dp[i][col-1] = c(d[i][col-1],dp[i+1][col-1]);
    }

    for(int j=col-2;j>=0;j--){
        dp[row-1][j] = c(d[row-1][j],dp[row-1][j+1]);
    }

    for(int i=row-2;i>=0;i--){
        for(int j=col-2;j>=0;j--){
            dp[i][j] = min( c(d[i][j],dp[i+1][j]), c(d[i][j],dp[i][j+1]) );
        }
    }

    return dp[0][0];
}

int main(){
    

}