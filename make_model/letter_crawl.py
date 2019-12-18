from bs4 import BeautifulSoup
import requests
import csv

# HTTP GET Requests
req = requests.get('http://www.saramin.co.kr/zf_user/public-recruit/coverletter-list/page/')

# HTML 소스 가져오기
html = req.text

# HTTP Header 가져오기
header = req.headers

# HTTP Status 가져오기(200:정상)
status = req.status_code

# HTTP가 정상적으로 되었는지(True/False)
is_ok = req.ok

soup = BeautifulSoup(html, 'html.parser')

# CSS Selector를 통해 html 요소들을 찾아낸다
my_titles = soup.select(
	'tr > td.td_apply_subject > h2 > a'
)

f = open('cover_Letter.txt', 'w', encoding='utf-8', newline='')
#wr = csv.writer(f)
#wr.writerow(["번호", "회사명", "자소서 내용"])
#i = 1
# my_titles는 list 객체
for title in my_titles:
	# Tag안의 텍스트
	
	# Tag의 속성을 가져오기(href 속성)
	# print(title.get('href'))

	req2 = requests.get('http://www.saramin.co.kr' + title.get('href'))
	

	html2 = req2.text
	soup2 = BeautifulSoup(html2, 'html.parser')
	company = soup2.find("span", {"class":"tit_company_name"})
	#print(company.text)
	
	answers = soup2.find_all("div", {"class":"box_ty3"})
	for answer in answers:
		txt_byte = soup2.find("div", {"class":"txt_byte"})
		cut = len(txt_byte.text)
		title = answer.find("h3")
		title_byte = len(title.text)
		#wr.writerow([i, company.text, answer.text[title_byte+1:-(cut+8)]])
		f.write(answer.text[title_byte+1:-(cut+8)])
		
'''
pages = soup.select(
	'#listArea > div > a'
)
'''
for i in range(2,101):
	req = requests.get('http://www.saramin.co.kr/zf_user/public-recruit/coverletter-list/page/' + str(i))
	html = req.text
	header = req.headers
	status = req.status_code
	is_ok = req.ok
	soup = BeautifulSoup(html, 'html.parser')
	my_titles = soup.select(
		'tr > td.td_apply_subject > h2 > a'
	)
	for title in my_titles:
		req2 = requests.get('http://www.saramin.co.kr' + title.get('href'))
		html2 = req2.text
		soup2 = BeautifulSoup(html2, 'html.parser')
		answers = soup2.find_all("div", {"class":"box_ty3"})
		for answer in answers:
			txt_byte = soup2.find("div", {"class":"txt_byte"})
			cut = len(txt_byte.text)
			title = answer.find("h3")
			title_byte = len(title.text)
			f.write(answer.text[title_byte+1:-(cut+8)])
'''
#####
pages = soup.select(
#	'#listArea > div > a.next'
	'#listArea > div > a'
)

for page in pages:
        req = requests.get('http://www.saramin.co.kr' + page.get('href'))
        html = req.text
        header = req.headers
        status = req.status_code
        is_ok = req.ok
        soup = BeautifulSoup(html, 'html.parser')
        my_titles = soup.select(
                'tr > td.td_apply_subject > h2 > a'
        )
        for title in my_titles:
                req2 = requests.get('http://www.saramin.co.kr' + title.get('href'))
                html2 = req2.text
                soup2 = BeautifulSoup(html2, 'html.parser')
                answers = soup2.find_all("div", {"class":"box_ty3"})
                for answer in answers:
                        txt_byte = soup2.find("div", {"class":"txt_byte"})
                        cut = len(txt_byte.text)
                        title = answer.find("h3")
                        title_byte = len(title.text)
                        f.write(answer.text[title_byte+1:-(cut+8)])
#####
'''
f.close()
f.close()
