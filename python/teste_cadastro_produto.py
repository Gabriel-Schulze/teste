from selenium import webdriver
from selenium.webdriver.common.by import By
import time

driver = webdriver.Chrome()
driver.get("http://localhost:8080/teste/novo-produto.php")

descricao = driver.find_element(By.ID,"iDescricao")
descricao.send_keys("Puff")

qtd = driver.find_element(By.ID, "iQtd")
qtd.send_keys("154")

valor = driver.find_element(By.ID, "iValor")
valor.send_keys("15.5")

ativo = driver.find_element(By.ID, "iAtivo")
ativo.click()

botao = driver.find_element(By.CSS_SELECTOR, "input[type='submit']")

botao.click()

driver.quit()
