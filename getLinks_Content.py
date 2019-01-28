from requests_html import HTMLSession
from collections import Counter
from urllib.parse import urlparse
from urllib.request import urlopen
import requests
import bs4
import re


session = HTMLSession()
#Manual Link Input
site = input("Give your Link: ")
r = session.get(site)

#Count Links
unique_netlocs = Counter(urlparse(link).netloc for link in r.html.absolute_links)
for link in unique_netlocs:
    print(link, unique_netlocs[link])


#Get link for site data
res = requests.get(site)
text = res.text

soup = bs4.BeautifulSoup(res.text, 'lxml')
texts = soup.stripped_strings
titles = soup.find_all()

for text in titles:
    print(text.getText())
