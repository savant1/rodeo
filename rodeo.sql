-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 15 Février 2016 à 17:16
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `rodeo`
--

-- --------------------------------------------------------

--
-- Structure de la table `rodeo_article`
--

CREATE TABLE IF NOT EXISTS `rodeo_article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(60) NOT NULL,
  `famille` varchar(60) NOT NULL,
  `description` varchar(200) NOT NULL,
  `prix_achat` double NOT NULL,
  `coeficient` double NOT NULL,
  `prix_vente_ht` double NOT NULL,
  `prix_vente_ttc` double NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `rodeo_article`
--


-- --------------------------------------------------------

--
-- Structure de la table `rodeo_client`
--

CREATE TABLE IF NOT EXISTS `rodeo_client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `num_compte` varchar(50) NOT NULL,
  `nom` text NOT NULL,
  `abrege` varchar(200) NOT NULL,
  `qualite` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `compte_collectif` int(11) NOT NULL DEFAULT '4110000',
  `complement` varchar(200) NOT NULL,
  `cp` varchar(200) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `contribuable` varchar(200) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `site` varchar(200) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '1',
  `id_user_crea` int(11) NOT NULL,
  PRIMARY KEY (`id_client`),
  KEY `id_user_crea` (`id_user_crea`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `rodeo_client`
--

-- --------------------------------------------------------

--
-- Structure de la table `rodeo_temp_prof`
--

CREATE TABLE IF NOT EXISTS `rodeo_temp_prof` (
  `id_prof_temp` int(11) NOT NULL AUTO_INCREMENT,
  `num_proforma` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix_unitaire` double NOT NULL,
  `adresse_ip` varchar(100) NOT NULL,
  `user_session` varchar(255) NOT NULL,
  `session_temps` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_client_pro` int(11) NOT NULL,
  PRIMARY KEY (`id_prof_temp`),
  KEY `id_cliemt_pro` (`id_client_pro`),
  KEY `id_client_pro` (`id_client_pro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `rodeo_temp_prof`
--


-- --------------------------------------------------------

--
-- Structure de la table `rodeo_user`
--

CREATE TABLE IF NOT EXISTS `rodeo_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `type_tech` varchar(255) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telephone` int(11) NOT NULL,
  `pays` varchar(200) NOT NULL,
  `ville` varchar(200) NOT NULL,
  `id_user_crea` int(11) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `rodeo_user`
--

INSERT INTO `rodeo_user` (`id_user`, `login`, `mdp`, `type_tech`, `nom`, `prenom`, `email`, `telephone`, `pays`, `ville`, `id_user_crea`, `adresse`) VALUES
(1, 'admin', 'admin', 'admin', 'ferry francois', 'bakongo', 'ferryfrancois17@gmail.com', 697929584, 'cameroun', 'ville', 0, 'douala st thomas'),

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `rodeo_client`
--
ALTER TABLE `rodeo_client`
  ADD CONSTRAINT `rodeo_client_ibfk_1` FOREIGN KEY (`id_user_crea`) REFERENCES `rodeo_user` (`id_user`);

--
-- Contraintes pour la table `rodeo_temp_prof`
--
ALTER TABLE `rodeo_temp_prof`
  ADD CONSTRAINT `rodeo_temp_prof_ibfk_1` FOREIGN KEY (`id_client_pro`) REFERENCES `rodeo_client` (`id_client`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
