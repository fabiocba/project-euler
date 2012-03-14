#!/usr/bin/python

fibs = {0: 0, 1: 1}

def fib(n):
    if n in fibs: return fibs[n]
    if n % 2 == 0:
        fibs[n] = ((2 * fib((n / 2) - 1)) + fib(n / 2)) * fib(n / 2)
        return fibs[n]
    else:
        fibs[n] = (fib((n - 1) / 2) ** 2) + (fib((n+1) / 2) ** 2)
        return fibs[n]

nth=value = 0

while len(str(value)) < 1000:
    value = fib(nth)
    nth = nth + 1
print nth-1
