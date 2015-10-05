//solution for sum is given s but not valid for sum>=s

#include <bits/stdc++.h>
using namespace std;
class Solution {
public:
	int getpos(vector<int>arr,int start, int end, int numtofind){
		int mid;

		while(start<end){
			mid = start+(end-start)/2;
			if(arr[mid]==numtofind)return mid;
			else if(arr[mid]<numtofind){
				start = mid+1;
			}else{
				end = mid-1;
			}
		}
		if(start==end && arr[start]==numtofind)return start;
		return -1;
	}

    int minSubArrayLen(int s, vector<int>& nums) {
    	if(nums.size()==0)return 0;
    	if(nums.size()==1 && s!=nums[0])return 0;
    	
    	int i,tofind,n=nums.size(),minlen=n+1,tofindpos;
    	vector<int>v(n);

    	v[0] = nums[0];
    	for(i=1;i<n;i++) v[i] = nums[i]+v[i-1];

    	for(i=0;i<n-1;i++){
    		tofind = s+v[i];
    		if(tofind<0)return 0;
    		tofindpos = getpos(v,i+1,n-1,tofind);
    		if(tofindpos!=-1){
    			//cout<<"i and pos and remain sum are are "<<i<<" "<<tofindpos<<" "<<tofind<<endl;
    			if(tofindpos-i<minlen)minlen = tofindpos-i;
    		}
    	}

    	if(minlen==n+1)return 0;
    	else return minlen;
    }
};

int main(){
	Solution obj;
	vector<int> v1 = {2,3,1,2,4,3};	
	cout<<obj.minSubArrayLen(7,v1)<<endl;
	
	return 0;
}