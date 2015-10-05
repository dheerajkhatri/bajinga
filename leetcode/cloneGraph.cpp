#include <bits/stdc++.h>
using namespace std;

struct UndirectedGraphNode {
	int label;
	vector<UndirectedGraphNode *> neighbors;
	UndirectedGraphNode(int x) : label(x) {};
};


class Solution {
public:
	UndirectedGraphNode* newNode(int label){
		UndirectedGraphNode *newnode = new UndirectedGraphNode(label);
		return newnode;
	}

	void getNodes(UndirectedGraphNode *root, set<int>& visited){				
		visited.insert(root->label);

		if((root->neighbors).size()){			
			for(auto it:root->neighbors){								
				if(visited.find(it->label)!=visited.end() || it->label==root->label){
					continue;
				} else{
					getNodes(it,visited);
				}   									
			}   
		}
	}

	void cloneUtil(UndirectedGraphNode* node, map<int,UndirectedGraphNode*>& mm, 
		set<int>& visited,int totalnodes){
		
		if(visited.size()==totalnodes)return;		
		if(visited.find(node->label)!=visited.end())return;
		
		for(auto it:node->neighbors){			
			(mm[node->label])->neighbors.push_back(mm[it->label]);					
		}

		visited.insert(node->label);
		for(auto it:node->neighbors){
			if(visited.find(it->label)==visited.end())
				cloneUtil(it,mm,visited,totalnodes);
		}  		
	}

    UndirectedGraphNode *cloneGraph(UndirectedGraphNode *node) {  		
  		if(node==NULL)return node;
  		set<int>visited;   		
  		getNodes(node,visited);  		
  		int totalnodes = visited.size(); 
  		map<int,UndirectedGraphNode*>mm;

  		for(auto it:visited){  			
  			mm[it] = newNode(it);
  		}

  		visited = {};
		cloneUtil(node,mm,visited,totalnodes);  		
		return mm[node->label];		
    }
};

int main(){
	
	UndirectedGraphNode *newnode = new UndirectedGraphNode(0);
	(newnode->neighbors).push_back(newnode);
	(newnode->neighbors).push_back(newnode);

	Solution obj;
	UndirectedGraphNode *ret =  obj.cloneGraph(newnode);	
	
	cout<<"node label "<<ret->label<<endl;
	cout<<"neighbors ..";
	for(auto it:ret->neighbors)
		cout<<it->label<<" ";	
	cout<<endl;
	return 0;
}