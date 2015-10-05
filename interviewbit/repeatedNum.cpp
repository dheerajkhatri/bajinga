#include <bits/stdc++.h>
using namespace std;

int /*Solution::*/repeatedNumber(const vector<int> &A) {
    int len = A.size(),n=A.size()-1,start,end;
    int i,gr,sn = sqrt(n), groups = n/sn,whichgroup=-1;
    //cout<<"groups "<<groups<<" sn "<<sn<<" n "<<n<<endl;
    int *arr = new int[groups];
    bool lastdone = (n%sn)==0 ? true:false;

    for(i=0;i<groups;i++)arr[i]=0;
	
    for(i=0;i<len;i++){
    	gr = ceil(1.0*A[i]/sn);    	
    	arr[gr-1]++;
    }
    
    //for(i=0;i<groups;i++)cout<<arr[i]<<" ";cout<<endl;

    for(i=0;i<groups;i++){
    	if(arr[i]>sn){whichgroup = i;break;}
    }

    if(whichgroup!=-1){
    	start = (whichgroup*sn)+1;
    	end = (whichgroup+1)*sn;	
    }else{
    	start = (sn*groups)+1;
    	end = sn*(groups+1);
    }
    
    int freqlen = end-start+1;
    int fa[freqlen];
    for(i=0;i<freqlen;i++)fa[i]=0;

    for(i=0;i<len;i++){    	
    	if(A[i]>=start && A[i]<=end){    		
    		fa[A[i]-start]+=1;    		
    		if(fa[A[i]-start]>1) return A[i];
    	}
    }
       
}

int main(){
	const vector<int> v = {2};
	int lol = repeatedNumber(v);
	cout<<lol<<endl;
	return 0;
}