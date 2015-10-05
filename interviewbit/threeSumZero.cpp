#include <bits/stdc++.h>
using namespace std;

void print(vector<vector<int>>A){
    for(int i=0;i<A.size();i++){
        for(int j=0;j<A[i].size();j++)
            cout<<A[i][j]<<" ";
        cout<<endl;
    }
}

vector<vector<int> >/* Solution::*/threeSum(vector<int> &A) {
    
    sort(A.begin(),A.end());
    set<vector<int>>s;
    long long i,j,k,len=A.size(),tofind;
    
    for(i=0;i<len-2;i++){
        tofind = -A[i];
        for(j=i+1,k=len-1; k>j ;){
            if(A[j]+A[k]==tofind) {
                vector<int>v;
                v.push_back(A[i]); v.push_back(A[j]); v.push_back(A[k]);
                //cout<<A[i]<<" "<<A[j]<<" "<<A[k]<<endl;
                s.insert(v);
                j++;
                k--;
            }else if(A[j]+A[k]>tofind) k--;
             else j++;
        }            
    }

    vector<vector<int>>V;
    for(auto it:s){
        V.push_back(it);
    }
    return V;
}

int main(){
    vector<int>v={1, -4, 0, 0, 5, -5, 1, 0, -2, 4, -4, 1, -1, -4, 3, 4, -1, -1, -3};
    vector<vector<int>>ans = threeSum(v);
    print(ans);
}