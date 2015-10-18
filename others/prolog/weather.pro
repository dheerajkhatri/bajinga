weather(phoneix,summer,hot).
weather(la,summer,warm).
weather(phoneix,winter,warm).

warmer_than(C1,C2) :-
weather(C1,summer,hot),
weather(C2,summer,warm),
write(C1),write(' is warmer that '),write(C2),nl.