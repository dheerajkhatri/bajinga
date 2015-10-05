/*VERY TRICKY QUESTION
Transform One String to Another using Minimum Number of Given Operation*/
#include <iostream>
#include <vector>
#include <map>
#include <string>
#include <algorithm>
using namespace std;

int minOps(string s1, string s2){
	int n = s1.length();
	int m = s2.length();
	if(m!=n || !n)return -1;
	vector<int>v(26,0);

	for(int i=0;i<n;i++){
		v[s1[i]-'A']++;
	}
	for(int i=0;i<m;i++){
		v[s2[i]-'A']--;
	}
	for(int i=0;i<26;i++){
		if(v[i]!=0)return -1;
	}

	int i,j,count=0;
	for(i=j=n-1;i>=0;){
		if(s1[i]==s2[j]){
			i--;
			j--;
		}else{
			while(i>=0 && s2[j]!=s1[i]){
				i--;
				count++;
			}
		}
	}
	return count;
}

int main(){
    cout << "Minimum number of operations required is " << minOps("EACBD", "EABCD")<<endl;
    cout << "Minimum number of operations required is " << minOps("BECBD", "EBBCD")<<endl;
    cout << "Minimum number of operations required is " << minOps("BAB", "BAB")<<endl;
    return 0;
}