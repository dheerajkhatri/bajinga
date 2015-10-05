#include <bits/stdc++.h>
using namespace std;


class Solution {
public:
	string convert(int n) {
		int num = n;
        int cur;
        string s = ""; 
        while(num>26){        	
        	cur = num%26;        	
        	s += cur+64;        	
        	num = num/26;        	        	       
        }
        if(num) s += num+64; 
        reverse(s.begin(),s.end());
        return s;
	}


    string convertToTitle(int n) {        
        if(n==26)return "Z";
        if(n%26==0){        	
        	string s = convert(n-1);        	
        	int len = s.length();
        	s[len-1] = s[len-1]+1;
        	return s;
        }else{        	
        	return convert(n);
        }        
    }
};


int main(){
	Solution obj;

	/*cout<<obj.convertToTitle(1)<<endl;
	cout<<obj.convertToTitle(2)<<endl;
	cout<<obj.convertToTitle(26)<<endl;
	cout<<obj.convertToTitle(27)<<endl;
	cout<<obj.convertToTitle(51)<<endl;*/
	cout<<obj.convertToTitle(52)<<endl;
	//cout<<obj.convertToTitle(53)<<endl;
	//cout<<obj.convertToTitle(55)<<endl;
	cout<<obj.convertToTitle(78)<<endl;
	cout<<obj.convertToTitle(704)<<endl;
	cout<<obj.convertToTitle(728)<<endl;
	return 0;
}