# cirandar
#Site para voluntariado em PHP e Mysql
#
#Projeto feito para o curso #elasNaTech, demonstrando o uso da linguagem PHP e banco de dados Mysql.
#Projeto de um CRUD completo, com sistema de login e página de cadastro.
#Conta com funcionalidades específicas para administrador do site, usuário cadastrado e visitante sem estar logado.
#
#Para executar é necessário instalar o Mysql e XAMPP
#Clonar o repositório
#Criar o banco de dados conforme comandos a seguir:
#
# CREATE DATABASE CIRANDAR
# 
# CREATE TABLE VOLUNTARIOS (
#     ID_VOLUNTARIO INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
#     EMAIL_VOLUNTARIO VARCHAR(255) NOT NULL UNIQUE,
#     SENHA VARCHAR(255) NOT NULL,
#     NOME_VOLUNTARIO VARCHAR(255) NOT NULL,
#     DATA_NASCIMENTO VARCHAR(10)	
#     )
#
# CREATE TABLE ENTIDADES (
# 		ID_ENTIDADE INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
#		AREA_ENTIDADE VARCHAR(255) NOT NULL,
#		NOME_ENTIDADE VARCHAR(255) NOT NULL,
#		DESCRICAO VARCHAR(255)
#		) 
#
# CREATE TABLE CIRANDA (
#		ID_CIRANDA INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
#		ID_VOLUNTARIO INT NOT NULL,
#		ID_ENTIDADE INT NOT NULL
#		)
#
