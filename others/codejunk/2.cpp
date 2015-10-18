#include <bits/stdc++.h>
using namespace std;

int findnum(string s){
	bool neg = false;
	if(s[0]=='-')neg=true;
	s = s.substr(2);		
	int val = atoi(s.c_str());
	return neg ? -val:val;
}

void print(set<int>s){
	cout<<"cur set is -->";
	for(auto it:s)cout<<it<<" ";
	cout<<endl;
}

int main(){
	int n,num,outer_remain=0,maxspace=0;
	cin>>n;
	set<int>si;	
	set<int>::iterator it;
	cin.ignore(); 		

	for(int i=0;i<n;i++){
		string str;		
		getline(cin, str);	
		num = findnum(str);		
		if(num>0){
			si.insert(num);
			outer_remain++;
			if(maxspace<outer_remain)maxspace = outer_remain;
		} else {
			it = si.find(-num);
			if(it!=si.end()){
				si.erase(it);
				outer_remain--;
			}else{
				maxspace++;
			}
		}
		//print(si);
		//cout<<"outer_remain "<<outer_remain<<" maxspace "<<maxspace<<endl;
	}	
	cout<<maxspace<<endl;

	return 0;
}