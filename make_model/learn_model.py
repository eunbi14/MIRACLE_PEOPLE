from gensim.models import  Word2Vec

noun_Letter = "noun_Letter.txt"
model_fname = "word_model"
word = [sent.strip().split(" ") for sent in open(noun_Letter,'r').readlines()]
for i in range(10, 300):
	model = Word2Vec(word, size=101, window = 100,  workers=30,batch_words=10,iter=20, sg=1)
	model_fname = model_fname + str(i)
	model.save(model_fname)
	model_fname = "word_model"
	print(i)
