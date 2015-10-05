 /*Given n non-negative integers a1, a2, ..., an, where each represents a point at coordinate (i, ai).
 n vertical lines are drawn such that the two endpoints of line i is at (i, ai) and (i, 0). 
 Find two lines, which together with x-axis forms a container, 
 such that the container contains the most water. */

 #include <bits/stdc++.h>
 using namespace std;

class Solution {
public:
    int maxArea(vector<int>& height) {
		if(height.size()<=1)return 0;
		
		int left=0,right=height.size()-1,mm=numeric_limits<int>::min();
		while(left!=right){
		    mm = max(mm,(right-left)*min(height[left],height[right]));
		    if(height[left]<height[right])left++;
		    else right--;
		}
        return mm;
    }
};

 int main(){
 	vector<int>v = {0,1,0,2,1,0,1,3,2,1,2,1};
 	/*v.push_back(9);
 	v.push_back(2);
 	v.push_back(9);
 	v.push_back(0);
 	//v.push_back(4);*/
 	Solution obj;
 	cout<<obj.maxArea(v)<<endl;
 }