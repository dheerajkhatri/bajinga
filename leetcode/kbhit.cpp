#include <bits/stdc++.h>
#include <conio.h>
using namespace std;

bool getInput(char* c){
	if(kbhit()){
		*c = getch();
		return true;
	}
	return false;
}

int main(){
	cout<<"main in"<<endl;
	char key = ' ';
	/*while(key!='q'){		
		while(!getInput(&key)){}
		cout<<"You Pressed "<<key<<endl;
	}*/
	cout<<"main out"<<endl;
	return 0;
}