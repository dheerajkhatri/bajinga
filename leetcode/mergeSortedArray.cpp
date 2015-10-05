#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    void merge(vector<int>& nums1, int m, vector<int>& nums2, int n) {
		
		for(int i=0;i<m;i++){
			nums1[m+n-1-i] = nums1[m-1-i];
		}
		/*cout<<"after transfering"<<endl;
		print(nums1);*/
		int s1=n,s2=0;
		int min;

		for(int count=0;count<m+n;){
			if(s1<nums1.size() && s2<n){
				if(nums1[s1]<=nums2[s2]){
					nums1[count] = nums1[s1];
					s1++;
					count++;
				}else{
					nums1[count] = nums2[s2];
					s2++;
					count++;
				}	
			}else if(s1>=nums1.size() && count<m+n){
				while(s2<n) nums1[count++] = nums2[s2++];					
				return;
			}else if(s2>=n && count<m+n){
				while(s1<nums1.size()) nums1[count++] =nums1[s1++];					
				return;
			}			
		}

		return;
    }


    void print(vector<int>v){
    	for(int i=0;i<v.size();i++){
    		cout<<v[i]<<" ";
    	}
    	cout<<endl;
    }
};

int main(){
	Solution obj;
	vector<int>v1(4);
	v1[0]=1;v1[1] = 5 ;//v1[2] = 7;
	obj.print(v1);

	vector<int>v2(2);
	v2[0]=2;v2[1]=9;
	obj.print(v2);

	obj.merge(v1,2,v2,2);
	obj.print(v1);
}