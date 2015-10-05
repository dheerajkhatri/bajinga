#include <bits/stdc++.h>
using namespace std;

int main(){
	int a = 0;
	for(int i=0;i<=30;i++){
		a += 1<<i;
	}
	cout<<"INT range max "<<a<<endl;
	cout<<"INT range min "<<a+1<<endl;

	(1 & 0x80000000)>>31 == 0 ? cout<<"positive"<<endl:cout<<"negative"<<endl;
	(-1 & 0x80000000)>>31 == 0 ? cout<<"positive"<<endl:cout<<"negative"<<endl;
	return 0;
}