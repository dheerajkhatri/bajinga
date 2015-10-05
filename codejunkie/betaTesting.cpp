#include <bits/stdc++.h>
using namespace std;

int main(){
	int count;
	cin>>count;
	
	unordered_map<string,int>names;		

	while(count){
		string name;
		cin>>name;
		if(names.find(name)==names.end()){
			names[name] = 1;			
		}else{
			for(auto &it:names){
				if(it.first==name){
					it.second = (it.second)+1;
				}
			}
		}
		count--;
	}

	for(unordered_map<string,int>::iterator it=names.begin();it!=names.end();it++){
		cout<<it->first<<" "<<it->second<<endl;
	}

sort(names.begin(),names.end(),[](const unordered_map<string,int>::value_type &left, const unordered_map<string,int>::value_type &right){
    return (left.second>right.second);
});

	/*for(map<string,int>::iterator it=names.begin();it!=names.end();it++){
		cout<<it->first<<" "<<it->second<<endl;
	}*/
	return 0;
}