#include <bits/stdc++.h>
using namespace std;

unsigned long long getv(unsigned long long a){
	unsigned long long temp = a*(a+1)*(a*a+1);
	return temp;
}

int main(){
	unsigned long long i,temp,start,end,mid,val,b,t,result;
	cin>>t;
	while(t--){
		cin>>b;
		start = 0;
		end = 10000;

		while(end-start>1){			
			mid = start+(end-start)/2;
			val = getv(mid);
			if(val>b-1){
				end = mid;				
			}else{				
				start = mid;
			}
		}

		cout<<start<<endl;
	}
}