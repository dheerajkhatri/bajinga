#include <bits/stdc++.h>
#include <string.h>
#include <stdlib.h>
using namespace std;

class String{
	private:
		enum{SZ=80};
		char str[SZ];
	public:
		String() {strcpy(str,"");}

		String(char ss[]) {strcpy(str,ss);
}
		void display() const{
			cout<<str<<endl;
		}

		String operator +(String ss) const{
			String temp;
			if(strlen(str)+strlen(ss.str)<SZ){
				strcpy(temp.str,str);				
				strcat(temp.str,ss.str);
				}else{
				cout<<"\nString size overflown";exit(1);
			}
			return temp;
		}
};

int main(){
	String s1 = "Merry Christmas!";
	//uses constructor 2
	String s2 = "Happy new year!";
	//uses constructor 2

	String s3;
	//uses constructor 1

	s1.display();
	s2.display();
	s3.display();
	//display strings

	s3 = s1 + s2;
	s3.display();	
	return 0;
}