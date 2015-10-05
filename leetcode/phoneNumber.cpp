#include <bits/stdc++.h>
using namespace std;

void print(vector<string>result){
    for(auto it:result)cout<<it<<" ";cout<<endl;
}

void mapping(map<int,vector<char>>&mm){	
	char start = 'a';

	for(int i=2;i<=6;i++){
		vector<char>c;
		for(int count=0;count<3;count++,start++){
			c.push_back(start);			
		}
		mm[i] = c;		
	}
	mm[0] = {'0'}; mm[1] = {'1'}; mm[7] = {'p','q','r','s'}; mm[8] = {'t','u','v'}; mm[9] = {'w','x','y','z'};
}

void letterUtil( map<int,vector<char>> mm, string &que, vector<string> &result, string &cur, int iter){	
	int len = que.length();

	if(iter==len){
		result.push_back(cur);
	} else{				
		int num = que[iter]-'0';		
		vector<char> tempchr = mm[num];				

		for(int i = 0;i <tempchr.size() ; i++){						
			cur += tempchr[i];			
			letterUtil(mm,que,result,cur,iter+1);
			cur.erase(cur.length()-1);
		}			
	}
	
}

class Solution {
public:
    vector<string> letterCombinations(string digits) {
  		int i,len = digits.length();
  		map<int,vector<char>>mm;
  		mapping(mm);  		
  		string ans = "";
  		vector<string>result;
  		letterUtil(mm,digits,result,ans,0);
  		return result;
    }
};


int main(){
	string que = "23";
	Solution obj;
	vector<string>re = obj.letterCombinations(que);
	print(re);
	return 0;
}