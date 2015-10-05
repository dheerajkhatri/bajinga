#include <bits/stdc++.h>
using namespace std;

long long getnext(int cur, int n, int i){						
    long long a = (n-i+1);
    long long b = (a*cur)/i;        
    return b; 
}	

vector<int> getRow(int A) {    	
    vector<int>arr(A+1);       
    int n = A;
    int cur=1;
    arr[0] = cur;

    for(int i=1;i<=A/2;i++){        	
    	arr[i] = getnext(cur,n,i);
    	cur = arr[i];
    }

    for(int j=A;j>A/2;j--){
    	arr[j] = arr[A-j];
    }
    return arr;
}

void print(vector<int>v){
	for(int i=0;i<v.size();i++){
		cout<<v[i]<<" ";
	}
	cout<<endl;
}

int main(int argc, char* argv[]){	
	int val = atoi(argv[1]);
	vector<int> v = getRow(val);
	print(v);
	return 0;
}