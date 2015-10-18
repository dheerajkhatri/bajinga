#include <bits/stdc++.h>
using namespace std;

void print(map<int,vector<int>>& mm){
	for(auto const &it:mm){	 //now it is whatever in the container  --> pair(int->vector<int>)
		cout<<it.first<<" -> ";
		for(auto jt:it.second){ //now jt is whatever in the container it.second  -->(int)
			cout<<jt<<" ";
		}
		cout<<endl;
	}
}


int main(){
	int n,k,temp,max=numeric_limits<int>::min(),num1,num2,num3,i,count=0,pos1=-1,pos2,pos3,j,kk;
	cin>>n>>kk;
	vector<int>vv;
	map<int,vector<int>>mm;	
	map<int,vector<int>>::iterator it;	

	for(i=0;i<n;i++){
		cin>>temp;
		vv.push_back(temp);
		if(max<temp)max = temp;

		it = mm.find(temp);
		if(it==mm.end()){
			mm[temp] = {i};
		}else{
			(it->second).push_back(i);
		}
	}
	//print(mm);
		
	for(auto pt:vv){
		num1 = pt;		
		num2 = num1*kk;		
		num3 = num2*kk;

		pos1++; 		

		if(num3>max){			
			continue;
		} else{									
			map<int,vector<int>>::iterator jt = mm.find(num2);if(jt==mm.end()){/*cout<<"num2 not found"<<endl;*/continue;}
			map<int,vector<int>>::iterator kt = mm.find(num3);if(kt==mm.end()){/*cout<<"num3 not found"<<endl;*/continue;}
				
			for(j=0;j<(jt->second).size();j++){				
				if((jt->second)[j]>pos1){				
					pos2 = (jt->second)[j];			
					k = 0;
					while(k<(kt->second).size() && (kt->second)[k]<=pos2)k++;
					pos3 = (kt->second)[k];					
					count += (kt->second).size()-k;						
				}
			}			
		}		
	}
	cout<<count<<endl;	

	return 0;
}