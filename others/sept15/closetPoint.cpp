#include <bits/stdc++.h>
using namespace std;

int main(){
	int start=1,count=1,i;
	while(count<=4){
		for(i=start;i<start+count;i++){
			printf("%d ",i);
		}
		printf("\n");
		start = i;
		count++;
	}

	return 0;
}

