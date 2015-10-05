#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
	map<int,string> mymap = {{1,"11"},{2,"12"},{3,"13"},
							{11,"21"},{22,"22"},{33,"23"},
							{111,"31"},{222,"32"},{333,"33"}};

    string countAndSay(int n) {
		string cur = "1";
		if(n==1)return final;				

		for(int i=2;i<=n;i++){
			string final = "";
			for(int j=0;j<cur.length();j++){
				//get next string in final
				char curnum = cur[j];
				while
			}
			cur = "";
			cur = final;
		}
		return cur;
};

int main(){
	Solution obj;
	for(int i=1;i<=25;i++){
		cout<<obj.countAndSay(i)<<endl;
	}
	return 0;
}
