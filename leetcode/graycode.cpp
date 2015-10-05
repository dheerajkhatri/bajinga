#include <bits/stdc++.h>
using namespace std;


class mySolution {
public:
    
	vector<string> helper(vector<string> vec){
		vector<string> dodouble;		
		for(int i=0;i<vec.size();i++){
			string temp = vec[i];			
			dodouble.push_back("0"+vec[i]);			
		}

		for(int i=vec.size()-1;i>=0;i--){
			string temp = vec[i];			
			dodouble.push_back("1"+vec[i]);
		}
		
		return dodouble;
	}

    vector<string> grayCode(int n) {
        vector<string> graystring;
        graystring.push_back("0");
        graystring.push_back("1");

        for(int i=1;i<n;i++){
        	graystring = helper(graystring);
        }
        return graystring;
    }

    void print(vector<string> vec){
    	for(int i=0;i<vec.size();i++)
    		cout<<vec[i]<<endl;    	
    }
};


class Solution {
public:
    //binary to gray is xor of num and num/2
    int bTog(int num){
        return ((num>>1)^(num));
    }
    
    //gray to binary is 
    
    int gTob(int num){
        int mask,n=num;
        for(mask=num>>1;mask!=0;mask>>=1){
            n = n ^ mask;
        }
        return n;
    }
    
    vector<int> grayCode(int n) {
        vector<int> myvec;
        for(int i=0;i<pow(2,n);i++){
            myvec.push_back(bTog(i));
        }
        return myvec;
    }

    void print(vector<int> vec){
    	for(int i=0;i<vec.size();i++)
    		cout<<vec[i]<<endl;    	
    }
};

int main(){
	Solution obj;	
	vector<int> result = obj.grayCode(3);
	ob.jprint(result);
	return 0;
}