#include <bits/stdc++.h>
using namespace std;


int /*Solution::*/maximumGap(const vector<int> &A) {
    int sSize = A.size(); int i, res =0; int minV, maxV; int bucket_size, bucket_num, bucket_id; 
    int maxGap = numeric_limits<int>::min(); int last_max;

    if(sSize>1)
    {
        minV =  maxV = A[0];
        for(i=1; i<sSize; i++)
        {
            if(minV > A[i]) minV = A[i];
            else if(maxV < A[i]) maxV = A[i];
        }

        bucket_size = max(1, (maxV - minV )/ (sSize - 1));
        bucket_num  = (maxV - minV)/bucket_size + 1;

        if(bucket_num <=1) return (maxV - minV); 
        vector<int> bucket_max(bucket_num, numeric_limits<int>::min());
        vector<int> bucket_min(bucket_num, numeric_limits<int>::max());
        vector<int> bucket_count(bucket_num, 0);

        for(i=0; i<sSize; i++)
        {
            bucket_id = (A[i] - minV)/bucket_size;
            bucket_count[bucket_id]++;
            bucket_min[bucket_id] = bucket_min[bucket_id] > A[i]? A[i]:bucket_min[bucket_id];
            bucket_max[bucket_id] = bucket_max[bucket_id] < A[i]? A[i]:bucket_max[bucket_id];
        }

        last_max = minV;
        for(i=0; i<bucket_num; i++)
        {
            if(bucket_count[i]>0)
            {
                maxGap = max(maxGap, bucket_min[i]- last_max);
                last_max = bucket_max[i];
            }
        }
        return maxGap;
    }
    return 0;
}

int main(){
    vector<int>v={1,10,5,5,10,10,10,10,10,10,10,10,10,10,5};
    cout<<maximumGap(v)<<endl;
    return 0;
}