#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    string longestCommonPrefix(vector<string>& strs) {
   		if(!strs.size())return "";
   		else{
   			int len = strs.size();
   			int pos = 0;

   			while(pos<strs[0].length()){
   				char prev = (strs[0])[pos];
   				for(int k=1;k<len;k++){
   					if((strs[k])[pos]!=prev)return (strs[0]).substr(0,pos);
   				}
   				pos++;
   			}
   			return (strs[0]).substr(0,pos);
   		}
	}
};

int main(){
	Solution obj;
	vector<string>v;
	v.push_back("flow");v.push_back("floets");v.push_back("floo");
	cout<<obj.longestCommonPrefix(v)<<endl;
	return 0;
}