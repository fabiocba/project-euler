#import math.*

def fifth_power_sum(number):
    soma = 0
    digits = str(number)
    for i in digits:
        soma += pow(int(i), 5)
    return soma

def __main__():
    flag = 1
    count = 0

    soma = 0
    numbers = []

    while count<100000:
        soma = fifth_power_sum(count)
        count +=1

        if soma==count:
            numbers.append(soma)

    print(numbers)

__main__()
