a = [[int(i) for i in t.split()] for t in open('triangle.txt').readlines()]

for row in range(len(a)-1, 0, -1):
    for col in range(0, row):
        a[row-1][col] += max(a[row][col], a[row][col+1])

print a[0][0]
