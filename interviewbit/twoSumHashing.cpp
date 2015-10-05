#include <bits/stdc++.h>
using namespace std;
vector<int>v = {1, 1, 1};

void pm(map<int,vector<int>>&mm){
    for(auto it:mm){
        cout<<it.first<<"-->";
        for(auto jt:(it.second))cout<<jt<<" ";cout<<endl;
    }
}

vector<int> /*Solution::*/twoSum(const vector<int> &A, int B) {
    map<int,vector<int>>mm;
    int i,len=A.size(),tofind,start=-1,end=-1;
    
    for(i=0;i<len;i++){
        auto it = mm.find(A[i]);
        if(it==mm.end()){
            mm[A[i]] = {i};
        }else{
            (it->second).push_back(i);
        }
    }

    pm(mm);
    
    for(auto it=mm.begin();it!=mm.end();++it){
        tofind = B-(it->first);        

        auto jt = mm.find(tofind);
        if(jt!=mm.end()){            
            int newend;

            if(it==jt && (it->second).size()>1){
                newend = (jt->second)[1];
            }else{
                newend = (jt->second)[0];
            }
            

            if((end==-1 || (end!=-1 && end>newend)) && newend>(it->second)[0]){                
                start = (it->second)[0];
                end = newend;
                //cout<<start<<" "<<end<<endl;
            }

        }
    }
    
    
    vector<int>ret;
    if(end==-1 && start ==-1)return ret;
    else {
        ret.push_back(start+1);
        ret.push_back(end+1);
        return ret;
    }
}

void print(vector<int>&v){
    for(auto it:v)cout<<it<<" ";cout<<endl;
}

int main(){
    vector<int>ret = twoSum(v,2);
    print(ret);
}