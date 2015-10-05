#include <bits/stdc++.h>
using namespace std;

int /*Solution::*/books(vector<int> &A, int B) {
    int i,avg=0,len=A.size(),max=-1,rembook,remstudent,curstudent,cur;    
    for(i=0;i<len;i++){
        avg+=A[i];
        if(A[i]>max)max=A[i];
    }
    avg /= B;
    cout<<"avg max "<<avg<<" "<<max<<endl;

    if(len>B){
        curstudent = 1;
        i = 0;
        while(i<len && curstudent<B){
            rembook = len-i-1;
            remstudent = B-curstudent;
            
            if(rembook<remstudent)return -1;

            cur = A[i++];
            while(i<len && cur<avg && rembook>remstudent){
                rembook = len-i-1;
                cur += A[i++];
            }
            cout<<"for student "<<curstudent<<" books are "<<cur<<endl;
            curstudent++;
            if(cur>max)max = cur;
        }
    }
    
    return max;
}

int main(){
    vector<int>v = {73, 58, 30, 72, 44, 78, 23, 9};
    cout<<books(v,5)<<endl;
    return 0;
}