/*A : [ (4, 100), (48, 94), (16, 21), (58, 71), (36, 53), (49, 68), (18, 42), (37, 90), (68, 75), (6, 57),
 (25, 78), (58, 79), (18, 29), (69, 94), (5, 31), (10, 87), (21, 35), (1, 32)*/
 
#include <bits/stdc++.h>
using namespace std;

 struct Interval {
    int start;
    int end;
    Interval() : start(0), end(0) {}
    Interval(int s, int e) : start(s), end(e) {}
 };
 
bool firstSmaller(Interval first, Interval second){
    return first.start<second.start;
}
 
vector<Interval> /*Solution::*/merge(vector<Interval> &A) {
    int i,j,len = A.size();
    if(len<=1)return A;
    
    vector<Interval>ret;
    Interval prev = A[0];
    ret.push_back(prev);
    sort(A.begin(),A.end(),firstSmaller);
    
    
    for(i=0;i<len;i++){
        if(A[i].start<=prev.end){
            Interval inter(prev.start,max(prev.end,A[i].end));
            ret.pop_back();
            ret.push_back(inter);
            prev = inter;
        }else{
            ret.push_back(A[i]);
            prev = A[i];
        }    
    }
    return ret;
}

int main(){
	vector<Interval>v;
	Interval v1(4,100);Interval v1(18,29);Interval v1(5,23);Interval v1(1,32);
	

	return 0;
}