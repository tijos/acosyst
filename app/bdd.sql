
create table if not exists `membres`(
  `id_membre` smallint(5) unsigned not null auto_increment,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telephone` varchar(13) DEFAULT NULL,
  `login` varchar(25) NOT NULL,
  `motdepasse` varchar(100) DEFAULT NULL,
  `is_active` smallint(1) DEFAULT '0',
  `id_adresse` smallint(10) DEFAULT NULL,
  `hash_validation` varchar(32) NOT NULL,
  `id_question` smallint(2) NOT NULL,
  `reponse` varchar(30) CHARACTER SET utf8 NOT NULL,
  `is_chomeur` smallint(6) DEFAULT '0',
  `is_vendeur` smallint(6) DEFAULT '0',
  `is_entreprise` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id_membre`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;