import requests
from bs4 import BeautifulSoup
import nltk
from nltk.tokenize import word_tokenize
from selenium import webdriver
import re
import time
from pymongo import MongoClient
class naverCrawler:
    def __init__(self,chromePath):
        self.driver = webdriver.Chrome(chromePath)
        self.pages = ['https://store.naver.com/restaurants/list?page='+str(i)+'&query=%EC%8B%9C%EB%A6%BD%EB%8C%80%20%EB%A7%9B%EC%A7%91'.format(i) for i in range(1,200)]
        print(self.pages)
        self.urls = []
        for i in self.pages :
            self.driver.get(i)
            html = self.driver.page_source
            dom = BeautifulSoup(html.encode('utf-8'), 'html.parser')
            stores = dom.select('a.name')
            for store in stores :
                print('url : '+store.get('href'))
                self.urls.append(store.get('href'))
        
    def get(self):
        self.client = MongoClient("localhost")
        db = self.client.get_database('naver')
        try:
            naver = db.create_collection("naverCrawled")
        except:
            naver = db.get_collection("naverCrawled")
        #places = []
        patLng = re.compile(r'12[5-7][.][0-9]+')
        patLat = re.compile(r'3[6-8][.][0-9]+')
        for i in self.urls :
            self.driver.get(i)
            html = self.driver.page_source.encode('utf-8')
            dom = BeautifulSoup(html, 'html.parser')
            tmp = {}
            tmp['title'] = dom.select('strong.name')[0].text
            tmp['addr'] = dom.select('span.addr')[0].text
            tmp['call'] = dom.select('div.list_item.list_item_biztel > div.txt')[0].text
            latlng = dom.select('a.btn')[0].get('href')
            tmp['lat'] = patLat.findall(latlng)
            tmp['lon'] = patLng.findall(latlng)
            self.driver.find_element_by_css_selector('a#tab03 > svg.name').click()
            html = self.driver.page_source
            dom = BeautifulSoup(html.encode('utf-8', 'html.parser'))
            tmp['img'] = [i.get('src') for i in dom.select('div.thumb > img')]
            naver.insert_one(tmp)
            #places.append(tmp)
            
if __name__ == '__main__' : 
    nc = naverCrawler('chromedriver.exe')
    nc.get()
    nc.client.close()