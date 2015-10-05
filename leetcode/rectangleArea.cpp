#include <bits/stdc++.h>
using namespace std;


class Solution {
public:
    int findArea(int x1, int y1, int x2, int y2){
        return(abs((x1-x2)*(y1-y2)));
    }

    int computeArea(int A, int B, int C, int D, int E, int F, int G, int H) {
        int a1 = findArea(A,B,C,D);
        int a2 = findArea(E,F,G,H);        
        /*THIS IS IMPORTANT ISSUE NEED TO LOOK AT THIS SERIOUSLY
        SOME TIME YOU JUST DONT RETURN SOME OVERFLOW NEARBY CALCULATION
        NEED TO PERFORM CALCULATION AND STORE IN SOME VARIABLE THEN RETURN
        int temp1 = min(C,G);
        int temp2 = max(A,E);
        int temp = temp1-temp2;
        cout<<temp1<<" "<<temp2<<" "<<temp<<endl;
        cout<<min(C,G)-max(A,E)<<endl;*/
        long long lz = 0;
        long long a3 = max(lz,static_cast<long long>(min(C,G))-static_cast<long long>(max(A,E)) ) * max(lz,static_cast<long long>(min(D,H)) - static_cast<long long>(max(B,F)) );
        //cout<<a1<<" "<<a2<<" "<<a3<<endl;
        return(a1+a2-a3);
    }
};

int main(){
	Solution obj;
	cout<<obj.computeArea(-1500000001,0,-1500000000,1,1500000000,0,1500000001,1)<<endl;
	return 0;
}