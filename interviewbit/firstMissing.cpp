#include <bits/stdc++.h>
using namespace std;

int negApart(vector<int>&arr ,int len){
	int i,j,temp;
	for(i=j=0;i<len;i++){
		if(arr[i]<=0){
			temp = arr[i];
			arr[i] = arr[j];
			arr[j] = temp;			
			j++;
		}
	}
	return j;
}

void print(vector<int>v, int pos){
	for(int i=pos;i<v.size();i++)cout<<v[i]<<" ";cout<<endl;
}

int /*Solution::*/firstMissingPositive(vector<int> &A) {
    int len = A.size(),i,j,cur;
    if(len<1)return 1;
    int pos = negApart(A,len);

    print(A,pos);

    if(pos==len)return 1;
    else{
    	int newlen = len-pos;
    	//cout<<"newlen "<<newlen<<" pos "<<pos<<endl;

    	for(cur=pos;cur<len;cur++){
    		if(abs(A[cur])<=newlen){
    			A[pos+abs(A[cur])-1] = -abs(A[pos+abs(A[cur])-1]);
    			//cout<<"for "<<abs(A[cur])<<" for pos "<<cur<<" -->";print(A,pos);
    		}
    	}

    	for(i=pos;i<len;i++){
    		if(A[i]>0)return i-pos+1;
    	}

    	return newlen+1;
    }
}



int main(){
	vector<int>v = {0, 10, 2,2,3,6,5,1, -10, -20};
	cout<<firstMissingPositive(v)<<endl;
}