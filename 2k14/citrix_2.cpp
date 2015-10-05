#include <bits/stdc++.h>
using namespace std;

bool perm(string& s1, string& s2){
	vector <int> vec1(256,0),vec2(256,0);
	for(int i=0;i<s1.size();i++)
		vec1[s1[i]]++;	

	for(int i=0;i<s2.size();i++)
		vec2[s2[i]]++;

	for(int i=0;i<256;i++)
		if(vec1[i]!=vec2[i])return 0;	

	return 1;
}

int main(){
	string s1 = "aabcd";
	string s2 = "acabd";

	string s3 = "khatri";
	string s4 = "tharki";

	string s5 = "khatrii";
	string s6 = "tharkit";

	cout<<perm(s1,s2)<<endl;
	cout<<perm(s3,s4)<<endl;
	cout<<perm(s5,s6)<<endl;
}