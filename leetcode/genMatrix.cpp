#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    vector<vector<int>> generateMatrix(int n) {        
        int level=0,total_level = n/2,counter=1;
        int rows,cols;
        int rs,re,cs,ce,row_start,row_end,col_start,col_end;
        int debug=0;
        vector<vector<int>>mat(n,vector<int>(n));        

        if(debug)cout<<"#levels "<<total_level<<endl;
        //cout<<"here"<<endl;
        rows=cols=n-1;
        for(level=0;level<total_level;level++){
            rs = row_start = level;cs = col_start=level;
            re = row_end = rows-level; ce = col_end = cols-level;

            while(cs!=ce){
                if(debug)cout<<rs<<" "<<cs<<" "<<counter<<endl;
                mat[rs][cs] = counter++;
                cs++;
            }

            while(rs!=re){
                if(debug)cout<<rs<<" "<<cs<<" "<<counter<<endl;
                mat[rs][cs] = counter++;
                rs++;
            }

            cs = col_start;
            while(ce!=cs){
                if(debug)cout<<re<<" "<<ce<<" "<<counter<<endl;
                mat[re][ce] = counter++;
                ce--;
            }

            rs = row_start;
            while(re!=rs){
                if(debug)cout<<re<<" "<<cs<<" "<<counter<<endl;
                mat[re][cs] = counter++;
                re--;
            }            

        }
        
        if(n%2) {

            mat[n/2][n/2] = counter;
            if(debug)cout<<"pushed to "<<int(n/2)<<" "<<int(n/2)<<" "<<counter<<endl;
        }

        if(debug)cout<<"no problem"<<endl;
        if(debug)print(mat,n);
        return(mat);
    }

    void print(vector<vector<int>> v, int n){
        for(int i=0;i<n;i++){
            for(int j=0;j<n;j++){
                cout<<v[i][j]<<" ";
            }
            cout<<endl;
        }
    }
};

int main(int argc, char** argv){
    int val = atoi(argv[1]);
    Solution obj;
    vector<vector<int>> v(val,vector<int>(val));     
    v = obj.generateMatrix(val);   
    obj.print(v,val) ;
    return 0;
}