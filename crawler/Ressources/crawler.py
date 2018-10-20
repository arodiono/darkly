import scrapy
import requests

ip = input("Enter VM IP: ")
print("Starting searching flag @ " + ip)

class DarklySpider(scrapy.Spider):
    name = 'darkly'
    start_urls = ['http://' + ip + '/.hidden/']
    allowed_domains = [ip]

    def parse(self, response):
        for link in response.css('a'):
            if link.xpath('//a[contains(@href, "README")]/@href').extract():
                self.logger.warning(requests.get(response.url + "README").text)
        for next_page in response.css('a'):
            yield response.follow(next_page, self.parse)

