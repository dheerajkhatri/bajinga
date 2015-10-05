#include <bits/stdc++.h>
using namespace std;

int main(){
	std::ios::sync_with_stdio(false);
	int t,n,count,i,num;
	cin>>t;
	while(t--){
		cin>>n;
		if(n==1){
			cin>>num;
			cout<<num<<endl;
		}else{			
			cin>>num;			
			vector<int>	prev;
			prev.push_back(num);

			for(count=2;count<=n;count++){
				vector<int>cur;

				for(i=0;i<count;i++){
					cin>>num;
					cur.push_back(num);
				}

				for(i=1;i<=count;i++){
					if(i==1)cur[i-1] += prev[i-1];
					else if(i==count) cur[i-1] += prev[i-2];
					else{
						cur[i-1] += max(prev[i-1],prev[i-2]);
					}
				}

				prev = cur;
			}

			int max = std::numeric_limits<int>::min();
			for(i=0;i<n;i++){
				if(prev[i]>max)max = prev[i];
			}
			cout<<max<<endl;
		}

	}
	return 0;
}