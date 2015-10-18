maRRied(michael,mary).
maRRied(greg,diana).
maRRied(diana,shyam).
maRRied(jhon,elina).

married(X,Y) :- maRRied(Y,X);maRRied(X,Y).