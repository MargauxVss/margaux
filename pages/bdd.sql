-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 04 avr. 2018 à 10:50
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `labo_dev`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` smallint(6) NOT NULL,
  `imagesrc` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `imagesrc`, `alt`, `name`, `description`, `prix`) VALUES
(1, '../im/im1.JPEG', 'Septum - anneau en laiton', 'Septum - anneau en laiton', 'Cette cloison unique est fait de laiton et orné de petites boules en laiton. <br/>pour le nez percé.<br/> peut être porté sur l\'oreille <br/>La barre est de 1 mm. 18 Gauge.<br/>Bague intérieure: 8mm<br/>sans nickel. ', 8.9),
(2, '../im/im.jpg', 'Nombril - pistolets', 'Nombril - pistolets', 'Métal travaillé <br/> Bronze et Laiton (sans nickel) <br/> Elegant et détendu', 12.9),
(3, '../im/im3.JPEG', 'Nombril - attrape rêves', 'Nombril - attrape rêves', 'Laiton (sans nickel) <br/> Pour un style détendu', 6),
(4, '../im/im4.jpg', 'plugs/expanders gauges metallic', 'plugs/expanders gauges metallic', 'Bijoux en métal de grande qualité <br/> Personnalisable à la demande', 22.9),
(5, '../im/im5.jpg', 'Boucles d\'oreilles - Tribal laiton', 'Boucles d\'oreilles - Tribal laiton', 'Laiton (sans nickel) <br/>Boucles d\'oreilles pendantes dans un style tribal ', 14.9),
(6, '../im/im8.jpg', 'plugs/écarteurs flocon de neige 6mm', 'plugs/écarteurs flocon de neige 6mm', 'Diamètre des flocons : 1,7cm <br/> Acrylique <br/> Entretien : chiffon humide', 12.9),
(7, '../im/im6.jpg', 'Boucles d\'oreilles araignée', 'Boucles d\'oreilles araignée', 'Boucles d\'oreilles étranges 6mm  <br/> Acrylique   <br/> Faciles à mettre et à enlever', 4.9),
(8, '../im/im7.jpg', 'Boucles d\'oreilles géométriques', 'Boucles d\'oreilles géométriques', 'Laiton (sans nickel) <br/> Finition plaquée or 14k <br/> Personnalisables à la demande ', 14.9);

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `piercing` varchar(255) DEFAULT NULL,
  `prix` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id`, `piercing`, `prix`) VALUES
(3, 'Arcade', 30),
(4, 'Arcade horizontale', 40),
(5, 'Bridge', 55),
(6, 'Conch (fond d\'oreille)', 45),
(7, 'Death (repli cartilage)', 45),
(8, 'Filet (langue ou lèvre)', 50),
(9, 'Hélix (cartilage)', 25),
(10, 'Langue', 40),
(11, 'Lèvre (tour de bouche)', 35),
(12, 'Lobe (oreille)', 10),
(13, 'Microdermal (+de18ans)', 60),
(14, 'Nez', 25),
(15, 'Nombril', 40),
(16, 'Septum', 50),
(17, 'Téton', 45),
(18, 'Surface', 45),
(19, 'Tragus / repli cartilage', 30),
(20, 'Traversée', 50),
(21, 'Genitaux -> nous consulter', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `mail` tinytext NOT NULL,
  `password` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `mail`, `password`) VALUES
(1, 'Hell', 'atsatanplace@daemon.com', '4EVER666'),
(2, 'Heaven', 'little.angel@chantilly.com', 'Cute4N1M4L5'),
(3, 'oui', 'non@oui.com', 'xxx'),
(4, 'roudoudou', 'oiui@dfg.com', '5d41402abc4b2a76b9719d911017c592'),
(5, 'a', '', 'a');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;