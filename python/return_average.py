from konlpy.tag import Okt
import sys
okt=Okt()
 
from gensim.models import Word2Vec

#model = Word2Vec(result, size=100, window=5,min_count=5,workers=4,sg=0)

#model.wv.save_word2vec_format('word2vec.bin', binary=True)

import gensim
#model=gensim.models.Word2Vec.load('word2vec.bin')
model = gensim.models.Word2Vec.load('/var/www/python/word_model')
#a=model.wv.most_similar('열정')

with open('/var/www/python/input_noun.txt', 'r', encoding='utf-8') as f:
	content = f.read()

array = content.split()
text = sys.argv[1]
text = str(text)

result = []
for i in array :
	try:
		gs = model.wv.similarity(text,i)
	except KeyError:
		continue
	#print(gs)   #워드투벡_결과_단어
	result.append(gs)
result.sort(reverse=True)

k=0
summation=0
for i in result:
	if k<=len(result)/20: #상위 5%
		k = k+1
		summation = summation + i
print(summation/k)
