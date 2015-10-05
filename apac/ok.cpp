#include <bits/stdc++.h>
using namespace std;

struct myListNode{
    int key;
    int val;
    myListNode *prev,*next;
    myListNode (int k, int v):key(k),val(v),prev(NULL),next(NULL){}
};


struct dQueue{
    myListNode *front,*back;  
    int curNodes;
    dQueue() : front(NULL),back(NULL),curNodes(0){}
};


/*-------------------------------GLOBAL VARIABLES-----------------------------------------*/
unordered_map<int,myListNode*>um;
dQueue *globalq;
int globalCap;
/*-------------------------------GLOBAL VARIABLES-----------------------------------------*/


/*----------------------------LRU FUNCTIONS------------------------------------------------*/
int /*LRUCache::*/get(int key) {
    cout<<"GET QUERY "<<key<<" ? ";
    auto it = um.find(key);
    if(it==um.end()){
        cout<<"-1"<<endl;
        return -1;
    }
    else {
        cout<<(it->second)->val<<endl;
        return (it->second)->val;
    }
}

/*LRUCache::*/void LRUCache(int capacity) {
    um.clear();
    globalq = new dQueue;
    globalCap = capacity;
}
/*----------------------------LRU FUNCTIONS------------------------------------------------*/


myListNode* getNode(int key, int value){
    myListNode *newnode = new myListNode(key,value);
    return newnode;
}

dQueue* getQueue(){
    dQueue *myq = new dQueue();
    return myq;
}

void printdQueue(){
    myListNode *crawl = globalq->back;
    cout<<"number of elements are "<<um.size()<<endl;
    while(crawl){
        cout<<crawl->key<<"->"<<crawl->val<<" ";
        crawl = crawl->next;
    }
    cout<<endl;
}

void removeBack(){
    
    if(globalq->curNodes>=1){
        auto it = um.find((globalq->back)->key);
        um.erase(it);
        
        if(globalq->back->next){
            globalq->back = (globalq->back)->next;
            (globalq->back)->prev = NULL;
        }else{//only one node is present
            globalq->back = NULL;
            globalq->front = NULL;
        }
        
        globalq->curNodes = (globalq->curNodes)-1;
    }
    return;
}

void insertFront(int key, int value){
    
    myListNode *newnode = getNode(key,value);
    
    if(globalq->front!=NULL){
        globalq->front->next = newnode;
        newnode->prev = globalq->front;
    }
    
    globalq->front = newnode;
    globalq->curNodes = (globalq->curNodes)+1;
    
    if(globalq->back==NULL){
        globalq->back = newnode;
    }
    
    um[key] = newnode;
    return;
}

void /*LRUCache::*/sset(int key, int value) {
    auto it = um.find(key);
    
    
    if(it==um.end()){ //if key is not present 
        
        
        if(globalCap<=um.size()){
            removeBack();
        }
        insertFront(key,value);
        
    }else{ // if key is present
        
        //cout<<key<<"is already presnet"<<endl;
        //remove from prev position
        myListNode *temp = it->second;
        
        if(temp->prev){
            temp->prev->next = temp->next;
            if(temp->prev->next==NULL)globalq->front = temp->prev; //if front node is removed
        }
        
        if(temp->next){
            temp->next->prev = temp->prev;
            if(temp->next->prev==NULL)globalq->back = temp->next; //if back node is removed
        }
        
        if(temp->prev==NULL && temp->next==NULL){
            globalq->front = NULL;
            globalq->back = NULL;
        }
        
        globalq->curNodes = (globalq->curNodes)-1;
        um.erase(it);
        
        //insert at front
        insertFront(key,value);
    }
    cout<<"after operaiont queue is "<<key<<" "<<value<<endl;
    printdQueue();
}

int main(){    

    int operation;
    int capacity;
    
    cin>>operation>>capacity;

    LRUCache(capacity);

    cout<<"1 to insert"<<endl;
    cout<<"2 to get"<<endl;
    cout<<"3 to exit";

    int in;
    int s1,s2,g;

    while(true){
        cin>>in;
        if(in==3)break;
        else if(in==1){
            cin>>s1>>s2;
            sset(s1,s2);
        }else{
            cin>>g;
            get(g);
        }
    }

    return 0;
}