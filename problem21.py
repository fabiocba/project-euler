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

def main():
    amicables = []
    for i in range(1,10000):
        if i not in amicables:
            t = isAmicable(i)
            if t :
                amicables.append(i)
                amicables.append(t)
            
    return amicables

print sum(main())

#print sum([220, 284, 1184, 1210, 2620, 2924, 5020, 5564, 6232, 6368])

