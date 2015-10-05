#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    int titleToNumber(string s) {
        string rev = s;
        reverse(rev.begin(),rev.end());
        int len = s.length();
        int multiplier = 1;
        int value = 0;

        for(int i=0;i<len;i++){
        	value += (rev[i]-64)*multiplier;
        	multiplier *= 26;
        }
        return value;
    }
};

int main(){
	Solution obj;
	/*cout<<obj.titleToNumber("A")<<endl;
	cout<<obj.titleToNumber("B")<<endl;
	cout<<obj.titleToNumber("AA")<<endl;
	cout<<obj.titleToNumber("AB")<<endl;
	cout<<obj.titleToNumber("BA")<<endl;*/
	cout<<obj.titleToNumber("DZ")<<endl;
	cout<<obj.titleToNumber("AAZ")<<endl;
	return 0;
}

