from selenium import webdriver
from selenium.webdriver.common.by import By
import time

# Configuração do WebDriver (nesse exemplo, estamos usando o Chrome)
driver = webdriver.Chrome()

# Acessa a página de cadastro usando o caminho absoluto com o protocolo file://
# Certifique-se de que o caminho está apontando para um arquivo HTML específico
driver.get("http://localhost:8080/teste/")

# Preenche o campo Usuario
usuario_input = driver.find_element(By.ID, "iEmail")
usuario_input.send_keys("gabriel@teste.com")

# Preenche o campo Senha
senha_input = driver.find_element(By.ID, "iSenha")
senha_input.send_keys("123")

# Clica no botão de Cadastrar
submit_button = driver.find_element(By.CSS_SELECTOR, "input[type='submit']")
submit_button.click()

# Aguarda um momento para visualizar o resultado (em uma aplicação real, você verificaria a resposta)
time.sleep(5)


# Fecha o navegador
driver.quit()
