#include <bits/stdc++.h>
using namespace std;

template<class T1,class T2>

void copy(const T1 *source , T2 *dest, int size){
	for(int i=0;i<size;i++){
		dest[i]	= static_cast<T1>(source[i]);
	}
}


template <class T>
void print(T *data, int size){
	for(int i=0;i<size;i++){
		cout<<data[i]<<endl;
	}
}

int main(){
	// typecasting from int to double
	int i1[] = {1,2,3,4,5};
	double * d1;
	d1 = new double[5];
//	print(d1,5);
	copy(i1,d1,5);
	print(d1,5);
	d1[4] = 1.1;
//	print(d1,5);

	//typecasting from double to int
	double d2[] = {1.1,1.2,1.3,1.9,1.8};
	int* i2;
	i2 = new int[5];
	copy(d2,i2,5);
	print(i2,5);
	return 0;
}
