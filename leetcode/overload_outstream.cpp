#include <bits/stdc++.h>
using namespace std;


class point{
	public:
		double getx(){
			return x;
		}
		void setx(double v){
			x = v;
		}
		double gety(){
			return y;
		}
		void sety(double v){
			y = v;
		} 
		point(double v1,double v2){
			x = v1;
			y = v2;
		}
	private:

		double x;
		double y;
};

point operator+ (point& p1, point& p2){
	point sum{p1.getx()+p2.getx(),p1.gety()+p2.gety()};
	return sum;
}
		

ostream& operator<< (ostream& out, point p){
	out<<"("<<p.getx()<<","<<p.gety()<<")";
	return out;
}


int main(){
	point a{2.5,3.5};
	point b{2.5,4.5};
	cout<<" a = "<<a<<" b = "<<b<<endl;
	cout<<"sum = "<<a+b<<endl;
	return 0;
}
