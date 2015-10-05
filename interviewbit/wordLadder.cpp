#include <bits/stdc++.h>
using namespace std;

bool isOneDiff(const string& A, const string& B) {
        if (A.size() != B.size())
            return false;
        int diff = 0;
        for (int i = 0; i < A.size(); ++i) {
            if (A[i] != B[i])
                ++diff;
            if (diff > 1)
                return false;
        }
        return diff == 1;
    }
    
    int ladderLength(string beginWord, string endWord, unordered_set<string>& dict) {

    	dict.insert(endWord);

        queue<pair<string, int> > que;
        que.push(make_pair(beginWord, 1));
        dict.erase(beginWord);

        while (!que.empty()) {
            pair<string, int> cur = que.front(); que.pop();
            for (auto it = dict.begin(); it != dict.end(); ) {
                if (isOneDiff(cur.first, *it)) {
                    if (*it == endWord) return cur.second + 1;
                    que.push(make_pair(*it, cur.second + 1));
                    it = dict.erase(it);
                } else ++it;
            }
        }
        return 0;
    }

int main(){
	unordered_set<string>in = {};
	cout<<ladderLength("aa","aa",in)<<endl;
	return 0;
}