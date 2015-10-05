#include <bits/stdc++.h>
using namespace std;

int main(int argc,char*argv[]){
	int len = atoi(argv[1]),num;
	bool duplicates = false;
	set<int>noDups;
	vector<int>dups;

	for(int i=0;i<len;i++){
		num = atoi(argv[2+i]);
		if(noDups.find(num)==noDups.end()){
			noDups.insert(num);
		}else{
			duplicates = true;
			dups.push_back(num);
		}
	}

	if(duplicates){
		cout<<"duplicates found"<<endl;
		for(auto it:dups)cout<<it<<" ";cout<<endl;
	}
	return 0;
}