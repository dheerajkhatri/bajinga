#include <bits/stdc++.h>
using namespace std;


class Solution {
public:
    void reverseWords(string &s) {
    	if(s.length()<=1 && s[0]!=' ')return;
		reverse(s.begin(),s.end());
		int i,start,end,len=s.length(),ss,se;

		for(i=0;i<s.length();){
			while(i<s.length() && s[i]==' ')i++;
			start = i++;
			while(i<s.length() && s[i]!=' ')i++;
			end = i;
			reverse(s.begin()+start,s.begin()+end);
			i++;
			ss = i;
			while(i<s.length() && s[i]==' ')i++;
			se = i;
			if(ss!=se){
				s.erase(s.begin()+ss,s.begin()+se);
				i -= se-ss;
			}
		}

		for(i=0;i<s.length();i++) if(s[i]!=' ')break;		
		s = s.substr(i,s.length()-i);	

		for(i=s.length()-1;i>=0;i--) if(s[i]!=' ')break;				
		s = s.substr(0,i+1);
    }
};


int main(){
	Solution obj;
	string s = "  the sky i s the bl ue   ";
	obj.reverseWords(s);cout<<s<<"!!!"<<endl;
	s = "a"; obj.reverseWords(s);cout<<s<<"!!!"<<endl;
	s = "  "; obj.reverseWords(s);cout<<s<<"!!!"<<endl;
	s = "  a fsad "; obj.reverseWords(s);cout<<s<<"!!!"<<endl;
	s = "  a b "; obj.reverseWords(s);cout<<s<<"!!!"<<endl;
	s = "  a   b "; obj.reverseWords(s);cout<<s<<"!!!"<<endl;
	s = "   a   b "; obj.reverseWords(s);cout<<s<<"!!!"<<endl;	
	return 0;
}