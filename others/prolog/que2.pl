connected(X,Y) :- cONnected(X,Y);cONnected(X,Z),connected(Z,Y).

cONnected(a,b).
cONnected(a,d).

cONnected(b,c).

cONnected(d,c).
cONnected(d,e).
cONnected(d,g).

cONnected(e,f).

cONnected(g,e).
cONnected(g,i).