#include <bits/stdc++.h>
using namespace std;

void increaseIndent(string& s, int count){
	while(count){
		s += '\t';
		count--;
	}
}

vector<string>makeJson(string& A){	
	vector<string>result;
	int i,j,count=1,len=A.length();
	string cur="";
	bool content = false;
	
	cur += A[0];
	//cout<<cur<<" pushed1 "<<endl;
	result.push_back(cur);

	
	for(i=1;i<len-1;){
		content = false;
		string topush="";
		increaseIndent(topush,count);

		while(i<len-1 && A[i]!='{' && A[i]!='[' && A[i]!=']' && A[i]!='}'){
			topush += A[i];
			content = true;
			if(A[i]==',')break;
			i++;
		}

		if(A[i]==',')i++;

		if(content){
			result.push_back(topush);
			//cout<<topush<<" pushed2 "<<endl;
		}
		while(i<len-1 && A[i]==' ')i++;
		

		
		if(i<len-1 && (A[i]=='{' || A[i]=='[')){
			string toappend = "";
			increaseIndent(toappend,count);
			toappend += A[i];
			result.push_back(toappend);
			//cout<<toappend<<" pushed3 "<<endl;
			count += 1;
			i++;
		} else if(i<len-1 && (A[i]==']' || A[i]=='}')){
			string toappend = "";
			increaseIndent(toappend,count-1);			
			toappend += A[i];
			i++;
			count -= 1;
			if(i<len-1 && A[i]==','){
				toappend += A[i];
				i++;
			}
			result.push_back(toappend);
			//cout<<toappend<<" pushed4 "<<endl;						
		}
	}

	cur = A[len-1];
	result.push_back(cur);	

	return result;
}

void print(vector<string>&res){
	for(auto it:res)cout<<it<<endl;
}

int main(){
	string cur;
	getline(cin,cur);
	vector<string>res = makeJson(cur);
	print(res);	
	return 0;
}