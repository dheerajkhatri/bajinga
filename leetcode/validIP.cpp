#include <bits/stdc++.h>
using namespace std;

class Solution{
	public:

	bool validPart(string s){
		int num = stoi(s);
		if(num>255 || num<0)return false;

		if(s.length()>1){
			if(num==0) return false;
			else if(num && s[0]=='0')return false;
		}

		return true;
	}

    vector<string> restoreIpAddresses(string s) {
        int len = s.length();
        int debug = 0;
        vector<string>validIP;

        
        for(int i=0;i<=len-4;i++){        	

        	string first = s.substr(0,i+1);
        	if(i>=3 || !validPart(first))continue;
        	if(debug)cout<<"first "<<first<<endl;

        	for(int j=i+1;j<=len-3;j++){
        	
        		string second = s.substr(i+1,j-i);
        		if(j-i>3 || !validPart(second))continue;
        		if(debug)cout<<"second "<<second<<endl;

        		for(int k=j+1;k<=len-2;k++){
        			
        			string third = s.substr(j+1,k-j);        			
        			if(k-j>3 || !validPart(third))continue;
        			if(debug)cout<<"third "<<third<<endl;

        			int len4 = len-k-1;
        			string fourth = "";
        			if(len4<=0 || len4>3)continue;
        			else fourth = s.substr(k+1,len4);
        			if(!validPart(fourth))continue;
        			if(debug)cout<<"fourth "<<fourth<<endl;


        			string str = first + "." + second + "." + third + "." + fourth;
        			validIP.push_back(str);
        		}
        	}
        }

        return validIP;
    }	

    void print(vector<string>s){
    	for(auto it:s)cout<<it<<endl;
    }
};


int main(){
	Solution obj;
	vector<string>ans;
	string s = "010010";
	ans = obj.restoreIpAddresses(s);
	obj.print(ans);
	return 0;
}