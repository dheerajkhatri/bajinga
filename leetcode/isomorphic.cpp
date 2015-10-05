#include <bits/stdc++.h>
using namespace std;



class Solution {
public:
    bool isIsomorphic(string s, string t) {
        int arr1[128],arr2[128];
        for(int k=0;k<128;k++){
        	arr1[k] = -1;
        	arr2[k] = 0;
        }

        for(int i=0;i<s.length();i++){
        	/*cout<<int(s[i])<<" "<<int(t[i])<<endl;
        	cout<<arr1[int(s[i])]<<" "<<arr2[int(t[i])]<<endl;*/
        	if(arr1[s[i]]==-1){
        		if(arr2[t[i]])return false;
        		arr1[s[i]] = t[i];
        		arr2[t[i]] = 1;
        	}  //if mapped and      //either not matchine with current mapping or value is already mapped
        	else if(arr1[s[i]]!=-1 && arr1[s[i]]!=t[i])	return false;
        }
        return true;
    }
};

int main(){
	Solution obj;
	cout<<obj.isIsomorphic("ab","aa")<<endl;
	cout<<obj.isIsomorphic("eggg","adde")<<endl;
	cout<<obj.isIsomorphic("foo","bar")<<endl;
	cout<<obj.isIsomorphic("ff","aa")<<endl;
	cout<<obj.isIsomorphic("qwertyuiopasdfghjklzxcvbnm","mnbvcxzlkjhgfdsapoiuytrewq")<<endl;
	cout<<obj.isIsomorphic("fab","az")<<endl;
	return 0;
}