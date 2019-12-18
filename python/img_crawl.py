from urllib.request import urlopen
from urllib.parse import quote_plus
from bs4 import BeautifulSoup
import requests
import datetime
import re
import sys
print(sys.path)
req = requests.get('https://news.naver.com/')
html = req.text
header = req.headers
status = req.status_code
is_ok = req.ok
soup = BeautifulSoup(html, 'html.parser')
my_titles = soup.select(
	'ul.section_list_ranking > li > a'
)
num = soup.select(
	'ul.section_list_ranking > li > span > em'
)
num2=[]
for nwot in num:
	nwot = str(nwot)[4:]
	num2.append(nwot[:-5])

e = 0 #ranking 비교하기 위한 변수
a = 1

base_url = "http://www.news.naver.com"
economy = my_titles[10:15]
social = my_titles[20:25]
world = my_titles[40:45]
it = my_titles[50:55]
link = []
#g = open("link.txt", 'w')

my_titles = social + economy + it + world
for title in my_titles:
	base_url = 'http://news.naver.com' + title.get('href')
	#date_url = datetime.datetime.now()strftime('%Y%m%d')
	#print(base_url)

	html2 = urlopen(base_url).read()
	#source = html2.read()i
	soup2 = BeautifulSoup(html2, 'html.parser')
	imagee = soup2.find_all(class_="end_photo_org")
	if a != e + 1:
		#g.write(base_url+'\n')
		imgUrl = 'http://hotpink10.cafe24.com/images/logo2.png'
		with urlopen(imgUrl) as f:
			with open('/var/www/html/images/article_pic'+str(a)+'.jpg', 'wb') as h:
				img = f.read()
				h.write(img)
				#g.write(base_url+'\n')
		a = a + 1
	for i in imagee:
		img = i.find('img')
		
		imgUrl = img['src']
		with urlopen(imgUrl) as f:
			with open('/var/www/html/images/article_pic'+str(a)+'.jpg', 'wb') as h:
				img = f.read()
				h.write(img)
				#g.write(base_url+'\n')
		a = a + 1
		break
	e = e + 1	

