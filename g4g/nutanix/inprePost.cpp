#include <bits/stdc++.h>
using namespace std;

/*void printPost(vector<int>&in, int is, int ie, vector<int>& pre, int ps, int pe){	
	//cout<<is<<" "<<ie<<" "<<ps<<" "<<pe<<endl;	
	int lol;cin>>lol;
	if(is>ie || ps>pe)return;
	else if(is==ie){
		cout<<in[is]<<endl;
		return;
	}
	else{
		int middle = is+ceil((ie-is)/2.0);
		int m2 = ps+ceil((pe-ps)/2.0);

		printPost(in,is,is+middle-1,pre,ps+1,ps+(middle-is));
		printPost(in,middle+1,ie,pre,m2+1,pe);
		cout<<in[middle]<<" ";
	}
}*/

int search(vector<int>& in , int start, int end, int sv){
	for(int i=start;i<=end;i++){
		if(in[i]==sv)return i;		
	}
	return -1;
}

void inprePost(vector<int>&pre, vector<int>& in, int start, int end, int& index){
	if(start>end)return;

	int ri = search(in,start,end,pre[index]);
	index++;
	inprePost(pre,in,start,ri-1,index);
	inprePost(pre,in,ri+1,end,index);
	if(ri!=-1)cout<<in[ri]<<" ";

	return;
}


int main(){
	vector<int>in = {4,2,5,1,3,6};
	vector<int>pre = {1,2,4,5,3,6};
	int index = 0;
	inprePost(pre,in,0,in.size()-1,index);
	cout<<endl;
}