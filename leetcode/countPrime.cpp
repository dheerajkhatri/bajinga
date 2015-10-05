#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    int countPrimes(int n) {
        if(n<=2)return 0;
        
        bool* isprime;
        isprime = new bool[n+1];

        memset(isprime,1,n+1);
        int count = 0;

        for(int i=2;i<=sqrt(n);i++){
        	if(isprime[i]){
        		for(int j=i*i;j<=n;j+=i)
        			isprime[j]=0;
        	}
        }

        for(int k=2;k<n;k++){
        	if(isprime[k])count++;
        }
        return count;
    }    
};

int main(int argc,char*argv[]){
    Solution obj;
    cout<<obj.countPrimes(atoi(argv[1]))<<endl;
    return 0;
}