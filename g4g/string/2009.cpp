/*
Given a string, print all possible palindromic partitions
*/
#include <iostream>
#include <vector>
#include <map>
#include <string>
#include <algorithm>
using namespace std;

bool isPal(string s){
	int len = s.length();
	if(!len)return 1;
	int i=0,j=len-1;
	while(i<j){
		if(s[i]!=s[j])return false;
		i++;
		j--;
	}
	return true;
}

void solve(string oldstr, string toproc){	
	if(toproc.length()==0){
		cout<<oldstr<<endl;
		return;
	}

	for(int i=1;i<=toproc.length();i++){
		if(isPal(toproc.substr(0,i))){			
			string cur;
			if(oldstr!="")cur = oldstr+" "+toproc.substr(0,i);
			else cur = toproc.substr(0,i);
			solve(cur,toproc.substr(i));
		}
	}
	return;
}

void allPalPartitions(string s){
	string oldstr = "";
	solve(oldstr,s);
}

int main(){
    string str = "nitin";    
    allPalPartitions(str);
    return 0;
}