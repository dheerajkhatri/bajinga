#include <bits/stdc++.h>
using namespace std;

void print(vector<int>A){
    for(int i=0;i<A.size();i++)cout<<A[i]<<" ";cout<<endl;
}



int /*Solution::*/threeSumClosest(vector<int> &A, int B) {
    sort(A.begin(),A.end());
    //print(A);
    int i,j,k,len=A.size(),tofind,prev,min=100000,minsum=100000;
    for(i=0;i<len-2;i++){
        tofind = B-A[i];
        //cout<<"i-->"<<i<<" tofind "<<tofind<<endl;

        for(j=i+1,k=len-1; k>j ;){
            if(A[k]+A[j]==tofind) return (A[i]+A[j]+A[k]);
            else if(A[j]+A[k]>tofind){
                if(min>abs(A[i]+A[j]+A[k]-B)){
                    //cout<<"> tofind "<<A[i]<<" "<<A[j]<<" "<<A[k]<<endl;
                    minsum = A[i]+A[j]+A[k];
                    min = abs(minsum-B);

                    //cout<<"mindiff is "<<min<<" minsum is "<<minsum<<endl;
                }
                k--;
            }else{
                if(min>abs(A[i]+A[j]+A[k]-B)){
                    //cout<<"< tofind "<<A[i]<<" "<<A[j]<<" "<<A[k]<<endl;
                    minsum = A[i]+A[j]+A[k];
                    min = abs(minsum-B);
                    //cout<<"mindiff is "<<min<<" minsum is "<<minsum<<endl;
                }
                j++;
            }
        }
                
    }

    return minsum; 
}

int main(){
    vector<int>v = {-5, 1, 4, -7, 10, -7, 0, 7, 3, 0, -2, -5, -3, -6, 4, -7, -8, 0, 4,
                    9, 4, 1, -8, -6, -6, 0, -9, 5, 3, -9, -5, -9, 6, 3, 8, -10, 1, -2,
                    2, 1, -9, 2, -3, 9, 9, -10, 0, -9, -2, 7, 0, -4, -3, 1, 6, -3};

    cout<<"answer is "<<threeSumClosest(v,-1)<<endl;

    return 0;
}