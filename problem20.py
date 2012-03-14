#!/usr/bin/python

def factorial (num) :
    fat = 1
    for i in range(num, 1, -1):
        fat = fat * i
    return fat
    
bigNumber = factorial(100)
numList = list(str(bigNumber))
total = sum(int(c) for c in numList)
print total

