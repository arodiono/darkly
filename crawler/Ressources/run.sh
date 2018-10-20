python3.6 -m venv venv
source venv/bin/activate
pip3 install scrapy
pip3 install requests
scrapy runspider crawler.py --logfile log -L WARNING && python parser.py
