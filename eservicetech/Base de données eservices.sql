-- phpMyAdmin SQL Dump
-- version 3.3.2
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Dim 15 Décembre 2019 à 12:53
-- Version du serveur: 5.1.41
-- Version de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `eservices`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `id_agent` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(50) NOT NULL,
  `nom_prenom` varchar(100) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `datenais` int(11) NOT NULL,
  `id_matri` int(11) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `niveau` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_fonction` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `login` varchar(200) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  `statut` int(11) NOT NULL,
  `dateaj` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `useraddid` int(11) NOT NULL,
  PRIMARY KEY (`id_agent`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `agent`
--

INSERT INTO `agent` (`id_agent`, `matricule`, `nom_prenom`, `sexe`, `datenais`, `id_matri`, `contact`, `email`, `niveau`, `id_service`, `id_fonction`, `photo`, `login`, `mdp`, `statut`, `dateaj`, `useraddid`) VALUES
(1, 'AGT-694', 'Tchimou Obou Raphael', '', 1, 0, '58358866', '', 1, 1, 1, '', 'admin', 'admin', 0, '2019-07-31 17:17:36', 0),
(2, 'AGT-565', 'Yao Florentine', '', 0, 0, 'khl', '', 1, 1, 1, '', 'test', 'test', 0, '2019-08-01 02:54:33', 0);

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE IF NOT EXISTS `commune` (
  `id_commune` int(11) NOT NULL AUTO_INCREMENT,
  `commune` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  PRIMARY KEY (`id_commune`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `commune`
--


-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE IF NOT EXISTS `demandes` (
  `id_demandes` int(11) NOT NULL AUTO_INCREMENT,
  `code_demande` varchar(100) NOT NULL,
  `commune` varchar(100) NOT NULL,
  `quartier` varchar(100) NOT NULL,
  `localisation` text NOT NULL,
  `categorie` varchar(200) NOT NULL,
  `Activite` varchar(100) NOT NULL,
  `photo1` varchar(100) NOT NULL,
  `photo2` varchar(100) NOT NULL,
  `photo3` varchar(100) NOT NULL,
  `photo4` varchar(200) NOT NULL,
  `statut` int(11) NOT NULL,
  `residence` varchar(100) NOT NULL,
  `dateaj_demande` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `useraddid` int(11) NOT NULL,
  PRIMARY KEY (`id_demandes`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `demandes`
--

INSERT INTO `demandes` (`id_demandes`, `code_demande`, `commune`, `quartier`, `localisation`, `categorie`, `Activite`, `photo1`, `photo2`, `photo3`, `photo4`, `statut`, `residence`, `dateaj_demande`, `useraddid`) VALUES
(1, 'D-1907-B5W', 'Cocody', 'Riviera Golf', 'uykjkmik mlkml:j, ', '2', 'boulangerie', '', '', '', '', 1, 'Riviera Golf', '2019-07-31 14:08:33', 1),
(2, 'D-1907-LAX', 'Cocody', 'Riviera Golf', 'oikÃ¹pml kÃ¹pmlkpÃ¹mlk;mÃ¹; ', '4', 'boulangerie', '', '', '', '', 0, 'Cocody Deux plateaux', '2019-07-31 14:30:43', 2),
(4, 'D-1907-TLU', 'Cocody - AngrÃ©', 'Saint-Jean', 'A 100 MÃ¨tre du centre commercial non loin de la Station Shell ', '3', 'Boulangerie et restaurant', '', '', '', '', 1, 'Yopougon', '2019-07-31 15:14:03', 3),
(5, 'D-1908-QJX', 'AdjamÃ©', 'Abrass', 'Abrass non loin de camps GaliÃ©ni ', '4', 'Depot d''un panneau pub', '', '', '', '', 0, 'AdjamÃ©', '2019-08-01 06:41:07', 4),
(6, 'D-1908-4QE', 'Cocody', 'AngrÃ© 8Ã¨me tranche Coco Vico', 'A 150 metres de la pharmacie de la 8Ã¨me tranche ', '1', 'boulangerie', '', '', '', '', 1, 'Riviera Golf', '2019-08-05 14:15:31', 7),
(7, 'D-1908-5RH', 'Cocody', 'Cocody Danga', 'Non loin de Cote d''ivoire TelÃ©com ', '1', 'boulangerie', '', '', '', '', 1, 'Riviera Golf', '2019-08-10 08:45:43', 8);

-- --------------------------------------------------------

--
-- Structure de la table `fonction_agent`
--

CREATE TABLE IF NOT EXISTS `fonction_agent` (
  `id_fonction_agent` int(11) NOT NULL AUTO_INCREMENT,
  `fonction_agent` varchar(100) NOT NULL,
  `niveau` int(11) NOT NULL,
  `Description` text NOT NULL,
  `id_services` int(11) NOT NULL,
  PRIMARY KEY (`id_fonction_agent`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `fonction_agent`
--

INSERT INTO `fonction_agent` (`id_fonction_agent`, `fonction_agent`, `niveau`, `Description`, `id_services`) VALUES
(1, 'Directeur de l''Administration du SIGFiP', 0, '', 0),
(4, 'Secrétaire /Directeur de l''Administration du SIGFiP ', 0, '', 0),
(5, 'Agent de Transmission DAS', 0, '', 0),
(6, 'Chauffeur du DAS', 0, '', 0),
(7, 'Sous-Directeur des Services Déconcentrés', 0, '', 0),
(8, 'Secrétaire /Sous-Directeur des Services Déconcentrés', 0, '', 0),
(9, 'Sous-Directeur des Services Centraux', 0, '', 0),
(10, 'Secrétaire /Sous-Directeur des Services Centraux', 0, '', 0),
(11, 'Sous-Directeur de l''Exploitaion Technique, de la Sécurité et de la Logistique', 0, '', 0),
(12, 'Chef de Service de la Gestion du Personnel', 0, '', 5),
(13, 'Chef de Service du SIGFiP Central', 0, '', 6),
(14, 'Chargé d''Etudes', 0, '', 0),
(15, 'Opérateur de saisie', 0, '', 0),
(16, 'Chauffeur', 0, '', 0),
(17, 'Administrateur de Base', 0, '', 0),
(18, 'Maintenance Système et Matériel', 0, '', 0),
(19, 'Gestionnaire du Matériel', 0, '', 0),
(20, 'Chauffeur pool', 0, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE IF NOT EXISTS `historique` (
  `id_historique` int(11) NOT NULL AUTO_INCREMENT,
  `id_ged_dossier` int(11) NOT NULL DEFAULT '0',
  `id_action` varchar(11) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `dateaj` datetime NOT NULL,
  `useraddid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_historique`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `historique`
--


-- --------------------------------------------------------

--
-- Structure de la table `historique_actions`
--

CREATE TABLE IF NOT EXISTS `historique_actions` (
  `id_historique_actions` int(11) NOT NULL AUTO_INCREMENT,
  `historique_actions` varchar(100) NOT NULL DEFAULT '',
  `code_action` varchar(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_historique_actions`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `historique_actions`
