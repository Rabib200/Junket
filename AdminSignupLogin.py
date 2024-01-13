from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from time import sleep


driver = webdriver.Chrome()

driver.get("http://127.0.0.1:8000/admin/register")

name = driver.find_element(By.NAME, 'name')
email = driver.find_element(By.NAME, 'email')
password = driver.find_element(By.NAME, 'password')
Cpass = driver.find_element(By.NAME, 'confirm_password')
SignUpbtn = driver.find_element(By.NAME, 'signUp')

name.send_keys("Ronaldo")
email.send_keys("CR7@gmail.com")
password.send_keys("secondGoat")
Cpass.send_keys("secondGoat")

sleep(5)

SignUpbtn.click()
sleep(5)


loginEmail = driver.find_element(By.NAME, "email")
loginPass = driver.find_element(By.NAME, "password")

loginbtn = driver.find_element(By.CLASS_NAME,"login100-form-btn")

sleep(5)

loginEmail.send_keys("CR7@gmail.com")
loginPass.send_keys("secondGoat")
sleep(2)
loginbtn.click()
sleep(4)

print(driver.title)

driver.find_element(By.ID,"feed_list").click()

print(driver.title)

sleep(5)

driver.quit()

