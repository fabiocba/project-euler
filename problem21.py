'''
Let d(n) be defined as the sum of proper divisors of n (numbers less than n
which divide evenly into n).
If d(a) = b and d(b) = a, where a  b, then a and b are an amicable pair and
each of a and b are called amicable numbers.

For example, the proper divisors of 220 are 1, 2, 4, 5, 10, 11, 20, 22, 44, 55
and 110; therefore d(220) = 284. The proper divisors of 284 are 1, 2, 4, 71 and
142; so d(284) = 220.

Evaluate the sum of all the amicable numbers under 10000.
'''

def isAmicable(n):
    s1=s2=0
    for i in range(1,n):
        if n%i==0:
            s1 = s1 + i
            
    if s1 != n and s1 < 10000:
        for j in range(1,s1):
            if s1%j==0:
                s2 = s2 + j
    
        if s2==n:
            return s1
        
    return

amicables = []
for i in range(1,10000):
    if i not in amicables:
        t = isAmicable(i)
        if t :
            amicables.append(i)
            amicables.append(t)
        
print sum(amicables)
