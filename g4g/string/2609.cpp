/*
Check if two given strings are isomorphic to each other
*/
#include <iostream>
#include <vector>
#include <map>
#include <string>
#include <algorithm>
using namespace std;


bool areIsomorphic(string s1, string s2){
	int len1,len2;
	len1 = s1.length();
	len2 = s2.length();

	if(len1!=len2)return false;

	map<char,char>mm;
	for(int i=0;i<len1;i++){
		auto it = mm.find(s1[i]);
		if(it==mm.end())mm[s1[i]] = s2[i];		
		else if(it->second != s2[i])return false;	
	}
	return true;
}


int main(){
	cout << areIsomorphic("aab", "xxy") << endl;
	cout << areIsomorphic("aab", "xyz") << endl;
	cout << areIsomorphic("aab","czz") << endl;
	cout << areIsomorphic("aab","xxx") << endl;
   return 0;
}