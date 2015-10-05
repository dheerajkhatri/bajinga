#include <bits/stdc++.h>
using namespace std;


void print(vector<string>res){
	for(auto it:res)cout<<it<<"<--"<<endl;
}

vector<string> /*Solution::*/fullJustify(vector<string> &A, int B) {
	vector<string> result;
	int i,curpos,len=A.size();

	for(curpos=0;curpos<len;){
		string curstr= "";
		int curlen = 0, startpoint = curpos,totalwords=0,curspaces,totalspaces;
		bool left_more_space = false;

		while(curpos<len && curlen+A[curpos].length()<=B){			
			curlen += A[curpos++].length();
			curlen++;
			totalwords++;			
		}		

		curlen--; //remove space after right word				
		totalspaces = B-curlen+totalwords-1;
		//cout<<"totalspaces are "<<totalspaces<<" and totalwords are "<<totalwords<<endl;
		
		while(startpoint<curpos){
			curstr += A[startpoint];
			int j=0;

			if(curpos==len && totalspaces)curspaces = 1;
			else if(totalwords-1)curspaces = ceil(1.0*totalspaces/(totalwords-1));
			else curspaces = totalspaces;
			
			while(j<curspaces){
				curstr += " ";
				j++;
			}

			totalspaces -= curspaces;
			totalwords--;
			startpoint++;			
		}		
		int k=0;
		while(k<totalspaces){curstr += " ";k++;}	

		result.push_back(curstr);
		//cout<<curstr<<" is pushed for curpos "<<curpos<<endl;
	}

	return result;
}


int main(){
	vector<string>que;
	/*que.push_back("This");que.push_back("is");que.push_back("an");que.push_back("example");
	que.push_back("of");que.push_back("text");que.push_back("justification");
	vector<string>res = fullJustify(que,16);*/
	que.push_back("What"); que.push_back("must");// que.push_back("be"); que.push_back("shall"); que.push_back("be.");
	vector<string>res = fullJustify(que,8);
	print(res);
	
	return 0;
}