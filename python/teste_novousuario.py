from selenium import webdriver 
from selenium.webdriver.common.by import By 
from selenium.webdriver.support.ui import Select 
import time 

options = webdriver.ChromeOptions() 
driver = webdriver.Chrome(options=options) 

#Aqui vc altera para pasta do seu projeto que vai ser executado a página teste. 
driver.get("http://localhost:8080/teste/novo-usuario.php") 

time.sleep(4) 

nome_input = driver.find_element(By.NAME, "nNome") 
nome_input.send_keys("João da Silva") 

# Seleciona um tipo de usuário 
select_tipo = Select(driver.find_element(By.NAME, "nTipo")) 
select_tipo.select_by_index(1) 

# Ajuste conforme os valores disponíveis no seu HTML, neste caso 
# está inserindo um Admin, pode alterar para outros tipos... 

email_input = driver.find_element(By.NAME, "nEmail") 
email_input.send_keys("joao@email.com") 

senha_input = driver.find_element(By.NAME, "nSenha") 
senha_input.send_keys("Teste_12345@") 

# Manca o checkbox 'Usuário Ativo 
ativo_checkbox = driver.find_element(By.NAME, "nAtivo") 
ativo_checkbox.click() 

#Envia o formulário 
submit_button = driver.find_element(By.XPATH, "//input[@type='submit']") 
submit_button.click() 

# Aguarda para visualizar o resultado 
time.sleep(8) 

#Fecha o navegador 
driver.quit() 

#  após esse teste se der tudo certo, o usuário foi criado no banco de dados. 
# confira na base dados a informação do novo usuário.