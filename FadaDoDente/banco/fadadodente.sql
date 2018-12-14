# MySQL-Front 5.1  (Build 2.7)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: fadadodente_novo
# ------------------------------------------------------
# Server version 5.5.5-10.1.13-MariaDB

DROP DATABASE IF EXISTS `fadadodente_novo`;
CREATE DATABASE `fadadodente_novo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `fadadodente_novo`;

#
# Source for table tb_consulta
#

DROP TABLE IF EXISTS `tb_consulta`;
CREATE TABLE `tb_consulta` (
  `id_consulta` int(11) NOT NULL AUTO_INCREMENT,
  `data_consulta` date NOT NULL,
  `hora_consulta` time DEFAULT NULL,
  `data_registro_consulta` date NOT NULL,
  `tipo_consulta` varchar(45) NOT NULL,
  `motivo_consulta` varchar(45) NOT NULL,
  `funcionario_registro_consulta` int(11) NOT NULL,
  `dentista_consulta` int(11) NOT NULL,
  `paciente_consulta` int(11) NOT NULL,
  `valor_consulta` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_consulta`),
  KEY `funcionario_registro_consulta` (`funcionario_registro_consulta`),
  KEY `dentista_consulta` (`dentista_consulta`),
  KEY `paciente_consulta` (`paciente_consulta`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Dumping data for table tb_consulta
#
LOCK TABLES `tb_consulta` WRITE;
/*!40000 ALTER TABLE `tb_consulta` DISABLE KEYS */;

INSERT INTO `tb_consulta` VALUES (3,'2018-09-10','09:30:00','2018-09-10','Agendada','Dor nos sisos.',1,2,1,450);
INSERT INTO `tb_consulta` VALUES (4,'2018-09-10','09:30:00','2018-09-10','Agendada','Dor nos sisos.',1,2,1,300);
INSERT INTO `tb_consulta` VALUES (5,'2018-09-10','09:30:00','2018-09-15','Emergência','dfddhs',2,3,1,100);
/*!40000 ALTER TABLE `tb_consulta` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tb_dentista
#

DROP TABLE IF EXISTS `tb_dentista`;
CREATE TABLE `tb_dentista` (
  `id_dentista` int(11) NOT NULL AUTO_INCREMENT,
  `nome_dentista` varchar(60) NOT NULL,
  `email_dentista` varchar(60) NOT NULL,
  `datanasci_dentista` date NOT NULL,
  `cpf_dentista` varchar(45) NOT NULL,
  `rg_dentista` varchar(45) NOT NULL,
  `cro_dentista` varchar(45) NOT NULL,
  `especialidade_dentista` varchar(45) NOT NULL,
  `salario_dentista` decimal(10,2) DEFAULT NULL,
  `estadocivil_dentista` varchar(45) NOT NULL,
  `sexo_dentista` varchar(45) NOT NULL,
  `idade_dentista` int(11) NOT NULL,
  `cep_dentista` varchar(45) NOT NULL,
  `rua_dentista` varchar(45) NOT NULL,
  `bairro_dentista` varchar(45) NOT NULL,
  `cidade_dentista` varchar(45) NOT NULL,
  `estado_dentista` varchar(45) NOT NULL,
  `numero_dentista` varchar(45) NOT NULL,
  `complemento_dentista` varchar(45) NOT NULL,
  `tel_dentista` varchar(45) NOT NULL,
  `cel_dentista` varchar(45) NOT NULL,
  `foto_dentista` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_dentista`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Dumping data for table tb_dentista
#
LOCK TABLES `tb_dentista` WRITE;
/*!40000 ALTER TABLE `tb_dentista` DISABLE KEYS */;

INSERT INTO `tb_dentista` VALUES (2,'Junior Cintra','apspvcintraj@gmail.com','1997-10-01','180.121.557-02','29.626.745-3','23131/53','Próteses',2300,'Solteiro(a)','M',20,'27.345-350','Rua Bernardino Inácio Silva','Centro','Barra Mansa','RJ','315','202','24 3323-2947','24 98158-4658','');
INSERT INTO `tb_dentista` VALUES (3,'Junior Cintra','apspvcintraj@gmail.com','1997-10-01','180.121.557-02','29.626.745-3','23131/53','Próteses',2300,'Solteiro(a)','M',20,'27.345-350','Rua Bernardino Inácio Silva','Centro','Barra Mansa','RJ','315','Ap 202','24 3323-2947','24 98158-4658',NULL);
/*!40000 ALTER TABLE `tb_dentista` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tb_funcionario
#

DROP TABLE IF EXISTS `tb_funcionario`;
CREATE TABLE `tb_funcionario` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_funcionario` varchar(60) NOT NULL,
  `email_funcionario` varchar(60) NOT NULL,
  `datanasci_funcionario` date NOT NULL,
  `cpf_funcionario` varchar(45) NOT NULL,
  `rg_funcionario` varchar(45) NOT NULL,
  `salario_funcionario` decimal(10,2) DEFAULT NULL,
  `estadocivil_funcionario` varchar(45) NOT NULL,
  `sexo_funcionario` varchar(45) NOT NULL,
  `idade_funcionario` int(11) NOT NULL,
  `funcao_funcionario` varchar(45) NOT NULL,
  `cep_funcionario` varchar(45) NOT NULL,
  `rua_funcionario` varchar(45) NOT NULL,
  `bairro_funcionario` varchar(45) NOT NULL,
  `cidade_funcionario` varchar(45) NOT NULL,
  `estado_funcionario` varchar(45) NOT NULL,
  `numero_funcionario` varchar(45) NOT NULL,
  `complemento_funcionario` varchar(45) NOT NULL,
  `tel_funcionario` varchar(45) NOT NULL,
  `cel_funcionario` varchar(45) NOT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Dumping data for table tb_funcionario
#
LOCK TABLES `tb_funcionario` WRITE;
/*!40000 ALTER TABLE `tb_funcionario` DISABLE KEYS */;

INSERT INTO `tb_funcionario` VALUES (1,'Junior Cintra','apspvcintraj@gmail.com','1997-10-01','180.121.557-02','29.626.745-3',2300,'Solteiro(a)','M',20,'TEste','27.345-350','Rua Bernardino Inácio Silva','Centro','Barra Mansa','RJ','315','Ap 202','24 3323-2947','24 98158-4658');
INSERT INTO `tb_funcionario` VALUES (2,'Junior Cintra','apspvcintraj@gmail.com','1997-10-01','180.121.557-02','29.626.745-3',2300,'Solteiro(a)','M',20,'TEste','27.345-350','Rua Bernardino Inácio Silva','Centro','Barra Mansa','RJ','315','Ap 202','24 3323-2947','24 98158-4658');
/*!40000 ALTER TABLE `tb_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tb_paciente
#

DROP TABLE IF EXISTS `tb_paciente`;
CREATE TABLE `tb_paciente` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_paciente` varchar(60) NOT NULL,
  `email_paciente` varchar(60) NOT NULL,
  `datanasci_paciente` date NOT NULL,
  `cpf_paciente` varchar(45) NOT NULL,
  `rg_paciente` varchar(45) NOT NULL,
  `estadocivil_paciente` varchar(45) NOT NULL,
  `sexo_paciente` varchar(45) NOT NULL,
  `profissao_paciente` varchar(45) NOT NULL,
  `cep_paciente` varchar(45) NOT NULL,
  `rua_paciente` varchar(45) NOT NULL,
  `bairro_paciente` varchar(45) NOT NULL,
  `cidade_paciente` varchar(45) NOT NULL,
  `estado_paciente` varchar(45) NOT NULL,
  `numero_paciente` varchar(45) NOT NULL,
  `complemento_paciente` varchar(45) NOT NULL,
  `tel_paciente` varchar(45) NOT NULL,
  `cel_paciente` varchar(45) NOT NULL,
  `historico_paciente` text,
  `idade_paciente` int(11) NOT NULL DEFAULT '0',
  `foto_paciente` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Dumping data for table tb_paciente
#
LOCK TABLES `tb_paciente` WRITE;
/*!40000 ALTER TABLE `tb_paciente` DISABLE KEYS */;

INSERT INTO `tb_paciente` VALUES (1,'Junior Cintra','apspvcintraj@gmail.com','1997-10-01','180.121.557-02','29.626.745-3','Solteiro(a)','Masculino','Desenvolvedor Web','27.345-350','Rua Bernardino Inácio Silva','Centro','Barra Mansa','RJ','315','Ap 202','24 3323-2947','24 98158-4658','nada a declarar',20,'');
/*!40000 ALTER TABLE `tb_paciente` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tb_usuario
#

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `login_usuario` varchar(45) NOT NULL,
  `nome_usuario` varchar(255) DEFAULT NULL,
  `senha_usuario` varchar(45) NOT NULL,
  `email_usuario` varchar(45) NOT NULL,
  `id_funcionario` int(11) DEFAULT NULL,
  `foto` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_usuario`),
  KEY `id_funcionario` (`id_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

#
# Dumping data for table tb_usuario
#
LOCK TABLES `tb_usuario` WRITE;
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;

INSERT INTO `tb_usuario` VALUES (13,'admin','administrador','21232f297a57a5a743894a0e4a801fc3','apspvcintraj@gmail.com',2,'fotos/0cd92a7f7a1e8cb00196ac99e6dbb0fa.jpg');
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;
UNLOCK TABLES;

#
#  Foreign keys for table tb_consulta
#

ALTER TABLE `tb_consulta`
ADD CONSTRAINT `dentista_consulta` FOREIGN KEY (`dentista_consulta`) REFERENCES `tb_dentista` (`id_dentista`),
ADD CONSTRAINT `funcionario_registro_consulta` FOREIGN KEY (`funcionario_registro_consulta`) REFERENCES `tb_funcionario` (`id_funcionario`),
ADD CONSTRAINT `paciente_consulta` FOREIGN KEY (`paciente_consulta`) REFERENCES `tb_paciente` (`id_paciente`);

#
#  Foreign keys for table tb_usuario
#

ALTER TABLE `tb_usuario`
ADD CONSTRAINT `tb_usuario_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `tb_funcionario` (`id_funcionario`);


/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
