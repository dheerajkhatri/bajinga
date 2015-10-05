/*Z algorithm (Linear time pattern searching Algorithm)
both time and space complexity is same as KMP algorithm but this algorithm is Simpler to understand.*/

#include <iostream>
#include <vector>
#include <map>
#include <string>
#include <algorithm>
using namespace std;

vector<int>findZ(string s){
	int L=0,R=0,i,k,n=s.length();	
	vector<int>z(s.length(),0);

	for(i=1;i<s.length();i++){
		if(i>R){
			L = R = i;
			while(R<n and s[R-L]==s[R])R++;
			z[i] = R-L;
			R--;
		}else{
			k = i-L;
			if(z[k]<R-i+1){
				z[i] = z[k];
			}else{
				L = i;
				while(R<n and s[R-L]==s[R])R--;
				z[i] = R-L;
				R--;
			}
		}
	}
	return z;
}

void search(string text, string pat){
	string conc = pat+"$"+text;
	int pl = pat.length();
	vector<int>zarr = findZ(conc);

	for(int i=0;i<zarr.size();i++){
		if(zarr[i]==pl)cout<<"Pattern found at "<<i-pl-1<<endl;
	}
	return;
}

int main(){
    string text = "GEEKS FOR GEEKS";
    string pattern = "GEEK";
    search(text, pattern);
    return 0;
}