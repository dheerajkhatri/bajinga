#include <bits/stdc++.h>
using namespace std;


class Solution {
public:
	int digitsSquare(int num){
		string s_num = to_string(num);
		int temp,count = 0;

		for(int i=0;i<s_num.length();i++){			
			temp = s_num[i] - '0';			
			count += temp*temp;
		}

		//cout<<"for num squaresum is "<<num<<" "<<count<<endl;		
		return count;
	}

    bool isHappy(int n) {
    	set<string> nonhappyset;
    	int ds = digitsSquare(n);
    	string ds_string = to_string(ds);

    	while(ds!=1 && nonhappyset.find(ds_string)==nonhappyset.end()){

    		nonhappyset.insert(ds_string);
    		//cout<<ds_string<<" is inseted in unhappy set"<<endl;
    		ds = digitsSquare(ds);
    		ds_string = to_string(ds);
    	}
    	return ds==1;
    }

};

int main(int argc,char* argv[]){
	Solution obj;
	cout<<obj.isHappy(atoi(argv[1]))<<endl;
	return 0;
}