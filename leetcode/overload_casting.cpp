#include <bits/stdc++.h>
using namespace std;


typedef enum days{SUN,MON,TUE,WED,THU,FRI,SAT} days;

inline days operator+ (days d){
	return (static_cast<days>((static_cast<int>(d)+1)%7));
}

ostream& operator<< (ostream& outd,ays d){
	switch(d){
		case MON:out<<"MON";break;
		case TUE:out<<"TUE";break;
		default :out<<"other";break;
	}
	return out;
}

int main(){
	days d = MON,e;
	e = +d;
	e = +e;
	cout<<d;
	cout<<e<<endl;
	return 0;
}
