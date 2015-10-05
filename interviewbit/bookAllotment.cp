int Solution::books(vector<int> &A, int B) {
    int i,avg=0,len=A.size(),max=-1,rembook,remstudent,curstudent,cur;
    sort(A.begin(),A.end());
    for(i=0;i<len;i++){
        avg+=A[i];
        if(A[i]>max)max=A[i];
    }
    
    
    if(len>B){
        curstudent = 1;
        i = 0;
        while(i<len && curstudent<B){
            rembook = len-i-1;
            remstudent = B-curstudent;
            
            cur = A[i++];
            while(i<len && cur<avg && rembook>remstudent){
                rembook = len-i-1;
                cur += A[i++];
            }
            
            curstudent++;
            if(cur>max)max = cur;
        }
    }
    
    return max;
}
