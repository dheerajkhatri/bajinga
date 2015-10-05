void Solution::reverseWords(string &A) {
    if(A.length()<=1 && A[0]!=' ')return;
		reverse(A.begin(),A.end());
		int i,start,end,len=A.length(),ss,se;

		for(i=0;i<A.length();){
			while(i<A.length() && A[i]==' ')i++;
			start = i++;
			while(i<A.length() && A[i]!=' ')i++;
			end = i;
			reverse(A.begin()+start,A.begin()+end);
			i++;
			ss = i;
			while(i<A.length() && A[i]==' ')i++;
			se = i;
			if(ss!=se){
				A.erase(A.begin()+ss,A.begin()+se);
				i -= se-ss;
			}
		}

		for(i=0;i<A.length();i++) if(A[i]!=' ')break;		
		A = A.substr(i,A.length()-i);	

		for(i=A.length()-1;i>=0;i--) if(A[i]!=' ')break;				
		A = A.substr(0,i+1);
}
