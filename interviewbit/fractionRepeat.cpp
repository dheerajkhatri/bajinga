#include <bits/stdc++.h>
using namespace std;

struct data{
	long long r_div;
	long long r_rem;

	bool operator == (const data& tofind)const {
		return (tofind.r_div == r_div && tofind.r_rem==r_rem);
	}
};

bool isRepeating(long long down){	

	while(down>1){
		if(down%5==0)down/=5;
		else if(down%2==0)down/=2;
		else return true;
	}
	return false;
}

long long findgcd(long long a, long long b){  //first parameter is smaller
	if(a>b)return findgcd(b,a);

	if(!a)return b;	
	else if(a==1 || b==1)return 1;	
	else return findgcd(b%a,a);
}

long long lenRepeat(long long up, long long down){
	if(!isRepeating)return -1;
	bool factor2or5=true;

	while(factor2or5){
		if(!down%2)down /= 2 ;
		else if(!down%5)down /= 5;
		else factor2or5 = false;
	}

	long long curlen=1,maxlen, maxlenpossible = down-1;
	maxlen = down-1;
	string s = "9";    //cannot use this method to find len if the repeating part is very long works well with 	
	while(curlen<=maxlenpossible){ //repeating length upto 16

		if(!(stol(s)%down)){
			maxlen = curlen;
			return maxlen;
		}else{
			curlen++;
			s += '9';
		}
	}

}

string getNum(long long up, long long down){
	string s = "";
	long long divides,remaind;
	bool repeating = true;

	while(up>down){
		divides = up/down;

		s += to_string(divides);
		up -= down*divides;
	}
	if(up==down) {
		s += '1';
		return s;
	}

	if(s=="")s = "0.";
	else s += '.';

	up = up*10;
	vector<struct data>v;
	vector<struct data>::iterator repeat_point;

	while(true){
		divides = up/down;
		remaind = up-(down*divides);		

		//cout<<"up "<<up<<" down "<<down<<" divides "<<divides<<" remaind "<<remaind<<endl;
		struct data newdata;
		newdata.r_rem = remaind;
		newdata.r_div = divides;

		auto it = find(v.begin(),v.end(),newdata);		

		if(it==v.end() ){
			v.push_back(newdata);
			//s += to_string(divides);
			if(!remaind){
				repeating=false;
				break;
			}
		} else {
			repeat_point = it;
			break;
		}

		up = remaind*10;
	}

	if(repeating){
		for(auto jt = v.begin();jt!=repeat_point;jt++) s += to_string(jt->r_div);		
		s += '(';
		for(auto kt = repeat_point;kt!=v.end();kt++) s += to_string(kt->r_div);		
		s += ')';
	}else{
		for(auto lt=v.begin();lt!=v.end();lt++) s += to_string(lt->r_div);
	}



	return s;
}

int main(int argc,char*argv[]){
	long long up,down;	
	up = atoi(argv[1]);
	down = atoi(argv[2]);
	bool isneg = false;

	if(up==0)return 0;
	if(up<0){
		up = -up;
		isneg = !isneg;
	}
	if(down<0){
		down = -down;
		isneg = !isneg;
	}

	//cout<<"up "<<up<<" down "<<down<<endl;	
	long long gcd = 1;
	gcd = findgcd(up,down);
	//cout<<"gcd is "<<gcd<<endl;
	if(gcd!=1){
		up /= gcd;
		down /= gcd;
	}
	//cout<<"is repeating ? "<<isRepeating(down)<<endl;	
	
	string temp = "-";
	string result = getNum(up,down);
	if(isneg)result.insert(0,temp);

	int len = result.length();
	
	if(result[len-1]=='0'){
	    result.erase(result.end()-1);
	    result.erase(result.end()-1);
	}
	
	cout<<result<<endl;	
	return 0;
}