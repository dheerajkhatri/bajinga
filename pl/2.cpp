#include <bits/stdc++.h>
using namespace std;

int main(){
	int t,i,j,len;
	cin>>t;
	while(t--){
		string s;
		cin>>s;
		int len = s.length();		
		vector<int>p(len-1);
		for(i=0;i<len-1;i++){
			p[i] = abs(s[i+1]-s[i]);
		}

		for(i=0,j=len-2;i<=j;i++,j--){
			if(p[i]!=p[j]){
				cout<<"Not Funny"<<endl;
				break;
			}
		}
		if(i>j)cout<<"Funny"<<endl;
	}
	return 0;
}