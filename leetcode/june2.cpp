#include <bits/stdc++.h>
using namespace std;
typedef unsigned long long LL;

struct mystruct{
	double areaVec;
	int mapping;
	mystruct(double d, int i):areaVec(d),mapping(i){}
};


float find_area(int *x, int *y,int vertices)
{
    float area = 0;
    int  i, j, k;   // indices

    if (vertices < 3) return 0;  // a degenerate polygon

    for (i=1, j=2, k=0; i<vertices; i++, j++, k++) {
        area += x[i] * (y[j] - y[k]);
    }
    area += x[vertices] * (y[1] - y[vertices-1]);  // wrap-around term
    return area / 2.0;
}

void printArea(vector<mystruct> obj){
	vector<mystruct>::iterator iter;	

	for(iter=obj.begin();iter!=obj.end() ;iter++){
		cout<<iter->mapping<<" ";
	}
	cout<<endl;
}

struct sortbyMapping{
	inline bool operator()(const mystruct& struct1,const mystruct& struct2){
		return(struct1.areaVec<struct2.areaVec);
	}
};

int main(){
	int t,n,m,i,j;
	double area;	
	cin>>t;
	while(t--){
		cin>>n;
		vector <mystruct> vec;		
		//for each polygon		
		for(i=0;i<n;i++){			
			cin>>m;			
			int *x,*y;
			x = new int[m+1];
			y = new int[m+1];
			//for each polygon input cordinates and find area
			for(j=0;j<m;j++){
				cin>>x[j]>>y[j];				
			}
			x[m] = x[0];
			y[m] = y[0];
			//now find the area of polygon and store in vec
			area = fabs(find_area(x,y,m));
			vec.push_back(mystruct(area,i));			
		}
		//printArea(vec);
		
		sort(vec.begin(),vec.end(),sortbyMapping());
		printArea(vec);
		
	}
	return 0;
}