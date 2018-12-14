-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Out-2018 às 04:19
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fadadodente_novo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_consulta`
--

CREATE TABLE `tb_consulta` (
  `id_consulta` int(11) NOT NULL,
  `data_consulta` date NOT NULL,
  `hora_consulta` time DEFAULT NULL,
  `data_registro_consulta` date NOT NULL,
  `tipo_consulta` varchar(45) NOT NULL,
  `motivo_consulta` varchar(45) NOT NULL,
  `funcionario_registro_consulta` int(11) NOT NULL,
  `dentista_consulta` int(11) NOT NULL,
  `paciente_consulta` int(11) NOT NULL,
  `valor_consulta` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_consulta`
--

INSERT INTO `tb_consulta` (`id_consulta`, `data_consulta`, `hora_consulta`, `data_registro_consulta`, `tipo_consulta`, `motivo_consulta`, `funcionario_registro_consulta`, `dentista_consulta`, `paciente_consulta`, `valor_consulta`) VALUES
(3, '2018-09-10', '09:30:00', '2018-09-10', 'Agendada', 'Dor nos sisos.', 1, 2, 1, '450.00'),
(4, '2018-09-10', '09:30:00', '2018-09-10', 'Agendada', 'Dor nos sisos.', 1, 2, 1, '300.00'),
(5, '2018-09-10', '09:30:00', '2018-09-15', 'Emergência', 'dfddhs', 2, 3, 1, '100.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_dentista`
--

CREATE TABLE `tb_dentista` (
  `id_dentista` int(11) NOT NULL,
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
  `foto_dentista` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_dentista`
--

INSERT INTO `tb_dentista` (`id_dentista`, `nome_dentista`, `email_dentista`, `datanasci_dentista`, `cpf_dentista`, `rg_dentista`, `cro_dentista`, `especialidade_dentista`, `salario_dentista`, `estadocivil_dentista`, `sexo_dentista`, `idade_dentista`, `cep_dentista`, `rua_dentista`, `bairro_dentista`, `cidade_dentista`, `estado_dentista`, `numero_dentista`, `complemento_dentista`, `tel_dentista`, `cel_dentista`, `foto_dentista`) VALUES
(2, 'Junior Cintra', 'apspvcintraj@gmail.com', '1997-10-01', '180.121.557-02', '29.626.745-3', '23131/53', 'Próteses', '2300.00', 'Solteiro(a)', 'M', 20, '27.345-350', 'Rua Bernardino Inácio Silva', 'Centro', 'Barra Mansa', 'RJ', '315', '202', '24 3323-2947', '24 98158-4658', ''),
(3, 'Junior Cintra', 'apspvcintraj@gmail.com', '1997-10-01', '180.121.557-02', '29.626.745-3', '23131/53', 'Próteses', '2300.00', 'Solteiro(a)', 'M', 20, '27.345-350', 'Rua Bernardino Inácio Silva', 'Centro', 'Barra Mansa', 'RJ', '315', 'Ap 202', '24 3323-2947', '24 98158-4658', NULL),
(4, 'Sérgio Paulo Vianna Cintra Júnior', 'apspvcintraj@gmail.com', '1997-10-01', '180.121.557-02', '29.626.745-3', '23131/53', 'Próteses', '2300.00', 'Solteiro(a)', 'Masculino', 20, '27.345-350', 'Rua Bernardino Inácio Silva', 'Centro', 'Barra Mansa', 'RJ', '315', 'Ap 202', '24 3323-2947', '24 98158-4658', 'fotos/13063952360fba5e4624cb40acfbbfeb.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE `tb_funcionario` (
  `id_funcionario` int(11) NOT NULL,
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
  `cel_funcionario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_funcionario`
--

INSERT INTO `tb_funcionario` (`id_funcionario`, `nome_funcionario`, `email_funcionario`, `datanasci_funcionario`, `cpf_funcionario`, `rg_funcionario`, `salario_funcionario`, `estadocivil_funcionario`, `sexo_funcionario`, `idade_funcionario`, `funcao_funcionario`, `cep_funcionario`, `rua_funcionario`, `bairro_funcionario`, `cidade_funcionario`, `estado_funcionario`, `numero_funcionario`, `complemento_funcionario`, `tel_funcionario`, `cel_funcionario`) VALUES
(1, 'Junior Cintra', 'apspvcintraj@gmail.com', '1997-10-01', '180.121.557-02', '29.626.745-3', '2300.00', 'Solteiro(a)', 'M', 20, 'TEste', '27.345-350', 'Rua Bernardino Inácio Silva', 'Centro', 'Barra Mansa', 'RJ', '315', 'Ap 202', '24 3323-2947', '24 98158-4658'),
(2, 'Junior Cintra', 'apspvcintraj@gmail.com', '1997-10-01', '180.121.557-02', '29.626.745-3', '2300.00', 'Solteiro(a)', 'M', 20, 'TEste', '27.345-350', 'Rua Bernardino Inácio Silva', 'Centro', 'Barra Mansa', 'RJ', '315', 'Ap 202', '24 3323-2947', '24 98158-4658');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_paciente`
--

CREATE TABLE `tb_paciente` (
  `id_paciente` int(11) NOT NULL,
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
  `foto_paciente` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_paciente`
--

INSERT INTO `tb_paciente` (`id_paciente`, `nome_paciente`, `email_paciente`, `datanasci_paciente`, `cpf_paciente`, `rg_paciente`, `estadocivil_paciente`, `sexo_paciente`, `profissao_paciente`, `cep_paciente`, `rua_paciente`, `bairro_paciente`, `cidade_paciente`, `estado_paciente`, `numero_paciente`, `complemento_paciente`, `tel_paciente`, `cel_paciente`, `historico_paciente`, `idade_paciente`, `foto_paciente`) VALUES
(1, 'Junior Cintra', 'apspvcintraj@gmail.com', '1997-10-01', '180.121.557-02', '29.626.745-3', 'Solteiro(a)', 'Masculino', 'Desenvolvedor Web', '27.345-350', 'Rua Bernardino Inácio Silva', 'Centro', 'Barra Mansa', 'RJ', '315', 'Ap 202', '24 3323-2947', '24 98158-4658', 'nada a declarar', 20, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `login_usuario` varchar(45) NOT NULL,
  `nome_usuario` varchar(255) DEFAULT NULL,
  `senha_usuario` varchar(45) NOT NULL,
  `email_usuario` varchar(45) NOT NULL,
  `id_funcionario` int(11) DEFAULT NULL,
  `foto` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `login_usuario`, `nome_usuario`, `senha_usuario`, `email_usuario`, `id_funcionario`, `foto`) VALUES
(13, 'admin', 'administrador', '21232f297a57a5a743894a0e4a801fc3', 'apspvcintraj@gmail.com', 2, 'fotos/0cd92a7f7a1e8cb00196ac99e6dbb0fa.jpg'),
(14, 'lucas.paozim', 'Lucas Freitas', 'mudar@123', 'teste@teste.com', 1, 'fotos/302a2af7e1f3c0a731ca146f9d80fa6d.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_consulta`
--
ALTER TABLE `tb_consulta`
  ADD PRIMARY KEY (`id_consulta`),
  ADD KEY `funcionario_registro_consulta` (`funcionario_registro_consulta`),
  ADD KEY `dentista_consulta` (`dentista_consulta`),
  ADD KEY `paciente_consulta` (`paciente_consulta`);

--
-- Indexes for table `tb_dentista`
--
ALTER TABLE `tb_dentista`
  ADD PRIMARY KEY (`id_dentista`);

--
-- Indexes for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Indexes for table `tb_paciente`
--
ALTER TABLE `tb_paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_funcionario` (`id_funcionario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_consulta`
--
ALTER TABLE `tb_consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_dentista`
--
ALTER TABLE `tb_dentista`
  MODIFY `id_dentista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_paciente`
--
ALTER TABLE `tb_paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_consulta`
--
ALTER TABLE `tb_consulta`
  ADD CONSTRAINT `dentista_consulta` FOREIGN KEY (`dentista_consulta`) REFERENCES `tb_dentista` (`id_dentista`),
  ADD CONSTRAINT `funcionario_registro_consulta` FOREIGN KEY (`funcionario_registro_consulta`) REFERENCES `tb_funcionario` (`id_funcionario`),
  ADD CONSTRAINT `paciente_consulta` FOREIGN KEY (`paciente_consulta`) REFERENCES `tb_paciente` (`id_paciente`);

--
-- Limitadores para a tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `tb_usuario_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `tb_funcionario` (`id_funcionario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
