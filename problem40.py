'''
An irrational decimal fraction is created by concatenating the positive 
integers:

0.123456789101112131415161718192021...

It can be seen that the 12th digit of the fractional part is 1.

If dn represents the nth digit of the fractional part, find the value of the 
following expression.

d1  d10  d100  d1000  d10000  d100000  d1000000
'''

i = 1
d = ''
while (len(d)<1000000):
    d += str(i)
    i = i + 1

print int(d[0])*int(d[9])*int(d[99])*int(d[999])*int(d[9999])*int(d[99999])*int(d[999999])
    
