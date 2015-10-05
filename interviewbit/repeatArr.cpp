#include <bits/stdc++.h>
using namespace std;

int /*Solution::*/repeatedNumber(const vector<int> &A) {
    int curbucket,i,j,len=A.size(),whichbucket=-1;
    int nobuckets = ceil(sqrt(len-1));
    int width = ceil(1.0*len/nobuckets);
    
    //cout<<"buckets "<<nobuckets<<" width "<<width<<endl;

    map<int,int>buckets;
    
    for(i=1;i<=nobuckets;i++){
        buckets[i]=0;
    }
    
    for(i=0;i<len;i++){
        curbucket = ceil(A[i]/(1.0*width));
        //cout<<A[i]<<"->"<<curbucket<<endl;
        buckets[curbucket]++;
        if(buckets[curbucket]>width){
            whichbucket = curbucket;
            break;
        }
    }
    
    if(whichbucket==-1)whichbucket = nobuckets;
    
    //cout<<"whichbucket "<<whichbucket<<endl;

    //find in this bucket
    map<int,int>requiredBucket;
    
    for(i=(whichbucket-1)*width+1;i<=whichbucket*width;i++){
        requiredBucket[i]=0;
    }
    
    for(i=0;i<len;i++){
        curbucket = ceil(A[i]/(width*1.0));
        if(whichbucket==curbucket){
            if(requiredBucket[A[i]])return A[i];
            else requiredBucket[A[i]]++;
        }
    }
    
}

int main(int argc,char*argv[]){
    int len = atoi(argv[1]);
    vector<int>v(len);

    for(int i=0;i<len;i++){
        v[i] = atoi(argv[2+i]);
    }
    
    cout<<repeatedNumber(v)<<endl;
    return 0;
}