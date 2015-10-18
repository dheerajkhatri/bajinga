#include <bits/stdc++.h>

using namespace std;

int main(){
    int T;
    cin>>T;
    for(int t = 1; t<= T; t++)
    {
        int n;
        cin>>n;
        long double p;
        long double k;
        vector<pair<long double ,long double > >v;
        for(int i = 0 ; i< n ; i++)
        {
            cin>>p>>k;
            v.push_back(make_pair(p,k));
        }
        sort(v.begin(),v.end(),greater<pair<long double ,long double > >());
        long double l=-1 ,r=-1;
        bool found = false;
        for(int i = 0 ; i<v.size() ; i++)
        {
            if(v[i].first == 100.00L){
                r = v[i].second;
                found = true;
                break;
            }
            if(v[i].first==0)
                continue;
            if(r==-1)
                r = v[i].second*100.0L/v[i].first;
            else
                r = min(r,v[i].second*100.0L/(v[i].first));
            if(l==-1)
                l = v[i].second*100.0L/(v[i].first+0.9999999999L);
            else
                l = max(l,v[i].second*100.0L/(v[i].first+0.9999999999L));
            //cout<<l<<" "<<r<<endl;
        }
        if (((r-l)<1.000000000L )|| (found)){
            cout<<"Case #"<<t<<": "<<(long long)r<<endl;
        }
        else{
            cout<<"Case #"<<t<<": -1\n";
        }
    }
    return 0;
}

