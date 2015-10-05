#include <bits/stdc++.h>
using namespace std;

class Solution {
public:
    int reverse(int x) {
        //cout<<"-----------------------------------------------------------   "<<x<<endl;
        bool isneg = 0;
        int pos=0;
        string str = to_string(x),fin;
        if(!str.size())return -1;

        if(str[0]=='-'){
            isneg = true;
            str = str.substr(1,str.length()-1);
        }            

        std::reverse(str.begin(),str.end());
        //cout<<str<<endl;

        int num;

        try {
            num = stoi(str);
        }        
        catch(std::out_of_range& e){
            return 0;
        }
        catch(...) {
                        
        }
        
        if(isneg) num *= -1;
        return num;
    }
};

int main(){
    Solution obj;

    int val=123;cout<<obj.reverse(val)<<endl;
    val=-123;cout<<obj.reverse(val)<<endl;
    val=000;cout<<obj.reverse(val)<<endl;
    val=00123;cout<<obj.reverse(val)<<endl;
    val=1230000;cout<<obj.reverse(val)<<endl;
    val=1534236469;cout<<obj.reverse(val)<<endl;
    return 0;
}