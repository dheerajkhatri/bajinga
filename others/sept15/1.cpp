#include <bits/stdc++.h>
using namespace std;

struct Cor{
	int x;
	int y;
	Cor(int a, int b): x(a),y(b){}
};

int dist(const Cor *a, const Cor *b){
	return abs(a->x-b->x)+abs(a->y-b->y);
}

int main(){
	int n,t,val;
	cin>>t;

	while(t--){
		cin>>n;
		map<int,Cor*>mm;
		for(int i=0;i<n;i++){
			for(int j=0;j<n;j++){
				cin>>val;
				struct Cor* newcor = new Cor(i,j);
				mm[val] = newcor;
			}
		}

		int ans = mm[1]->x + mm[1]->y;		
		for(int i=1;i<n*n;i++){
			ans += dist(mm[i+1],mm[i]);
		}
		cout<<ans<<endl;
	}

}