def irracional():
    i = 1
    d = ''
    while (len(d)<1000000):
        d += `i`
        i = i + 1
    
    print int(d[0])*int(d[9])*int(d[99])*int(d[999])*int(d[9999])*int(d[99999])*int(d[999999])
    
irracional()