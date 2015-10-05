#include <bits/stdc++.h>
using namespace std;

int /*Solution::*/maxPoints(vector<int> &A, vector<int> &B) {
    int i,j,k,vercount,horcount,maxcount=0,len = A.size(),eslope,allduplicates,curcount;
    if(len<=2)return len;
    
    for(i=0;i<len;i++){
        unordered_map<double,int>uSlope;
        double curslope;
        vercount = horcount = allduplicates = 1;
        curcount = eslope = 0;        
        if(A[i]==B[i])eslope++;

        for(j=i+1;j<len;j++){
        	if(A[i]==A[j] && B[i]==B[j])allduplicates++;
        	if(A[j]==B[j])eslope++;

            if(A[i]==A[j])vercount++;
            if(B[i]==B[j])horcount++;
            
            if(B[i]!=B[j]){
                curslope = (double(B[j])-double(B[i]))/(A[j]-A[i]);
                //cout<<i<<" "<<j<<" curslope is "<<curslope<<endl;
                auto it = uSlope.find(curslope);
                if(it==uSlope.end()){
                    uSlope.insert({curslope,2});
                }else{
                	//cout<<"slope "<<it->first<<" found"<<" i and j are "<<i<<" "<<j<<endl;
                    it->second = (it->second)+1;                    
                    if(curcount<it->second)curcount= it->second;
                }
            }
        }
        //cout<<" i ends  maxcount is "<<maxcount<<" horcount "<<horcount<<" vercount "<<vercount<<" eslope "<<eslope<<endl;
        //cout<<"allduplicates "<<allduplicates<<" and maxcount "<<maxcount<< endl;
        if(allduplicates>1){
        	curcount+= allduplicates-1;	
        	if(maxcount<curcount)maxcount=curcount;
        } 
        if(maxcount<vercount)maxcount=vercount;
        if(maxcount<horcount)maxcount = horcount;
        if(maxcount<eslope)maxcount = eslope;
        if(maxcount<=allduplicates){
            if(allduplicates<len)maxcount = allduplicates+1;
            else maxcount =  allduplicates;
        }
    }
    if(maxcount<2)maxcount=2;
    return maxcount;
}

int main(){
	int points;cin>>points;int temp1,temp2;
	bool duplicate = false;
	vector<int>x(points),y(points);

	for(int i=0;i<points;i++){
		cin>>temp1>>temp2;
		//cout<<temp1<<" "<<temp2<<endl;
		auto it = find(x.begin(),x.begin()+i,temp1);
		auto jt = find(y.begin(),y.begin()+i,temp2);
		if(it!=x.begin()+i && jt!=y.begin()+i)duplicate = true;
		x[i] = temp1;
		y[i] = temp2;
	}
	cout<<"are there any duplicates? "<<duplicate<<endl;
	cout<<maxPoints(x,y)<<endl;
	return 0;
}