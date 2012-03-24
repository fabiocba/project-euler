'''
By starting at the top of the triangle below and moving to adjacent numbers on
the row below, the maximum total from top to bottom is 23.
3
7 4
2 4 6
8 5 9 3
That is, 3 + 7 + 4 + 9 = 23.
Find the maximum total from top to bottom of the triangle below:
    75
    95 64
    17 47 82
    18 35 87 10
    20 04 82 47 65
    19 01 23 75 03 34
    88 02 77 73 07 63 67
    99 65 04 28 06 16 70 92
    41 41 26 56 83 40 80 70 33
    41 48 72 33 47 32 37 16 94 29
    53 71 44 65 25 43 91 52 97 51 14
    70 11 33 28 77 73 17 78 39 68 17 57
    91 71 52 38 17 14 91 43 58 50 27 29 48
    63 66 04 68 89 53 67 30 73 16 69 87 40 31
    04 62 98 27 23 09 70 98 73 93 38 53 60 04 23

NOTE: As there are only 16384 routes, it is possible to solve this problem by 
trying every route. However, Problem 67, is the same challenge with a triangle
containing one-hundred rows; it cannot be solved by brute force, and requires
a clever method! ;o)
'''

a = []
a.append([75])
a.append([95,64])
a.append([17,47,82])
a.append([18,35,87,10])
a.append([20,4,82,47,65])
a.append([19,1,23,75,3,34])
a.append([88,2,77,73,7,63,67])
a.append([99,65,4,28,6,16,70,92])
a.append([41,41,26,56,83,40,80,70,33])
a.append([41,48,72,33,47,32,37,16,94,29])
a.append([53,71,44,65,25,43,91,52,97,51,14])
a.append([70,11,33,28,77,73,17,78,39,68,17,57])
a.append([91,71,52,38,17,14,91,43,58,50,27,29,48])
a.append([63,66,04,68,89,53,67,30,73,16,69,87,40,31])
a.append([04,62,98,27,23,9,70,98,73,93,38,53,60,04,23])


for row in range(len(a)-1, 0, -1):
    for col in range(0, row):
        a[row-1][col] += max(a[row][col], a[row][col+1])

print a[0][0]
