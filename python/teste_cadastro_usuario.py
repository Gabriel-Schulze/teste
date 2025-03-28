from selenium import webdriver
from selenium.webdriver.common.by import By
import time

driver = webdriver.Chrome()
driver.get("http://localhost:8080/teste/novo-usuario.php?id=1")

nome = driver.find_element(By.ID, "iNome")
nome.send_keys("Marcelo")

email = driver.find_element(By.ID, "iEmail")
email.send_keys("marcelo@teste.com")

senha = driver.find_element(By.ID, "iSenha")
senha.send_keys("123")

ativo = driver.find_element(By.ID, "iAtivo")
ativo.click()

butao = driver.find_element(By.CSS_SELECTOR,"input[type='submit']")
time.sleep(5)
butao.click()

driver.quit()
