#include <bits/stdc++.h>
using namespace std;

bool firstBigger(const string s1,const string s2){
	string sf = s1+s2;
	string ss = s2+s1;
	return sf>ss;
}


int main(){
	string s1 = "3";
	string s2 = "30";
	string s3 = "34";
	string s4 = "5";
	string s5 = "9";
	
	vector<string>s;
	s.push_back(s1);s.push_back(s2);s.push_back(s3);s.push_back(s4);s.push_back(s5);
	sort(s.begin(),s.end(),firstBigger);
	for(int i=0;i<5;i++)cout<<s[i];

	return 0;
}