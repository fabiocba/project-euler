'''
Triangle, pentagonal, and hexagonal numbers are generated by the following formulae:

Triangle        Tn=n(n+1)/2     1, 3, 6, 10, 15, ...
Pentagonal      Pn=n(3n1)/2     1, 5, 12, 22, 35, ...
Hexagonal       Hn=n(2n1)       1, 6, 15, 28, 45, ...
It can be verified that T285 = P165 = H143 = 40755.

Find the next triangle number that is also pentagonal and hexagonal.
'''

import math

def is_penta(num):
    a = 3
    c = 2*num
    delta = 1 + 12*c

    sqrtDelta = math.sqrt(delta)

    if float.is_integer(sqrtDelta):
        return ((1+sqrtDelta)%6==0)

def is_hexa(num):
    c = 8*num
    delta = 1 + c

    sqrtDelta = math.sqrt(delta)

    if float.is_integer(sqrtDelta):
        return ((1+sqrtDelta)%4==0)


i = 286
while(True):
    t = (i*(i+1))/2
    if is_penta(t) and is_hexa(t):
        print t
        break
    i += 1
