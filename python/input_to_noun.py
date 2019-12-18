#-*- coding: utf-8 -*-
from konlpy.tag import Okt
import sys
import codecs
import chardet
okt = Okt()

text=sys.argv[1]
text = str(text)
#print(text)
with codecs.open('/var/www/python/input_noun.txt', 'w', encoding='utf8') as file1:
	doc_list = []
	all_text = ""
	text_list = []
	i = 1

	words = ""
	#te = "제가 소중하게 생각하는 마음가짐으로 더 좋은 결과를 위해서입니다. "
	doc_list = okt.nouns(text)
	#print(doc_list)

	for word in doc_list:
		if (len(word) > 1):
			text_list.append(word)
			words += word+ " "
	file1.write(words+"\n")




