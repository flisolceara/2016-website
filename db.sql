CREATE TABLE `inscritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `categoria_id` int(11) NOT NULL DEFAULT '1',
  `cidade` varchar(255) NOT NULL DEFAULT 'fortaleza',
  `link` varchar(255) DEFAULT NULL,
  `resumo` varchar(255) DEFAULT NULL,
  `instituicao` varchar(255) DEFAULT NULL,
  `semestre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;