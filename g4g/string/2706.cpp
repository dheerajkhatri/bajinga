/*How to design a tiny URL or URL shortener?
This is simple Base62 encoding
*/

#include <iostream>
#include <vector>
#include <map>
#include <string>
#include <algorithm>
using namespace std;
#define map "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"

string idToShortURL(long long n){	
	string shorturl = "";	
	while(n){
		shorturl += map[n%62];
		n /= 62;
	}
	reverse(shorturl.begin(),shorturl.end());
	return shorturl;
}

long long shortURLtoID(string s){	
	long long id = 0;	
	for(int i=0;i<s.length();i++){

		if(s[i]>='a' and s[i]<='z'){
			id = id*62 + s[i] - 'a';

		}if(s[i]>='A' and s[i]<='Z'){
			id = id*62 + s[i] - 'A' + 26;			

		}else if(s[i]>='0' and s[i]<='9'){
			id = id*62 + s[i] - '0' + 52;
		}
	}
	return id;
}

int main(){
    int n = 12345;
    string shorturl = idToShortURL(n);
    cout << "Generated short url is " << shorturl << endl;
    cout << "Id from url is " << shortURLtoID(shorturl)<<endl;
    return 0;
}