--


-- --------------------------------------------------------

--
-- Structure de la table `imputation`
--

CREATE TABLE IF NOT EXISTS `imputation` (
  `id_imputation` int(11) NOT NULL AUTO_INCREMENT,
  `id_impute_par` int(11) NOT NULL DEFAULT '0',
  `id_impute_a` int(11) NOT NULL DEFAULT '0',
  `id_demandes` int(11) NOT NULL DEFAULT '0',
  `note_instruction` longtext NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '0',
  `dateaj_imputation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `useraddid_imputation` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_imputation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `imputation`
--

INSERT INTO `imputation` (`id_imputation`, `id_impute_par`, `id_impute_a`, `id_demandes`, `note_instruction`, `statut`, `dateaj_imputation`, `useraddid_imputation`) VALUES
(1, 1, 2, 4, 'instruccc', 0, '2019-08-01 03:06:06', 1),
(2, 1, 1, 1, 'rdfgjh,n', 0, '2019-08-01 03:07:03', 1),
(3, 1, 2, 6, 'Veuillez traiter cette demande conformemt aux requete du demandeur', 0, '2019-08-05 14:18:42', 1),
(4, 1, 1, 7, 'PriÃ¨re traiter ce dossiers, faire la visite et nous informer si la demande est conforme', 0, '2019-08-10 08:52:38', 1),
(5, 1, 0, 7, '', 0, '2019-08-10 08:54:08', 1),
(6, 1, 0, 7, '', 0, '2019-08-10 08:55:05', 1);

-- --------------------------------------------------------

--
-- Structure de la table `inspections`
--

CREATE TABLE IF NOT EXISTS `inspections` (
  `id_inspections` int(11) NOT NULL AUTO_INCREMENT,
  `code_client` varchar(20) NOT NULL,
  `date_prevue` varchar(20) NOT NULL,
  `date_realisee` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `resultats` int(11) NOT NULL,
  `effectue_par` int(11) NOT NULL,
  `statut` int(11) NOT NULL,
  `useraddid` int(11) NOT NULL,
  `dateaj` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_inspections`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `inspections`
--


-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE IF NOT EXISTS `niveau` (
  `id_niveau` int(11) NOT NULL AUTO_INCREMENT,
  `Détails` text NOT NULL,
  PRIMARY KEY (`id_niveau`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `niveau`
--


-- --------------------------------------------------------

--
-- Structure de la table `parametres`
--

CREATE TABLE IF NOT EXISTS `parametres` (
  `IDparametres` int(11) NOT NULL AUTO_INCREMENT,
  `Dénomination` varchar(225) NOT NULL,
  `code_client` varchar(225) NOT NULL,
  `image_fonds` blob NOT NULL,
  PRIMARY KEY (`IDparametres`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `parametres`
--


-- --------------------------------------------------------

--
-- Structure de la table `pieces_jointes`
--

CREATE TABLE IF NOT EXISTS `pieces_jointes` (
  `id_pieces_jointes` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` varchar(255) NOT NULL DEFAULT '',
  `code_ged_dossier` varchar(11) NOT NULL DEFAULT '',
  `ged_pieces_jointes` longblob NOT NULL,
  PRIMARY KEY (`id_pieces_jointes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `pieces_jointes`
--


-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id_services` int(11) NOT NULL AUTO_INCREMENT,
  `type_service` int(11) NOT NULL,
  `services` varchar(100) NOT NULL,
  `sigle` varchar(50) NOT NULL,
  PRIMARY KEY (`id_services`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `services`
--

INSERT INTO `services` (`id_services`, `type_service`, `services`, `sigle`) VALUES
(6, 0, 'Service du SIGFiP Central', 'SSC'),
(5, 0, 'Service de la Gestion du Personnel', 'SGP'),
(7, 0, 'Service des Opérations Budgétaires', 'SOB'),
(8, 0, 'Service du SIGFiP Déconcenté', 'SSD'),
(9, 0, 'Service des Etudes et des Statistiques', 'SES'),
(10, 0, 'Service de la logistique et de la Maintenance', 'SLM'),
(11, 0, 'Contrôle Budgétaire', 'CB');

-- --------------------------------------------------------

--
-- Structure de la table `traitement`
--

CREATE TABLE IF NOT EXISTS `traitement` (
  `id_traitement` int(11) NOT NULL AUTO_INCREMENT,
  `id_imputation` int(11) NOT NULL DEFAULT '0',
  `id_atraiter_par` int(11) NOT NULL DEFAULT '0',
  `detail_traitement` varchar(225) NOT NULL DEFAULT '',
  `note_traitement` longtext NOT NULL,
  `delai_traitement` varchar(18) NOT NULL DEFAULT '',
  `avec_piece` int(11) NOT NULL DEFAULT '0',
  `piece_jointe` int(11) NOT NULL DEFAULT '0',
  `statut` int(11) NOT NULL DEFAULT '0',
  `dateaj` datetime NOT NULL,
  `useraddid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_traitement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `traitement`
--


-- --------------------------------------------------------

--
-- Structure de la table `type_action`
--

CREATE TABLE IF NOT EXISTS `type_action` (
  `id_type_action` int(11) NOT NULL AUTO_INCREMENT,
  `type_action` varchar(222) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_type_action`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `type_action`
--


-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `code_client` varchar(50) NOT NULL,
  `nom_prenom` varchar(100) NOT NULL,
  `datenais` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `domaine` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `dateaj` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_users`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_users`, `code_client`, `nom_prenom`, `datenais`, `contact`, `mail`, `domaine`, `mdp`, `dateaj`) VALUES
(1, '1907-214503', 'SOW Dimba', '1982-07-12', '58358866', 'dimbas@yahoo.fr', 'NTICS', 'a', '2019-07-30 20:40:29'),
(2, '1907-214503', 'Raymond Konan Yao Idiore', '1982-07-12', '58358866', 'dimbasowd@yahoo.fr', 'NTICS', 'z', '2019-07-30 20:52:24'),
(3, '1907-325696', 'yobouet koicou', '1999-01-01', '08358766', 'test@test.fr', 'z', 'admin', '2019-07-31 19:04:37'),
(4, '1908-171408', 'last test Dimba', '1962-12-01', '89789878', 'yes@test.fr', 'Events', 'a', '2019-08-01 06:34:06'),
(5, '1908-892555', 'Richard Seshie', '1986-10-25', '79733465', 'richard.seshie@gmail.com', '', 'Divine1010!', '2019-08-01 12:05:12'),
(6, '1908-718267', 'SOW Dimba', '', '58358866', 'test_dimba@yahoo.fr', 'Informatique', '123', '2019-08-05 13:30:13'),
(7, '1908-315379', 'Yao Isidore', '', '05585858', 'isidore@mail.fr', 'restauration', '123', '2019-08-05 14:12:34'),
(8, '1908-326702', 'Richard Sechie', '', '58358866', 'richard@test.com', 'Entreprenariat', '12345', '2019-08-10 08:42:06');
