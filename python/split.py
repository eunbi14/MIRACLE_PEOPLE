import sys
import random

with open('/var/www/python/cover_Letter.txt', 'r', encoding='utf-8') as f:
	line = f.read()
split=[]
split = line.split('.')
for i in range(0, len(split)):
	split[i] = split[i].replace("\n","")
	#split[i] = split[i].replace("'","")
#print(split[len(split)-7]) #줄바꿈 있던 애
#print(split[len(split)-3]) #줄바꿈 있던 애
#print(split[len(split)-4]) #줄바꿈 없던 애

sentence = []
search = sys.argv[1]
#serach = str(search)

for i in range(0, len(split)):
	if search in str(split[i]):
#		if '\n' in str(split[i]):

#		if str(split[i] != '\n')
		sentence.append(split[i])

A = random.randrange(0,len(sentence))
for i in range(1,6):
	print(sentence[A])
	A = A + 1
	if A>=len(sentence):
		A=0
