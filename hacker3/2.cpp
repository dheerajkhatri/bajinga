#include <bits/stdc++.h>
using namespace std;


int main() {
    std::ios::sync_with_stdio(false);
    map<int,int>mm;
    int n,a,count=0,temp=0,total;
    cin>>n;
    total = n*n;
    
    for(int i=0;i<n;i++){
        cin>>a;
        auto it = mm.find(a);
        if(it==mm.end())mm[a]=1;
        else it->second = (it->second)+1;
    }           

    for(auto i:mm){    	
    	//cout<<n<<" "<<i.second<<" "<<temp<<endl;    	
        count += (n-i.second-temp)*i.second;
        temp += i.second;        
    }
    
    cout<<double(count)/double(total)<<endl;
    return 0;
}
