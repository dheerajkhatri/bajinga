#include <bits/stdc++.h>
using namespace std;

vector<long long>facts = {0,1,2,6,24,120,720,5040,40320,362880,628791,916683,163,2119,29666,
			444990,119819,36917,664506,625578,511524,741974,323380,437719,505226,630614};

void printmap(map<char,int>&mm){
	for(auto it:mm)cout<<it.first<<" ";
	cout<<endl;
}

int ranks(string& s){
	map<char,int>mm;
	for(int i=0;i<s.length();i++){
		mm[s[i]] = 1;
	}	

	auto start = mm.begin();

	int mod = 1000003 , len = s.length();
	long long curcount = 0, prevnum=0;	

	for(int i=0;i<len;i++){		
		auto it = mm.find(s[i]);
		long long dist = distance(mm.begin(),it);				
		mm.erase(it);		
		curcount = ((curcount%1000003)+(dist*facts[len-1-i])%1000003)%1000003;		
	}

	return int(curcount%1000003)+1;
}


int main(){
	string s;
	cin>>s;
	cout<<ranks(s)<<endl;
	return 0;
}