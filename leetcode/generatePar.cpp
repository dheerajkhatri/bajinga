#include <bits/stdc++.h>
using namespace std;



class Solution {
public:		

	void addNext(string str,set<string> &ms,int left, int right){
		
		string cur = str;		
		
		//cout<<"left "<<left<<" right "<<right<<endl;

		if(right<left)return;

		if(!left && !right){
			ms.insert(str);
			//cout<<"str "<<str<<" appended"<<endl;
			return;
		}

		//pushing left

		if(left){		
			str.append("(");			
			addNext(str,ms,left-1,right);
		}

		//pushing right

		str = cur;
		if(right!=left){			

			str.append(")");			
			addNext(str,ms,left,right-1);	
		}
		return;
	}

    vector<string> generateParenthesis(int n) {
  		set<string> myset;  		
  		vector<string> vec;
  		int left=n,right=n;
  		string str = "";
  		addNext(str,myset,left,right);
  		set<string>::iterator it;
  		for(it=myset.begin();it!=myset.end();it++)
  			vec.push_back(*it);
  		return vec;
    }

    void print(vector<string> myset){
    	vector<string> ::iterator it;

    	for(it=myset.begin();it!=myset.end();++it)
    		cout<<*it<<" ";
    	cout<<endl;
    }
};

int main(){
	Solution obj;
	vector<string> result = obj.generateParenthesis(3);
	obj.print(result);
	return 0;
}