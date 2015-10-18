#include <bits/stdc++.h>
using namespace std;

vector<int> /*Solution::*/allFactors(int A) {
    int i,sn = sqrt(A);
    vector<int> factors;
    if(A<1)return factors;

    for(i=1;i<=sn;i++){
        if(!(A%i)){
            factors.push_back(i);
            factors.push_back(A/factors[i]);
        }
    }    
    sort(factors.begin(),factors.end());
    return factors;
}

int main(int argc,char*argv[]){
    int val = atoi(argv[1]);
    vector<int>v = allFactors(val);
    for(auto it:v)cout<<it<<" ";cout<<endl;
    return 0;
}