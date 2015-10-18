thief(X)             :- long_brown_hair(X),wears(X,black_shoes).

long_black_hair(X)   :- stay_room(X,100).
short_brown_hair(X)  :- stay_room(X,102).
long_brown_hair(X)   :- stay_room(X,205).
long_brown_hair(X)   :- stay_room(X,210).

stay_room(X,205)     :- wears(X,black_coat).
stay_room(X,102)     :- wears(X,blue_shirt).
stay_room(X,210)     :- female(X),wears(X,red_gown).

wears(X,blue_shirt)  :- male(X),wears(X,black_tie).
wears(X,red_gown)    :- female(X),occupation(X,bridesmaid).
wears(X,black_shoes) :- female(X),wears(X,silver_bracelet).


male(james).
male(joe).
female(jenny).
female(joy).
female(jacy).

wears(james,black_coat).
wears(joe,black_shoes).
wears(jenny,silver_bracelet).

occupation(jenny,bridesmaid).
occupation(joy,bridesmaid).
occupation(jacy,bridesmaid).