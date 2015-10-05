// strconv.cpp
// convert between ordinary strings and class String
#include <iostream>
using namespace std;
#include <string.h>       //for strcpy(), etc.

class String{
	private:
	enum { SZ = 80 };	 
	char str[SZ];
	 
	public:
	String()	 { str[0] = '\0'; }

	String( char s[] ){ strcpy(str, s); }
	
	void display() const{ cout << str; }
	
	operator char*() { return str; }
};

int main()
{
	String s1;

	char xstr[] = "Joyeux Noel! ";
	s1 = xstr;
	s1.display();	 
	cout<<endl;
	
	String s2 = "Bonne Annee!";

	cout << s2<<endl; //use conversion operator 	
	/* if we specify static_cast<char*> then compiler will directly look for the conversion opeartor function
	
	if we dont specify then the compiler looks for a way to convert s2 to a type that << does know about.
	We specify the type we want to convert it to with the char* cast, so it looks for a conversion from
	String to C-string, finds our operator char*() function, and uses it to generate a C-string, which is
	then sent on to << to be displayed.*/	

	char * pstr;
	pstr = static_cast<char*>(s2);
	cout<<pstr<<endl;

	return 0;
}
