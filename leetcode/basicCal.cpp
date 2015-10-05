#include <bits/stdc++.h>
using namespace std;

class Solution {
public:	

    int calculate(string s) {
    	int i,a,b,temp,prev,multiLenNum;
    	bool isFirstNum = true;
    	char cur;

    	for(i=0;i<s.length();i++){    		
    		cur = s[i];
    		if(cur==' ' || cur == '(' || cur==')')continue;    		
    		else {
    			if(isFirstNum && cur!='+' && cur!='-'){    				
    				prev = cur - '0';
    			}else{
    				a = prev;
					while(s[i+1]==' ' || s[i+1]=='(' || s[i+1]==')')i++;
					b = s[++i]-'0';    					
    			}

    			multiLenNum = isFirstNum ? prev : b;
    			
				while(i+1 < s.length() ){
					if(s[i+1]=='+' || s[i+1]=='-'||s[i+1]=='(' || s[i+1]==')' ) break; 
					else if(s[i+1]==' ')i++;
					else {
						temp = s[i+1]-'0';
						multiLenNum *= 10;
						multiLenNum += temp;
						i++;							
					}							
				}

				if(isFirstNum){
					isFirstNum = false;
					prev = multiLenNum;
				}else{
					b = multiLenNum;
				}
				if(cur=='+') prev = a+b;
				else if(cur=='-')prev=a-b;				    		
    		}    					
    	}    	
    	return prev;
    }
};

int main(){
	Solution obj;
	cout<<obj.calculate("2-(5-6)")<<endl;cout<<"------------------"<<endl;
	/*cout<<obj.calculate(" 2121232 ")<<endl;cout<<"------------------"<<endl;
	cout<<obj.calculate("(1+(4+14)-3)+(10+8)")<<endl;cout<<"------------------"<<endl;*/
	return 0;
}