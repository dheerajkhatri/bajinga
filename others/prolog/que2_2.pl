inside(A,B) :- bigger(B,A);bigger(B,X),inside(A,X).

bigger(blue,green).
bigger(green,pink).
bigger(pink,violet).