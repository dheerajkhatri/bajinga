#include <bits/stdc++.h>
using namespace std;

class Print{
	public:
		void print(vector<int>v);
		void print(vector<vector<int>>vv);
		void print(set<vector<int>>sv);
		void print(list<int>l);
		void print(int *arr, int size);
		void print(int **arr, int row, int col);
};