#include <bits/stdc++.h>
using namespace std;


class Solution {
public:
    string addBinary(string a, string b) {
        reverse(a.begin(),a.end());
        reverse(b.begin(),b.end());

        int len1 = a.length(), len2 = b.length();
        int carry = 0,count=0;
        string s = "";

        for(int i=0;i<max(len1,len2);i++,count=0){
        	if(i<len1 && (a[i]-'0'==1)) count++;
        	if(i<len2 && (b[i]-'0'==1)) count++;
        	if(carry)count++;

        	if(count==0){
        		s += '0';
        		carry = 0;        		
        	}else if(count ==1){
        		s += '1';
        		carry = 0;        		
        	}else if(count==2){
        		s += '0';
        		carry = 1;
        	}else{
        		s += '1';
        		carry = 1;
        	}
        }
        if(carry) s += '1';
        reverse(s.begin(),s.end());
        return s;
    }
};


int main(){
	Solution obj;
	cout<<obj.addBinary("11","10")<<endl;
	cout<<obj.addBinary("1","100")<<endl;
	cout<<obj.addBinary("0010000000","10")<<endl;
	cout<<obj.addBinary("","")<<endl;
	return 0;
}