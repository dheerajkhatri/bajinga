#include<bits/stdc++.h>
using namespace std;

int main(){
	int t,q1,q2,m,um,len;
	string s1,s2;
	cin>>t;
	while(t--){
		cin>>s1>>s2;
		m = q1 = q2 = um = 0;
		len = s1.length();
		
		for(int i=0;i<len;i++){

			if(s1[i]!='?' && s2[i]!='?' && s1[i]!=s2[i])um++;

			if(s1[i]=='?' || s2[i]=='?' || s1[i]!=s2[i])m++;
		}

		cout<<um<<" "<<m<<endl;

	}
	return 0;
}