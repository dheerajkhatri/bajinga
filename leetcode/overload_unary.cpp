#include <bits/stdc++.h>
using namespace std;

class Counter{
	private:
		int count;
	public:
		Counter() :count(0)
		{ }
		
		Counter(int c): count(c) //this counstructor is needed because we want to return unnamed object while
		{ }						 // returning from ++ operator functions

		int get_count(){
			return count;
		}

		Counter operator ++(){
			return(Counter(++count)); //here we are creating an unnamed object of counter class and returning it
		}							  // we can also do Counter temp;count++;temp.count=count;return temp;

		Counter operator ++(int){	//int in paran. to tell the complier that we want the postfix version
			return(Counter(count++));
		}

		// ostream& operator<< (ostream& out,Counter c){
		// 	out<<c.get_count();
		// 	return out;
		// }
};


int main(){
	Counter c1,c2;
	cout<<c1.get_count()<<" "<<c2.get_count()<<endl;
	++c1;//c1=1
	++c1;//c1=2
	++c2;//c2=1
	cout<<c1.get_count()<<" "<<c2.get_count()<<endl;
	c2 = c1++; //postfix increment c1=3 c2=2
	cout<<c1.get_count()<<" "<<c2.get_count()<<endl;
	return 0;
}
