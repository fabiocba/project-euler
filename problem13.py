#!/usr/bin/python

total = 0
f = open('./150.txt')
for line in f:
	total = total + int(line)
print total
