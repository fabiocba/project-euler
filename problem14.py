'''
The following iterative sequence is defined for the set of positive integers:
n -> n/2 (n is even)
n -> 3n + 1 (n is odd)

Using the rule above and starting with 13, we generate the following sequence:

13  40  20  10  5  16  8  4  2  1
It can be seen that this sequence (starting at 13 and finishing at 1) contains 
10 terms. Although it has not been proved yet (Collatz Problem), it is thought
that all starting numbers finish at 1.

Which starting number, under one million, produces the longest chain?
NOTE: Once the chain starts the terms are allowed to go above one million.
'''

def collatzProblem(limit):
    chain = []
    
    if (limit % 2 == 0):
        node = limit / 2
    else:
        node = 3 * limit + 1
   
    chain.append(node)
    
    if (node != 1):
        chain.extend(collatzProblem(node))
            
    return chain

collatz = 0
maximum = 0

for i in xrange(999999, 0, -2):
    chain = collatzProblem(i)
    current = len(chain)+1
        
    if (current > maximum):
        maximum = current
        collatz = i

print collatz
