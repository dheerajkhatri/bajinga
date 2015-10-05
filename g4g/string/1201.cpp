/*Find if a given string can be represented from a substring by iterating the substring “n” times*/
#include <iostream>
#include <vector>
#include <map>
#include <string>
#include <algorithm>
using namespace std;

vector<int> computeLPS(string pattern){
	int len = pattern.length();	
	vector<int>lps;
	if(!len)return lps;
	lps.resize(len);
	int i=1,maxmatch=0;
	lps[0] = 0;

	while(i<len){		
		//compute lps[i]
		if(pattern[i]==pattern[maxmatch]){	
			maxmatch++;
			lps[i] = maxmatch;
			i++;
		}else{			
			if(maxmatch){			
				maxmatch = lps[maxmatch-1];
			}else{				
				lps[i] = 0;
				i++;
			}
		}
	}	
	return lps;
}

bool isRepeat(string s){
	vector<int>lps = computeLPS(s);
	int len = s.length();
	if(len && len%(len-lps[len-1])==0)return true;
	return false;
}

int main(){
   vector<string>s = {"ABCABC", "ABABAB", "ABCDABCD", "GEEKSFORGEEKS","GEEKGEEK", "AAAACAAAAC", "ABCDABC"};   
	for (int i=0; i<s.size(); i++){
		cout << s[i] <<" -->";
		isRepeat(s[i])? cout<< "True\n" : cout << "False\n";
	}
   return 0;
}