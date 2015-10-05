#include <bits/stdc++.h>
using namespace std;
#define pb push_back

class Solution {
public:
    bool checkdia(vector<vector<char>> b , int val){
        char arr1[9] = {0};
        char arr2[9] = {0};

        for(int i=0;i<9;i++){
            int v = b[val-1][i]-'0';
            
            if(v>0){
                if(arr1[v-1])return false;
                else arr1[v-1] = 1;
            }
        }
        
        for(int j=0;j<9;j++){
            int vv = b[j][val-1] - '0';
            if(vv>0){
                if(arr2[vv-1])return false;
                else arr2[vv-1] = 1;
            }
        }
        return true;
    }

    bool checksquare(vector<vector<char>> b , int row, int col){    			
		int arr[9] = {0};			

		for(int r=row;r<row+3;r++){			
			for(int c=col;c<col+3;c++){
				int v = b[r][c]-'0';
				//cout<<"r c v are "<<r<<" "<<c<<" "<<v<<" "<<endl;				
				if(v>0) {
					if(arr[v-1]){cout<<arr[v-1]<<endl;return false;}
					arr[v-1] = 1;
				}
			}
		}
    	return true;
    }

    bool isValidSudoku(vector<vector<char>>& board) {
        
        for(int i=0;i<9;i++){
        	//cout<<"row col i is "<<i<<endl;
            if(!checkdia(board,i+1))return false;            
        }

        for(int row=0;row<9;row+=3){
        	for(int col=0;col<9;col+=3){
        		//cout<<"box row col are "<<row<<" "<<col<<endl;
        		if(!checksquare(board,row,col))return false;
        	}
        }
        
        return true;
    }
};


int main(){
	vector<vector<char>>v;
	vector<char>temp;

	temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('5');temp.pb('.');temp.pb('.');temp.pb('1');temp.pb('.');
	v.pb(temp);temp.clear();
	temp.pb('.');temp.pb('4');temp.pb('.');temp.pb('3');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');
	v.pb(temp);temp.clear();
	temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('3');temp.pb('.');temp.pb('.');temp.pb('1');
	v.pb(temp);temp.clear();
	temp.pb('8');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('2');temp.pb('.');
	v.pb(temp);temp.clear();
	temp.pb('.');temp.pb('.');temp.pb('2');temp.pb('.');temp.pb('7');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');
	v.pb(temp);temp.clear();
	temp.pb('.');temp.pb('1');temp.pb('5');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');
	v.pb(temp);temp.clear();
	temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('2');temp.pb('.');temp.pb('.');temp.pb('.');
	v.pb(temp);temp.clear();
	temp.pb('.');temp.pb('2');temp.pb('.');temp.pb('9');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');
	v.pb(temp);temp.clear();
	temp.pb('.');temp.pb('.');temp.pb('4');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');temp.pb('.');
	v.pb(temp);temp.clear();	
	

	Solution obj;
	cout<<obj.isValidSudoku(v)<<endl;
	return 0;
}