from time import sleep
from seleniumwire import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.options import Options

import sys
import base64
import json

#string = ''
chrome_options = Options()
chrome_options.add_experimental_option("debuggerAddress", "127.0.0.1:9222")
driver = webdriver.Chrome(chrome_options=chrome_options)

base64_string = sys.argv[1]
base64_bytes = base64_string.encode("ascii")
sample_string_bytes = base64.b64decode(base64_bytes) 
sample_string = sample_string_bytes.decode("ascii")
json_str = json.loads(sample_string)

name='txtName'
contact='txtContact'
date='txtDate'


driver.find_element(By.ID,name).send_keys(json_str['name'])
sleep(1)
driver.find_element(By.ID,contact).send_keys(json_str['contact'])
sleep(1)
driver.find_element(By.ID,date).send_keys(json_str['date'])
sleep(1)

print("Data for ",json_str['name']," is entered")

#driver.quit()
