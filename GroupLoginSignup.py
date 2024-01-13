from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from time import sleep


driver = webdriver.Chrome()

driver.get("http://127.0.0.1:8000/group/login")

loginEmail = driver.find_element(By.NAME, "email")
loginPass = driver.find_element(By.NAME, "password")

loginbtn = driver.find_element(By.CLASS_NAME,"login100-form-btn")

loginEmail.send_keys("group1@gmail.com")
loginPass.send_keys("123456")
sleep(2)
loginbtn.click()
sleep(4)



driver.quit()