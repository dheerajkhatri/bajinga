#include <bits/stdc++.h>
using namespace std;

int main(){
	array<bitset<9>,9>mrs;	

	for(int i =0;i<9;i++){
		mrs[0].set(i);	
		cout<<mrs[0]<<endl;
	}


	array<array<bitset<9>, 3>, 3> box;
	int lol;
	for(int i=0;i<9;i++){
		for(int j=0;j<9;j++){
			box[i/3][j/3].set(j);
			cout<<"i and j and box are "<<i/3<<" "<<j/3<<" "<<box[i/3][j/3]<<endl;
			cin>>lol;
		}
		cout<<box[i][0]<<endl;
	}
	return 0;
}