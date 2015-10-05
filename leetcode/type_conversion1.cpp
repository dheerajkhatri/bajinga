/*there are two ways to convert one type to another:
	Conversion Constructor  (if specified in the desination)
	Conversion Opeartor   (if specified in the source)
*/

#include <bits/stdc++.h>
using namespace std;

class Distance{
	private:
		const float MTF; 
		int feet;
		float inches;
		
	public:
		Distance():feet(0),inches(0),MTF(3.280833F){}

		Distance(float meters):MTF(3.280833F){
			float fltfeet = MTF*meters;
			feet = int(fltfeet);
			inches = 12*(fltfeet-feet);
		}

		Distance(int ft, float in):feet(ft),inches(in),MTF(3.280833F){}

		void getdistance(){
			cout<<"\nenter feet: ";cin>>feet;
			cout<<"\nenter inches: ";cin>>inches;
		}

		void showdistance(){
			cout<<feet<<"-"<<inches<<endl;
		}

		operator float() const{						//return distance in meter
			float fracfeet = inches/12;
			fracfeet += static_cast<float>(feet);
			return (fracfeet/MTF);
		}
};


int main(){
	
	Distance d1(2.35);
	d1.showdistance();

	float mtrs = static_cast<float>(d1);
	cout<<mtrs<<endl;

	Distance d2(7,8.51949);
	d2.showdistance();

	mtrs = d2;
	cout<<mtrs<<endl;
	return 0;
}