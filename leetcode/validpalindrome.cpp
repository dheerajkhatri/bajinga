#include <bits/stdc++.h>
using namespace std;

class Solution {
public:	

    bool isPalindrome(string s) {
       if(s.length()==0) return true;
       int start = 0, end = s.length()-1;

    	while(start<end){
    		//cout<<"start and end are "<<start<<" "<<end<<endl;
      		if(!isalnum(s[start]))start++;
      		else if(!isalnum(s[end]))end--;
      		else if(isalpha(s[start]) && isalpha(s[end])){
      			if(toupper(s[start])!=toupper(s[end]))return false;
      			else {start++;end--;}
      		}else if(s[start]==s[end]){
      			start++;end--;
      		}else return false;
    	}

  		return true;
    }
};

int main(){
	Solution obj;
	cout<<obj.isPalindrome("11;;;;1A man, a plan, a can;;;;;;;al: Panama  111;;;;;;;;;")<<endl;
	cout<<obj.isPalindrome("race a car")<<endl;
	return 0;
}