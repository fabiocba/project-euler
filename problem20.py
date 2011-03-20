def fatorial (num) :
    fat = 1
    for i in range(num, 1, -1):
        fat = fat * i
    return fat
    
        
def sumNumber(bigNumber):
    numList = list(str(bigNumber))
    total = sum(int(c) for c in numList)
    print total

    
sumNumber(fatorial(100))