#include <bits/stdc++.h>
using namespace std;


class Solution {
public:
    bool isPowerOfTwo(int n) {
        if(n<=0)return false;
        //check if apart from first any other digit is 1 in binary
        while(n>1){
        	if(n%2)return false;
        	n /= 2;
        }        
        return true;
    }
};

int main(int argc,char* argv[]){
	Solution obj;
	cout<<obj.isPowerOfTwo(stoi(argv[1]))<<endl;
	return 0;
}