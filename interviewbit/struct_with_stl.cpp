/*When a function is declared as const, it can be called on any type of object.
Non-const functions can only be called by non-const objects.*/

#include <bits/stdc++.h>
using namespace std;


/*@@@------------------todefine vector of struct-----------------------------------------------*/

struct monster{
	int id;
	int weight;
	string name;
};

//struct to find in vector of struct
struct monster_finder{
	int tofindid;
	monster_finder(int id):tofindid(id){}
	bool operator() (struct monster const& m) const{
		return m.id == tofindid;
	}
};

//struct to sort vector of struct
struct id_greater{
	bool operator ()(struct monster const& m1, struct monster const& m2) const{
		return m1.id>m2.id;
	}
};

//user defined comparison to be used in sorting
bool monster_sorter(const monster &m1, const monster &m2){
	return m1.id>m2.id;
}
/*@@@------------------todefine vector of struct-----------------------------------------------*/

/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/

/*@@@ ------------------todefine unordered set of struct---------------------------------------*/
struct slope{
	int x2x1;
	int y2y1;	

	slope(int x, int y){
		x2x1 = x;
		y2y1 = y;
	}

	bool operator==(const slope& tocompare)const{
		cout<<"tocompare "<<x2x1<<" "<<y2y1<<endl;
		return ((tocompare.y2y1)*x2x1 == (tocompare.x2x1)*y2y1);
	}
};


struct slopeHash{
	size_t operator() (const slope& s)const{
		return  s.y2y1/s.x2x1;
	}
};
/*@@@ ------------------todefine unordered set of struct---------------------------------------*/



int main(){
	vector<struct monster>myMonsters;
	struct monster m1;m1.id=1;m1.weight=1000;m1.name="don"; myMonsters.push_back(m1);
	struct monster m2;m2.id=3;m2.weight=100;m2.name="aon";myMonsters.push_back(m2);
	struct monster m3;m3.id=2;m3.weight=500;m3.name="gon";myMonsters.push_back(m3);

	for(auto it=myMonsters.begin();it!=myMonsters.end();it++){
		cout<<it->id<<" "<<it->weight<<" "<<it->name<<endl;
	}

	//sort(myMonsters.begin(),myMonsters.end(),monster_sorter);   //using bool function	
	sort(myMonsters.begin(),myMonsters.end(),id_greater());       //using struct function

	cout<<"------after sorting---------- "<<endl;

	for(auto it=myMonsters.begin();it!=myMonsters.end();it++){
		cout<<it->id<<" "<<it->weight<<" "<<it->name<<endl;
	}

	cout<<"-------------------"<<endl;
	cout<<"find monster with id 2 ?"<<endl;
	auto it = find_if(myMonsters.begin(),myMonsters.end(),monster_finder(2));

	/*@@@@ or we can overload == operator in struct itself and use find instead of find_if
		one more way to use find_if is to define lambda function*/

	cout<<"name of id 2 monster is "<<jt->name<<endl;

/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/

	unordered_set<slope,slopeHash>us;//second parameter is user define hashfunction
	struct slope slope1(1,2);
	us.insert(slope1);

	struct slope slope2(3,6);
	auto it = us.find(slope2);

	if(it==us.end())cout<<"not foudn"<<endl;
	else {
		cout<<"found"<<endl;
		cout<<it->x2x1<<" "<<it->y2y1
	}

/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/

	return 0;
}