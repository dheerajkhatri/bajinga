vector<Interval> Solution::insert(vector<Interval> &intervals, Interval newInterval) {
    
    if(newInterval.start>newInterval.end){
        int temp = newInterval.start;
        newInterval.start = newInterval.end;
        newInterval.end = temp;
    }
    
    
    vector<Interval>vv;
    if(!intervals.size()){
        vv.push_back(newInterval);
        return vv;
    }
    
    int i,len=intervals.size();
    bool newdone = false;    
    Interval cur;
    
    for(i=0;i<len;){
        if(!newdone && max(intervals[i].start,newInterval.start) < min(intervals[i].end,newInterval.end))
        {//newInterval is overlapping
            newdone = true;
            cur.start = min(intervals[i].start,newInterval.start);
            cur.end = max(intervals[i].end,newInterval.end);
            i++;
            while(i<len && (max(cur.start,intervals[i].start)<min(cur.end,intervals[i].end))){
                cur.start = min(intervals[i].start,cur.start);
                cur.end = max(intervals[i].end,cur.end);
                i++;
            }
            
            vv.push_back(cur);
            //new interval is merged
        }else{
            if(!newdone && newInterval.end<intervals[i].start ){
                newdone = true;
                vv.push_back(newInterval);
            }
            vv.push_back(intervals[i]);
            i++;
        }
    }
    
    if(!newdone){
        vv.push_back(newInterval);
    }
    
    return vv;
}
