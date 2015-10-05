#include <bits/stdc++.h>
using namespace std;

bool checkNum(const string& A){
    int start,end,i,j,len = A.length(),decpos,epos; //before point start,after point start
    bool pointOccured=false,minusOccured=false;
    
    i=0;
    while(i<len && A[i]==' ')i++;
    if(i==len)return 0; //if all are space
    start = i;
    

    i = len-1;
    while(i>=0 && A[i]==' ')i--;
    if(i<start)return 0; //if all are space
    end = i;
    
    
    //cout<<"start->"<<start<<" end->"<<end<<endl;
    
    if(start==end){
        if(A[start]<'0' || A[start]>'9')return false;
    }
    
    //check if first is + or - then move pointer 
    i = start;
    if(A[i]=='-' || A[i]=='+')i++;
    
    //check before '.'
    while(i<=end){
        if(A[i]=='.' || A[i]=='e')break;
        if(A[i] > '9' || A[i] < '0')return 0;
        i++;
    }


    if(i==end+1){
        
        //string completed
        return true;  
    }else if(A[i]=='e'){
    
        //e comes before decimal    
        i++;
        if(i==end+1)return false;
        if(A[i]=='+' || A[i]=='-')i++;
        if(i==end+1)return false;
        
        while(i<=end){
            if(A[i]<'0' || A[i]>'9')return false;
            i++;
        }
        return true;
        
    }else if(A[i]=='.'){
        
        i++;
        if(i==end+1 || A[i]=='e')return false;
        
        while(i<=end && A[i]!='e'){
            if(A[i]<'0' || A[i]>'9')return false;
            i++;
        }
        
        if(i==end+1)return true;
        
        if(A[i]=='e'){
            
            i++;
            if(i==end+1)return false;
            if(A[i]=='+' || A[i]=='-')i++;
            if(i==end+1)return false;
            
            while(i<=end){
                if(A[i]>'9' || A[i]<'0')return false;       
                i++;
            }
            
            return true;
        }
        
    }
    
    return false;
}


int /*Solution::*/isNumber(const string &A) {
    return checkNum(A);
}

int main(){
    string s = "1e10";
    cout<<s<<" -> ";
    //cin>>s;
    cout<<isNumber(s)<<endl;
    return 0;
}