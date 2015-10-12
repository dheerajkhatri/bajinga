#include <bits/stdc++.h>
using namespace std;

struct adjNode{
    int dest;
    struct adjNode* next;
};

struct adjList{
    struct adjNode *head;
};

struct Graph{
    int v;
    struct adjList* arry;
};

adjNode* getNode(int dest){
    adjNode* newnode;
    newnode = new struct adjNode;
    newnode->dest = dest;
    newnode->next = NULL;
    return newnode;
}

Graph* createGraph(int v){
    struct Graph* graph;
    graph =  new struct Graph;
    graph->v = v;
    graph->arry = new adjList[v];

    for(int i=0;i<v;i++){
        graph->arry[i].head = NULL;
    }
    return graph;
}

void addEdge(Graph *g, int src, int dest){
    adjNode* newnode;
    newnode = getNode(dest);
    newnode->next = g->arry[src].head;
    g->arry[src].head = newnode;

    newnode = getNode(src);
    newnode->next = g->arry[dest].head;
    g->arry[dest].head = newnode;
}

void printGraph(Graph* graph){
    int v = graph->v;
    for(int i=0;i<v;i++){
        adjNode *crawl = graph->arry[i].head;
        cout<<"for source "<<i<<" list is ";
        while(crawl!=NULL){
            cout<<crawl->dest<<" ";
            crawl = crawl->next;
        }
        cout<<endl;
    }
}

int main(){
    int v = 5;
    struct Graph* graph;
    graph = createGraph(v);
    addEdge(graph, 0, 1);
    addEdge(graph, 0, 4);
    addEdge(graph, 1, 2);
    addEdge(graph, 1, 3);
    addEdge(graph, 1, 4);
    addEdge(graph, 2, 3);
    addEdge(graph, 3, 4);

    printGraph(graph);
    return 0;
}
