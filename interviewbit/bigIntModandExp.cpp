/*reference:https://www.khanacademy.org/computing/computer-science/cryptography
								 /modarithmetic/a/fast-modular-exponentiation*/

#include <bits/stdc++.h>
using namespace std;

void print(vector<int>&v){
	for(auto it:v)cout<<it<<" ";
	cout<<endl;
}

//A^B mod N
int findMod(int A, int B , int N){
	//max length of int 2^32
	vector<int>v(32,0);
	vector<int>modResult(32,0);

	//get B in binary form
	for(int i=0;i<32;i++){
		int cur = 1<<i;		
		v[i] = (B & cur) ? 1:0;
	}

	//print(v);
	
	//calculate mod N of the powers of two ≤ B
	modResult[0] = A%N;
	for(int i=1;i<32;i++){
		long long temp = modResult[i-1];
		temp *= temp;
		modResult[i] = (temp)%N;
	}
	
	//print(modResult);

	//Use modular multiplication properties to combine the calculated mod C values
	int result = 1;
	for(int i=0;i<32;i++){
		if(v[i]){			
			long long temp = result;
			temp *= modResult[i];
			result = temp%N;
		}
	}

	return result;
}

int main(int argc,char*argv[]){
	int a,b,n;
	cout<<"to find a^b % N enter values space separaed"<<endl;
	cin>>a>>b>>n;
	cout<<findMod(a,b,n)<<endl;	
	return 0;
}