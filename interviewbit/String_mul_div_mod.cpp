#include <bits/stdc++.h>
using namespace std;


int mod(string& s, int mod){
    int number = 0;
    for(int i = 0; i < s.length(); i++) {
        number=(number*10+(s[i]-'0'));   //can overflow
        number%=mod;
    }
    return number;
}

//multiplier*9 > INT_MAX then can overflow
string prodcut(string s, int multiplier){
	string result = "";
	int i,j,k,len=s.length(),carry=0,num,quot,cur;

	for(i=len-1;i>=0;i--){
		cur = s[i]-'0';		
		num = cur*multiplier;  //can overflow
		num += carry;		
		result += (num%10)+'0';
		carry = num/10;		
	}
	string carrystr = to_string(carry);
	reverse(carrystr.begin(),carrystr.end());

	if(carry)result+=carrystr;
	reverse(result.begin(),result.end());
	return result;
}

//divisr divides s completely
//if rem*10+9 > INT_MAX then overflow will occur
string divide(string& s, int divisr){
	int cur,i,quot,rem=0,dividend,len=s.length(),k;
	string result = "";

	for(i=0;i<s.length();i++){
		cur = s[i]-'0';
		dividend = rem*10+cur; //can overflow
		quot = dividend/divisr;
		rem = dividend%divisr;
		result += quot+'0';
	}

	for(k=0;result[k]=='0';k++){}	
	result = result.substr(k,len);

	return result;
}


int main(int argc,char*argv[]){
	string s = "128888888888";
	int divisr=11111,multiplier=11111;	
	
	cout<<s<<"/"<<divisr<<"->"<<divide(s,divisr)<<endl;
	string result = divide(s,divisr);

	cout<<result<<"*"<<multiplier<<"->"<<prodcut(result,multiplier)<<endl;
	return 0;
}