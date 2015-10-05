#include <bits/stdc++.h>
using namespace std;

unsigned int /*Solution::*/reverse(unsigned int A) {
    unsigned int i,num=0,cur;
    
    for(i=0;i<32;i++){
    	cur = 1<<i;    	
    	if(A&cur) {
    		num += 1<<(32-i-1);    		    	    		
    	}
    }

    return num;
}

int main(){
	unsigned int a=3;
	cout<<reverse(a)<<endl;
	return 0;
}