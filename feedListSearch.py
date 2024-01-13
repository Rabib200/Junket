from selenium import webdriver
from selenium.webdriver.common.by import By
from time import sleep


driver = webdriver.Chrome()  
driver.get('http://127.0.0.1:8000/group/blog/list')  


search_input = driver.find_element(By.ID, 'term')  
search_input.clear()  
search_input.send_keys('Chittagong')  


search_button = driver.find_element(By.XPATH, '//button[@type="submit" and contains(text(), "search")]')
search_button.click()


sleep(5)

driver.quit()
