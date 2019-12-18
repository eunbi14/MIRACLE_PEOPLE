from konlpy.tag import Okt
okt = Okt()

file = open('cover_Letter.txt', 'r', encoding='UTF-8')

texts = file.readlines()
file.close()

file = open('noun_Letter.txt', 'w', encoding='UTF-8')

doc_list = []
all_text = ""
text_list = []
i = 1

for text in texts:
	words = ""
	doc_list = okt.nouns(text)
	for word in doc_list:
		if (len(word) > 1):
			text_list.append(word)
			words += word+ ' '
	file.write(words+" \n")
file.close()

