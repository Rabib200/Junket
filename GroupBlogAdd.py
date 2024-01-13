from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from time import sleep

# Set up the WebDriver
driver = webdriver.Chrome(ChromeDriverManager().install())

driver.get("http://127.0.0.1:8000/group/blog/add")

loginEmail = driver.find_element(By.NAME, "email")
loginPass = driver.find_element(By.NAME, "password")
loginbtn = driver.find_element(By.CLASS_NAME, "login100-form-btn")

loginEmail.send_keys("group1@gmail.com")
loginPass.send_keys("123456")
loginbtn.click()


wait = WebDriverWait(driver, 10)
add_blog_link = wait.until(EC.element_to_be_clickable((By.LINK_TEXT, 'Add Blog')))

add_blog_link.click()

sleep(4)

image_input = driver.find_element(By.NAME, 'image')
image_input.send_keys('')  

heading_input = driver.find_element(By.NAME, 'heading')
heading_input.send_keys('Blog Heading Example')

short_description_input = driver.find_element(By.NAME, 'short_description')
short_description_input.send_keys('Short description of the blog')

long_description_input = driver.find_element(By.NAME, 'long_description')
long_description_input.send_keys('Long description of the blog')


submit_button = driver.find_element(By.XPATH, '//button[@type="submit"]')
submit_button.click()


sleep(5)


driver.quit()
