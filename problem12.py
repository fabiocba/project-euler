'''
The sequence of triangle numbers is generated by adding the natural numbers.
So the 7th triangle number would be 1 + 2 + 3 + 4 + 5 + 6 + 7 = 28. 
The first ten terms would be:
1, 3, 6, 10, 15, 21, 28, 36, 45, 55, ...
Let us list the factors of the first seven triangle numbers:
1: 1
3: 1,3
6: 1,2,3,6
10: 1,2,5,10
15: 1,3,5,15
21: 1,3,7,21
28: 1,2,4,7,14,28
We can see that 28 is the first triangle number to have over five divisors.
What is the value of the first triangle number to have over five hundred divisors?
'''

import math
import primes

sums = {1: 1}

def summation(n):
    if n in sums: return sums[n]
    sums[n] = n + summation(n-1)    
    return sums[n]

def numDivisors(n):
    fatores = {}

    if (n<=2):
        return
    
    for i in primes.primeFactors(n, 2):
        if i in fatores:
            fatores[i] = fatores[i] + 1
        else:
            fatores[i] = 1
    
    numDiv = 1
    for i in fatores:
        numDiv = numDiv*(fatores[i]+1)
        
    return numDiv

divs = 0
i = 0
triangle = 0

while (divs<500):
    i = i + 1
    triangle = summation(i)
    divs = numDivisors(triangle)

print triangle
