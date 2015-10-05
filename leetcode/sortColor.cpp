/* Given an array with n objects colored red, white or blue, sort them so that objects of the same color are adjacent, 
with the colors in the order red, white and blue.Here, we will use the integers 0, 1, and 2 to represent the color red, white, and blue respectively.

Note:
You are not suppose to use the library's sort function for this problem.*/

#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    void sortColors(vector<int>& nums) {
        int red,white,blue,r,b,w;

        for(int i=red=white=blue=0;i<nums.size();i++){
        	if(!nums[i])red++;
        	else if(nums[i]==1)blue++;
        	else white++;
        }

        for(r=0;r<red;r++)nums[r]=0;
        for(b=r;b<red+blue;b++)nums[b]=1;
		for(w=b;w<red+blue+white;w++)nums[w]=2;        	
    }

	void print(vector<int> vec){
		for(int i=0;i<vec.size();i++)
			cout<<vec[i]<<" ";
		cout<<endl;
	}
};