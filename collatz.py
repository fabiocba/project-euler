def collatzProblem(limit):
    chain = []
    
    if (limit%2==0):
        node = limit/2
    else:
        node = 3*limit+1
    
    chain.append(node)
    
    if (node != 1):
        #print node
        chain.extend(collatzProblem(node))
            
    return chain

collatz = 0
maximum = 0
for i in range(999999, 0, -2):
    chain = collatzProblem(i)
    #print (i, chain)
    current = len(chain)+1
        
    if (current > maximum):
        maximum = current
        collatz = i

print collatz