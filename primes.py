def primeFactors(n, factor):
    factors = []
    while(n % factor != 0):
        factor = factor + 1

    factors.append(factor)
    
    if n > factor:
        factors.extend(primeFactors(n / factor, factor))
        
    return factors


