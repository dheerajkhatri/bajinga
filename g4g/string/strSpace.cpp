#include <bits/stdc++.h>
using namespace std;

void fun(string oldstr, string process){	
	if(oldstr.length())cout<<oldstr+process<<"#"<<endl;	

	int len = process.length();					
	for(int i=1;i<len;i++){							
		string cur = process.substr(0,i);
		cur += ' ';			
		fun(oldstr+cur,process.substr(i));
	}		
}

int main(){
	string s = "abcd";
	string old = "";
	fun(old,s);	
	return 0;
}