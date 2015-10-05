#include <bits/stdc++.h>
using namespace std;

int /*Solution::*/trailingZeroes(int A) {
    int fc=0,ff=5;//five count
    
    while(1){
        if(!A/ff)break;
        fc += A/ff;
        ff *=5;
    }
    return fc;
}

int main(int argc,char*argv[]){
    int val = atoi(argv[1]);
    cout<<trailingZeroes(val)<<endl;
}