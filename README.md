# 📝 Gerenciador de Tarefas com Anexos

Um aplicativo web simples e eficiente para criação e gerenciamento de tarefas do dia a dia, com suporte para upload de arquivos. Projeto desenvolvido para praticar e aprofundar conhecimentos na integração entre Front-end (HTML/CSS) e Back-end (PHP/MySQL).

## 🚀 Funcionalidades

* **Interface Intuitiva:** Design limpo e responsivo para facilitar o uso.
* **Cadastro de Tarefas:** Adição de novas atividades com títulos descritivos.
* **Upload de Anexos:** Permite anexar arquivos (documentos, imagens, etc.) a cada tarefa cadastrada.
* **Armazenamento Seguro:** Salvamento do caminho dos arquivos no banco de dados e armazenamento físico estruturado no servidor local.

## 🛠️ Tecnologias Utilizadas

O projeto foi construído utilizando as seguintes tecnologias:

* **HTML5:** Estruturação semântica do formulário e da lista de dados.
* **CSS3:** Estilização visual, layout responsivo e design moderno.
* **PHP:** Processamento de dados no back-end e gerenciamento de uploads (`$_POST` e `$_FILES`).
* **MySQL:** Banco de dados relacional para persistência das informações.
* **XAMPP:** Ambiente de desenvolvimento local (Servidor Apache e MariaDB/MySQL).

## ⚙️ Como executar o projeto localmente

Para rodar este projeto na sua máquina, você precisará ter o **XAMPP** instalado. Siga os passos abaixo:

1. **Clone o repositório ou baixe os arquivos:**
   Coloque a pasta do projeto dentro do diretório do XAMPP:
   `C:/xampp/htdocs/GerenciadoDeTarefas`

2. **Configure o Banco de Dados:**
   * Abra o Painel de Controle do XAMPP e inicie os módulos **Apache** e **MySQL**.
   * Acesse o phpMyAdmin no navegador: `http://localhost/phpmyadmin`
   * Crie um banco de dados chamado `gerenciador_tarefas`.
   * Importe o arquivo `banco.sql` (ou execute os comandos de criação da tabela de tarefas e anexos).

3. **Crie a pasta de uploads:**
   Certifique-se de que existe uma pasta chamada `uploads` na raiz do seu projeto para receber os arquivos enviados:
   `C:/xampp/htdocs/GerenciadoDeTarefas/uploads`

4. **Acesse no navegador:**
   Abra o seu navegador e digite a seguinte URL:
   `http://localhost/GerenciadoDeTarefas/`

## 👩‍💻 Desenvolvedora

**[Yasmim Soares]**
* GitHub: [@Yasmim-Soares](https://github.com/Yasmim-Soares/Yasmim-Soares)
* LinkedIn: [Yasmim Soares de Sousa](www.linkedin.com/in/yasmim-soares-de-sousa-a74135254)

---
*Projeto criado com dedicação para fins de estudo e aprimoramento de lógica de programação e arquitetura cliente-servidor.*
