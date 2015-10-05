#include <bits/stdc++.h>
using namespace std;
class Solution {
private:
    int profit;

public:
    
    Solution(): profit(0) {}
    
    int minelement(int start, int end, vector<int>value){
    	int siz = value.size();
    	int min = start;
    	for(int i=start;i<=end;i++){
    		if(value[i]<value[min]){
    			min = i;
    		}
    	}
    	return min;
    }
    
    int max_profit(int start, int end, vector<int> value){	
    	int allmax,indmax,minindex;
    	
    	if(end<start)return 0;
    	
    	if(end == start) {
    		if(profit<value[start]) profit = value[start];
    		return profit;
    	}
    
    	if(end-start<=1){
    		allmax = min(value[start],value[end])*2;
    		indmax = max(value[start],value[end]);
    		if(max(allmax,indmax) > profit) profit = max(allmax,indmax);			
    		return profit;
    	}
    	
    	minindex = minelement(start,end,value);
    	allmax = (end-start+1)*value[minindex];
    	indmax = max(max_profit(start,minindex-1,value),max_profit(minindex+1,end,value));
    	if(max(allmax,indmax) > profit){
    		profit = max(allmax,indmax);
    	}
    	return profit;
    }
    
    int maxProfit(vector<int>& prices) {
        int sz = prices.size();
        return(max_profit(0,sz-1,prices));
    }
};
int main(){
    Solution obj;
    vector<int> myvec;
    int n,temp; cin>>n;

    for(int i =0 ;i<n;i++){
        cin>>temp;
        myvec.push_back(temp);
    }
    cout<<obj.maxProfit(myvec)<<endl;
    return 0;
}