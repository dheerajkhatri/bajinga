#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    int getlen(int x){
        int count = 0;
        while(x){
            count++;
            x /= 10;
        }
        return count;
    }
    
    int getithDigit(int num, int digits, int ith){
        int total = num/int(pow(10,digits-1-ith));
        int cur = total%10;
        return cur;
    }

    bool isPalindrome(int x) {
        if(x<0)return false;
        int start,end;
        int digits = getlen(x),debug=0;
        if(digits==1)return true;
    
        for(int i=0;i<digits/2;i++){
            start = getithDigit(x,digits,i);
            end = getithDigit(x,digits,digits-1-i);
            if(debug)cout<<"start and end are "<<start<<" "<<end<<endl;
            if(start!=end)return false;
        }
        return true;
    }
};

int main(int argc,char* argv[]){
    Solution obj;
    cout<<obj.isPalindrome(atoi(argv[1]))<<endl;
    return 0;
}