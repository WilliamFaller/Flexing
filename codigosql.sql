CREATE TABLE usuarios (
  id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(32) NOT NULL,
  email varchar (90) NOT NULL,
  senha varchar(90) NOT NULL,
  avatar varchar(255),
  metas varchar (255),
  atv varchar (100),
  num_follows int(11),
  data_inscri varchar (100),
  seguidores varchar (2000),
  seguindo varchar (2000));

CREATE TABLE eventos (
  id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_usuario varchar(32) NOT NULL,
  datas varchar(90) NOT NULL,
  nome varchar (90) NOT NULL,
  descricao varchar(255),
  tipo varchar (255));

CREATE TABLE noti (
  id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_usuario varchar(5) NOT NULL,
  id_seguidor varchar(5) NOT NULL,
  titulo varchar (60) NOT NULL,
  descricao varchar(60));


CREATE TABLE parques (
  id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  parque_name varchar(90) NOT NULL,
  horario varchar(20) NOT NULL,
  rua varchar (60) NOT NULL,
  atv_parques varchar(60),
  foto varchar(90));

/*
Adicionar essas informações para o funcionamento do mapeamento dos parques!
*/

INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (1,'Parque Lions Clube Tucuruvi','06:00 - 18:00','Alcindo Bueno de Assis, 500','Quadras e lugares para lazer','imgs/parque_lions.jpg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (2,'Parque Independencia','05:00 - 20:00','Nazaré, s/n','Areas de cultura, lazer e caminhada','imgs/Parque_Independencia.jpg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (3,'Parque Aclimação','05:00 - 20:00','Muniz de Sousa, 1119','Quadras e areas de caminhada e lazer','imgs/Parque_Aclimação.jpg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (4,'Parque Alfredo Volpi',' 06:00 - 18:00','Rua Engenheiro Oscar Americano, 480','Area de ciclismo','imgs/Parque_Volpi.jpeg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (5,'Parque Burle Marx',' 07:00 - 19:00','Dona Helena Pereira de Moraes, 200','Areas de lazer e caminhada','imgs/Parque_Burle.jpeg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (6,'Parque Trianon','06:00 - 18:00','Peixoto Gomide, 949','Areas de lazer e cultura','imgs/Parque_Trianon.jpeg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (7,'Parque do Povo - Mario Pimenta Camargo','06:00 - 22:00','Henrique Chamma, 420','Areas de lazer','imgs/Parque_Povo.jpeg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (8,'Parque do Carmo','05:30 - 20:00','Afonso de Sampaio e Sousa, 951','Areas de corrida e lazer','imgs/Parque_Carmo.jpeg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (9,'Parque Jardim das Perdizes','06:00 - 22:00','Passagem Quatro, S/N - Água Branca','Areas de lazer e Ciclovia','imgs/Parque_Perdizes.jpeg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (10,'Academia ao Ar Livre','Aberto 24hrs','José Taliberti, 94','Aparelhos para se exercitar','imgs/Parque_Trianon.jpeg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (11,'Parque Villa Lobos','05:30 - 19:00','Prof. Fonseca Rodrigues, 2001','campos de futebol, ciclovias, parquinhos','imgs/Parque_Lobos.jpeg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (12,'Parque Previdencia','07:00 - 18:00','Pedro Peccinini, 88','Trilhas, aparelhos de ginastica, playground','imgs/Parque_Previdencia.jpeg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (13,'Parque Municipal Chácara do Jockey','06:00 - 20:00','Prof. Francisco Morato, 5300','Pista de skate, pista de corrida, campo de futebol','imgs/Parque_Jockey.jpeg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (14,'Parque Cidade de Toronto','06:00 - 18:00 ','Cardeal Motta, 84','Playgrounds e quadras esportivas','imgs/Parque_Toronto.jpeg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (15,'Parque São Domingos','07:00 - 18:00','Pedro Sernagiotti, 125',' Quadras, campo de futebol','imgs/Parque_Domingos.jpeg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (16,'Parque Bosque Maia','06:00 - 18:00','Paulo Faccini, s/n','Quadras, Trilha, Playground, caminhada e lazer','imgs/Parque_Maia.jpg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (17,'Parque Piqueri','06:00 - 18:00','Tuiuti, 515','Playground e Lazer','imgs/Parque_Piqueri.jpeg');
INSERT INTO `parques` (`id`,`parque_name`,`horario`,`rua`,`atv_parques`,`foto`) VALUES (18,'Parque da Juventude','06:00 - 19:00','Cruzeiro do sul, 2630','Quadras, caminhada, lazer','imgs/Parque_Juventude.jpeg');
