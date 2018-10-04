import scrapy
import requests

class DarklySpider(scrapy.Spider):
    name = 'darkly'
    start_urls = ['http://192.168.56.101/.hidden/']
    allowed_domains = ['192.168.56.101']

    def parse(self, response):
        for link in response.css('a'):
            if link.xpath('//a[contains(@href, "README")]/@href').extract():
                self.logger.warning(requests.get(response.url + "README").text)
        for next_page in response.css('a'):
            yield response.follow(next_page, self.parse)