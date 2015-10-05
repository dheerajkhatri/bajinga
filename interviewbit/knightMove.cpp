#include <bits/stdc++.h>
using namespace std;

float dist(int x, int y){
	return sqrt(x*x+y*y);
}

int moves(int x0, int y0, int x1, int y1){
	float dist1 = dist(x0,y0);
	float dist2 = dist(x1,y1);
	float M = max(dist1,dist2);
	float m = min(dist1,dist2);

	int res = int(max(ceil(M/2),ceil(M+m/3)))+int(M+m)-(int(max(ceil(M/2),ceil(M+m/3))) % 2);
	return res;
}

int main(){
	int x0,y0,x1,y1;
	cin>>x0>>y0>>x1>>y1;
	cout<<moves(x0,y0,x1,y1)<<endl;
	return 0;
}