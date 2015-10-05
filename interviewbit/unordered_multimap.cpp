#include <bits/stdc++.h>
using namespace std;

struct foo{
	int top;
	int down;
};

inline bool operator<(const foo& lhs, const foo& rhs){
  return lhs.top < rhs.down;
}

typedef set<foo> myset;
typedef map<int,foo> mymap;

int main(int argc, char **argv)
{
    myset s;
    struct foo f;f.top = 0 ; f.down = 1; s.insert(f);

    mymap m;
	struct foo ff;ff.top = 0 ; ff.down = 1; m.insert({0,ff});        

    for(auto it = s.begin(); it != s.end(); it++) {
        cout << it->first << '\t';
        cout << it->second << endl;
    }

    for(auto it = m.begin(); it != m.end(); it++) {
        cout << it->first << '\t';
        cout << it->second << endl;
    }

    /*cout << "all values to a" << endl;
    for(auto it = map.find('a'); it != map.end(); it++) {
        cout << it->first << '\t' << it->second << endl;
    }*/

}