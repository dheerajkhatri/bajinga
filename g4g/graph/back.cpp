		int start = 0;
		int end = vv.size()-1;
		while(start<=end){
			int mid = start+(end-start)/2;
			cout<<"checking for "<<vv[mid]<<endl;
			cout<<possible(vv[mid],mm)<<" returned "<<endl;
			if(possible(vv[mid],mm)==0){
				total = vv[mid];
				break;
			}else if(possible(vv[mid],mm)==1){
				start = mid+1;
			}else if(possible(vv[mid],mm)==-1){
				end = mid-1;
			}
		}