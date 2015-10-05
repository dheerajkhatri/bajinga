#include <bits/stdc++.h>
using namespace std;

string rem4="011",rem8="001",rem="0010011";

int solve(unsigned long long k){
	unsigned long long a = k%4;
	unsigned long long b = k%8;

	if(b<=2){
		return rem8[b]=='1';
	}else if(a<=2){
		return rem4[a]=='1';
	}else{
		unsigned long long multiple = static_cast<unsigned long long>(ceil(k/4.0));
		return rem[multiple%8-1]=='1';
	}

}


int main(int argc,char* argv[]){

	int t;cin>>t;
	unsigned long long k;
	ofstream out;
	out.open("output.txt");

	cin>>k;
	cout<<"Case #1: "<<solve(k);

	for(int i=2;i<=t;i++){
		cin>>k;		
		cout<<endl<<"Case #"<<i<<": "<<solve(k);
	}
	
	out.close();
	return 0;
}