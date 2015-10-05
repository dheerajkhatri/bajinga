#include <bits/stdc++.h>
using namespace std;

class Node{
	private:
		int w;
		int v;
	public:
		Node(int _v, int _w){
			v = _v;
			_w = w;
		}
		int getv(){return v;}
		int getw(){return w;}
};


class Graph{
	private:
		int v;
		list<Node>*adj;
		void TopologicalUtil(int u,int* visited, stack<int>& stack);
	public:
		Graph(int v);
		void addEdge(int u, int v, int w);
		stack<int> Topological();
};


Graph::Graph(int ver){
	v = ver;
	adj = new list<Node>[v];
}

void Graph::addEdge(int u, int v, int w){
	Node newnode(v,w);
	adj[u].push_back(newnode);
}


/*0 unvisited
-1 temproary
1 visited*/

void Graph::TopologicalUtil(int u,int* visited, stack<int>& Stack){
	if(visited[u]==-1){
		cout<<"u is "<<u<<endl;
		cout<<"there is atleat one cycle in the graph"<<endl;
		return;
	}
	else if(visited[u]==0){
		visited[u] = -1;
		for(list<Node>::iterator it=adj[u].begin();it!=adj[u].end();it++){
			Node node = *it;
			if(visited[node.getv()]){
				TopologicalUtil(node.getv(),visited,Stack);
			}
		}	
		visited[u]=1;
		Stack.push(u);
	}
}

stack<int> Graph::Topological(){	
	int* visited;
	visited = new int[v];
	stack<int>Stack;
	int i;
	for(i=0;i<v;i++)visited[i]=0;

	for(i=0;i<v;i++){
		if(visited[i]==0){
			TopologicalUtil(i,visited,Stack);
		}
	}
	return Stack;
}



int main(){
	Graph g(6);
    g.addEdge(0, 1, 5);
    g.addEdge(0, 2, 3);
    g.addEdge(1, 3, 6);
    g.addEdge(1, 2, 2);
    g.addEdge(2, 4, 4);
    g.addEdge(2, 5, 2);
    g.addEdge(2, 3, 7);
    g.addEdge(3, 5, 1);
    g.addEdge(3, 4, -1);
    g.addEdge(4, 5, -2);

    stack<int>s = g.Topological();
    int val;
    while(!s.empty()){
    	val = s.top();
    	cout<<val<<" ";
    	s.pop();
    }cout<<endl;
	return 0;
}