#include <iostream>
using namespace std;

//recursie binary search for array
int rBinarySearch(int arr[],int size,int left,int right,int element){
		
		if( size==0 || element<arr[0] || element>arr[size-1] ||left>right)return -1;		

		else{
			
			int middle = left+(right-left)/2;

			//cout<<"left "<<left<<" right"<<right<<" middle "<<middle<<endl;
			
			if(element == arr[middle] )return middle;

			else if(element>arr[middle]){
				return rBinarySearch(arr,size,middle+1,right,element);

			}else{
				return rBinarySearch(arr,size,left,middle-1,element);
			}
		}
}


//iterative binary search for array
int iBinarySearch(int arr[],int size,int element){
		if( size==0 || element<arr[0] || element>arr[size-1])return -1;
		else{
			int middle,left = 0;
			int right = size-1;			

			while(left<=right){
				middle = left+(right-left)/2;

				if(element == arr[middle])return middle;
				
				else if(element>arr[middle]){
					left = middle+1;					
				}	

				else if(element<arr[middle]){
					right = middle-1;
				}
			}
			return -1;
		}
}



int main(){
	int arr[] = {4,5,7,9,10,34,56,676,2323};
	int size = sizeof(arr)/sizeof(arr[0]);

	cout<<"pos of element is "<<rBinarySearch(arr,size,0,8,2323)<<endl;
	cout<<"pos of element is "<<iBinarySearch(arr,size,58)<<endl;
	
	return 0;
}