#include <bits/stdc++.h>
using namespace std;


vector<vector<int> >/* Solution::*/generateMatrix(int A) {
	
	int level=0,total_level = A/2,counter=1;
    int rows,cols;
    int rs,re,cs,ce,row_start,row_end,col_start,col_end;
    vector<vector<int>>mat(A,vector<int>(A));        


    rows=cols=A-1;
    for(level=0;level<total_level;level++){
        rs = row_start = level;cs = col_start=level;
        re = row_end = rows-level; ce = col_end = cols-level;

        while(cs!=ce)          
            mat[rs][cs++] = counter++;            

        while(rs!=re)
            mat[rs++][cs] = counter++;            

        cs = col_start;
        while(ce!=cs)
            mat[re][ce--] = counter++;
            

        rs = row_start;
        while(re!=rs)
            mat[re--][cs] = counter++;            

    }    
    if(A%2) mat[A/2][A/2] = counter;              
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

int main(int argc, char** argv){
    int val = atoi(argv[1]); 
    vector<vector<int>> v(val,vector<int>(val));     
    v = generateMatrix(val);   
    print(v,val) ;
    return 0;
}