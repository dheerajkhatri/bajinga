#include <bits/stdc++.h>
using namespace std;

struct word{
  int pos;
  vector<int>v;
  bool operator == (const word& w)const{
      return(v == w.v);
  }
};


struct wordHash{
  std::size_t  operator()(const word& w)const{
      int count = 0;
      for(auto it = (w.v).begin();it!=(w.v).end();++it){
          count += *it;
      }
      return (31*count);
  }
};

vector<vector<int> > /*Solution::*/anagrams(const vector<string> &A) {
    vector<vector<int>>ret;
    if(A.size()==0)return ret;
    int i,j,len=A.size();
    typedef unordered_set<word,wordHash>myset;
    
    myset ss;
    
    for(i=0;i<len;i++){
        vector<int>v(26,0);
        for(j=0;j<A[i].size();j++){
            v[(A[i])[j]-'a']++;
        }
        
        struct word newword;
        newword.pos = i+1;
        newword.v = v;
        
        auto it = ss.find(newword);
        if(it!=ss.end()){
            ret.push_back({it->pos,i+1});
        }else{
            ss.insert(newword);
        }
    }
    return ret;
}

int main(){

  return 0;
}