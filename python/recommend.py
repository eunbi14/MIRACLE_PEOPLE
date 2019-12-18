from konlpy.tag import Okt
okt=Okt()
import sys 
from gensim.models import Word2Vec
import random
import gensim
#model=gensim.models.Word2Vec.load('word2vec.bin')
model = gensim.models.Word2Vec.load('/var/www/python/word_model')
keyword = sys.argv[1]
keyword = str(keyword)
#a=model.wv.most_similar(keyword)
word1=model.similar_by_word(keyword, topn=10, restrict_vocab=None)[0][0]
word2=model.similar_by_word(keyword, topn=10, restrict_vocab=None)[1][0]
word3=model.similar_by_word(keyword, topn=10, restrict_vocab=None)[2][0]
#print(a)
word1=str(word1)
word2=str(word2)
word3=str(word3)
"""
print(model.similar_by_word(keyword, topn=10, restrict_vocab=None))
print(model.similar_by_word("전문성", topn=10, restrict_vocab=None))
print(model.similar_by_word("신뢰", topn=10, restrict_vocab=None))
print(model.similar_by_word("도전", topn=10, restrict_vocab=None))
print(model.similar_by_word("열정", topn=10, restrict_vocab=None))

print(model.similar_by_word("책임감", topn=10, restrict_vocab=None))
print(model.similar_by_word("창의성", topn=10, restrict_vocab=None))
print(model.similar_by_word("글로벌", topn=10, restrict_vocab=None))
"""
with open('/var/www/python/cover_Letter.txt', 'r', encoding='utf-8') as f:
        line = f.read()

split=[]
split = line.split('.')
for i in range(0, len(split)):
        split[i] = split[i].replace("\n","")
	
sentence0=[]
sentence1=[]
sentence2=[]
sentence3=[]
#print(keyword)
for i in range(0, len(split)):
        if keyword  in str(split[i]):
                sentence0.append(split[i])
#print(word1)
for i in range(0, len(split)):
	if word1 in str(split[i]):
		sentence1.append(split[i])

#print(word2)
for i in range(0, len(split)):
        if word2  in str(split[i]):
                sentence2.append(split[i])
#print(word3)
for i in range(0, len(split)):
        if word3  in str(split[i]):
                sentence3.append(split[i])

"""random.shuffle(sentence4)
group = []
group.extend(sentence4[:5])
sentence4 = sentence4[5:]
"""
#print(model.similar_by_word(keyword, topn=10, restrict_vocab=None))
#print('\n열정\n')
A=random.randrange(0,len(sentence0))
#print(keyword)
for i in range(1,6):
	print(sentence0[A])
	A=A+1
	if A>=len(sentence0):
		A=0
#print(word1)
A=random.randrange(0,len(sentence1))
for i in range(1,6):
	print(sentence1[A])
	A=A+1
	if A>=len(sentence1):
		A=0
#print(word2)
A=random.randrange(0,len(sentence2))
for i in range(1,6):
	print(sentence2[A])
	A=A+1
	if A>=len(sentence2):
		A=0
#print(word3)
A=random.randrange(0,len(sentence3))
for i in range(1,6):
	print(sentence3[A])
	A=A+1
	if A>=len(sentence3):
		A=0
#print('\n')
#b=model.wv.most_similar(negative=['끈기'])
#print(b)

#d = model.wv.similarity('열정', '거짓말')
#print(d)

#c = model.wv.similarity('열정', '도전')
#print(c)"""

"""j=0
total=0
aver=0
ex = ['인턴','도전','끈기']
for i in ex :

	j=j+1
	gs = model.wv.similarity('열정',i)
	total = gs+total
	"print(gs)"
aver=total/j
print(aver)"""
