//WRONG SOLUTION
#include <bits/stdc++.h>
using namespace std;


bool isNonApUtil(vector<int>& arr){
	int len = arr.size();	
	int count1,count2,count3,count4,diff1,diff2,diff3,diff4,h1,h2,h3,h4;
	count1=count2=count3=count4=0;
	h1 = h2 = h3 = h4 = numeric_limits<int>::min();
	diff1=1;diff2=-1;diff3=2;diff4=-2;
	bool flag1,flag2,flag3,flag4;

	for(int j=0;j<len;j++){		
		flag1 = flag2 = flag3 = flag4 = false;

		for(int i=0;i<j;i++){
			if(arr[j]-arr[i]==diff1 && i>h1){
				if(!flag1){
					flag1 = true;
					h1 = i;
				}												
			}

			if(arr[j]-arr[i]==diff2 && i>h2){
				if(!flag2){
					flag2 = true;
					h2 = i;
				}												
			}

			if(arr[j]-arr[i]==diff3 && i>h3){
				if(!flag3){
					flag3 = true;
					h3 = i;
				}												
			}

			if(arr[j]-arr[i]==diff4 && i>h4){
				if(!flag4){
					flag4 = true;
					h4 = i;
				}												
			}			
		}
		cout<<j<<"-->"<<flag1<<" "<<flag2<<" "<<flag3<<" "<<flag4<<endl;
		if(flag1)count1++; if(flag2)count2++; if(flag3)count3++; if(flag4)count4++;		
		if(count1>=2 || count2>=2 ||count3>=2 ||count4>=2 ) return false;				
	}
	return true;
}

bool isNonAp(vector<int>&arr){	

	return isNonApUtil(arr);	
}

int main(){
	vector<int>num1 = {0,5,4,3,1,2};
	vector<int>num2 = {2,0,1,4,3};
	cout<<isNonAp(num1)<<endl;
	cout<<isNonAp(num2)<<endl;
	return 0;
}