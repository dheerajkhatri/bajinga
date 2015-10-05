#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    uint32_t reverseBits(uint32_t n) {
  		string binary = bitset<32>(n).to_string();
  		string revstring = binary;
  		reverse(revstring.begin(),revstring.end());
  		int revint = bitset<32>(revstring).to_ulong();
  		return revint;
    }
};


int main(int argc, char* argv[]){
	Solution obj;
	cout<<obj.reverseBits(atoi(argv[1]))<<endl;
	return 0;
}