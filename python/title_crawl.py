#-*-coding:utf-8-*-
import urllib.request
from bs4 import BeautifulSoup
import datetime
import requests
import sys

#sys.setdefaultencoding("utf-8")

base_url = 'https://news.naver.com/main/ranking/popularDay.nhn?rankingType=popular_day&sectionId=102&date='
date_url = datetime.datetime.now().strftime('%Y%m%d')
url = base_url+date_url
html = urllib.request.urlopen(url).read()
soup = BeautifulSoup(html, 'html.parser')
headline = soup.find_all(class_="ranking_headline")

a=0
article_tit = []
article_link = []

for i in headline:
	title = i.find(class_='nclicks(rnk.soc)')
	article_tit.append(title.attrs['title'])
	article_link.append('https://news.naver.com/'+title.attrs['href'])
	
	a=a+1
	if (a==5): break

#userdata = {"so1": article_tit[0], "so2": article_tit[1], "so3": article_tit[2], "so4" : article_tit[3], "so5": article_tit[4]}

#resp = requests.post(url = 'http://hotpink10.cafe24.com/issue.php', data = userdata)
#print(resp.data)

#a = article_tit[0].encode('cp949')

f = open("title.txt", 'w')
for i in range(5):
	data = article_tit[i] + "\n"
	f.write(data)
#f.close()

g = open("link.txt", 'w')
for i in range(5):
        data = article_link[i] + "\n"
        g.write(data)
#g.close()

base_url = 'https://news.naver.com/main/ranking/popularDay.nhn?rankingType=popular_day&sectionId=101&date='
date_url = datetime.datetime.now().strftime('%Y%m%d')
url = base_url+date_url
html = urllib.request.urlopen(url).read()
soup = BeautifulSoup(html, 'html.parser')
headline = soup.find_all(class_="ranking_headline")

a=0
article_tit = []
article_link = []
for i in headline:
        title = i.find(class_='nclicks(rnk.eco)')
        article_tit.append(title.attrs['title'])
        article_link.append('https://news.naver.com/'+title.attrs['href'])

        a=a+1
        if (a==5): break

for i in range(5):
        data = article_tit[i] + "\n"
        f.write(data)

for i in range(5):
        data = article_link[i] + "\n"
        g.write(data)
#g.close()

base_url = 'https://news.naver.com/main/ranking/popularDay.nhn?rankingType=popular_day&sectionId=105&date='
date_url = datetime.datetime.now().strftime('%Y%m%d')
url = base_url+date_url
html = urllib.request.urlopen(url).read()
soup = BeautifulSoup(html, 'html.parser')
headline = soup.find_all(class_="ranking_headline")

a=0
article_tit = []
article_link = []

for i in headline:
        title = i.find(class_='nclicks(rnk.sci)')
        article_tit.append(title.attrs['title'])
        article_link.append('https://news.naver.com/'+title.attrs['href'])

        a=a+1
        if (a==5): break

for i in range(5):
        data = article_tit[i] + "\n"
        f.write(data)

for i in range(5):
        data = article_link[i] + "\n"
        g.write(data)
#g.close()

base_url = 'https://news.naver.com/main/ranking/popularDay.nhn?rankingType=popular_day&sectionId=104&date='
date_url = datetime.datetime.now().strftime('%Y%m%d')
url = base_url+date_url
html = urllib.request.urlopen(url).read()
soup = BeautifulSoup(html, 'html.parser')
headline = soup.find_all(class_="ranking_headline")

a=0
article_tit = []
article_link = []

for i in headline:
        title = i.find(class_='nclicks(rnk.wor)')
        article_tit.append(title.attrs['title'])
        article_link.append('https://news.naver.com/'+title.attrs['href'])

        a=a+1
        if (a==5): break

for i in range(5):
        data = article_tit[i] + "\n"
        f.write(data)

for i in range(5):
        data = article_link[i] + "\n"
        g.write(data)
#g.close()

