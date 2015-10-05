#include <bits/stdc++.h>
using namespace std;

class Solution {
public:

    int getnum(char c){
        int val;
        
        switch(c){
            case '0':
                val = 0;
                break;
            case '1':
                val = 1;
                break;
            case '2':
                val = 2;
                break;
            case '3':
                val = 3;
                break;
            case '4':
                val = 4;
                break;
            case '5':
                val = 5;
                break;
            case '6':
                val = 6;
                break;
            case '7':
                val = 7;
                break;
            case '8':
                val = 8;
                break;
            case '9':
                val = 9;
                break;
            default:
                val = -1;
                break;                
        }
        return val;
    }
    
    
    int myAtoi(string str) {
        string final="";
        int len=str.length(),i,pos=0,num,mul;
        bool isneg=false;
        if(!len)return 0;

        //remove initial whitespace
        while(str[pos]==' ')pos++;

        //check initial + or - either of one but dont check both by if ie: +-123
        if(str[pos]=='-'){isneg = true;pos++;}
        else if(str[pos]=='+')pos++;


        str = str.substr(pos,str.length()-pos);

//        cout<<"after ws and +/- "<<str<<endl;
        pos = 0;        
        //get first integral part 
        while(getnum(str[pos])<=9 && getnum(str[pos])>=0)pos++;

        str = str.substr(0,pos);
        len=pos; 

//        cout<<"after first integral part "<<str<<" "<<len<<endl;
        pos=0;
        //remove initial zeros        
        while(str[pos]=='0')pos++;

        str = str.substr(pos,len-pos);
        len = len-pos;
//        cout<<"after inital zeros "<<str<<" "<<len<<endl;

        for(i=num=0,mul=pow(10,len-1);i<len;i++,mul/=10){
            if(num+mul*getnum(str[i]) < num){
                if(isneg)return numeric_limits<int>::min();
                else return numeric_limits<int>::max();
            }else {
                num = num + mul*getnum(str[i]);   
            }            
        }

        if(isneg)num*=-1;
        return num;
    }

};

int main(){
    Solution obj;
    cout<<obj.myAtoi("  -0012a42")<<endl;
    cout<<obj.myAtoi("00+-123")<<endl;
    cout<<obj.myAtoi("-0001s23")<<endl;
    cout<<obj.myAtoi("  110dsa00 ")<<endl;
    cout<<obj.myAtoi("+-11000 asd")<<endl;   
    cout<<obj.myAtoi("+12  d3")<<endl;
    cout<<obj.myAtoi("   010")<<endl;
    cout<<obj.myAtoi("  +0 123")<<endl;
    cout<<obj.myAtoi("2147483648")<<endl;
    return 0;   
}