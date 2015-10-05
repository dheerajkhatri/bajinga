#include <bits/stdc++.h>
using namespace std;


class point{
	public:
//		point(double x, double y){x=x;y=y;}           //simple assignment (not initialization)
//		point(){this->x=0;this->y=0;}  //self refrential method (doctor who :P)
		point() :x(0.0),y(0.0){} //intializer list must for const variables

	private:
		double x,y;

};



int main(){
//	const int special;
//	special = 10;

	const int special = 10;
	cout<<special<<endl;
	return 0;
}
