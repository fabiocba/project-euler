import math
import time

sums = {1: 1}
def somatorio(n):
    if n in sums: return sums[n]
    sums[n] = n + somatorio(n-1)    
    return sums[n]


def fatoresPrimo(n, factor):
    factors = []
    while(n % factor != 0):
        factor = factor+1
        
    factors.append(factor)
    
    if n > factor:
        factors.extend(fatoresPrimo(n/factor, factor))
        
    return factors

def numDivisores(n):
    fatores = {}

    if (n<=2):
        return
    
    for i in fatoresPrimo(n, 2):
        if i in fatores:
            fatores[i] = fatores[i] + 1
        else:
            fatores[i] = 1
    
    numDiv = 1
    for i in fatores:
        numDiv = numDiv*(fatores[i]+1)
        
    return numDiv

def main():
    divs = i = triangulo = 0
    while (divs<500):
        i = i + 1
        triangulo = somatorio(i)
        divs = numDivisores(triangulo)
    print divs
    print triangulo
    
main()