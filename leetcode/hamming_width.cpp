#include <bits/stdc++.h>
using namespace std;
#include <stdint.h>

class Solution {
public:
    int hammingWeight(uint32_t n) {
  		long long num = n;
  		int count = 0;
  		while(num){
  			if(num%2)count++;
  			num/=2;
  		}
  		return count;
    }
};



int main(){
	Solution obj;
	cout<<obj.hammingWeight(11)<<endl;
	cout<<obj.hammingWeight(0)<<endl;
	cout<<obj.hammingWeight(10)<<endl;
	cout<<obj.hammingWeight(1111111111)<<endl;
	return 0;
}