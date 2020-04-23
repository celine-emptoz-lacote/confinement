-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 23, 2020 at 09:12 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `confinement`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'commerce-alimentaire');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `numero_commande` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `prix` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `paiement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `commande_produit`
--

CREATE TABLE `commande_produit` (
  `id` int(11) NOT NULL,
  `numero_commande` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `droit`
--

CREATE TABLE `droit` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `droit`
--

INSERT INTO `droit` (`id`, `nom`) VALUES
(1, 'standard'),
(50, 'commercant');

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `id_commercant` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `dossier_photo` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `id_commercant`, `nom`, `prix`, `dossier_photo`, `photo`, `stock`) VALUES
(1, 2, 'Le  Boeuf Charolais fermier « Label Rouge »', '30', 'src/images/produit/boucherie-jacques/boeuf/', 'boeuf1.JPG', 10),
(2, 2, 'Le Porc Fermier « Label Rouge »', '20', 'src/images/produit/boucherie-jacques/porc-fermier2/', 'porc-fermier.jpg', 10),
(3, 2, 'L’agneau Fermier « Label Rouge »', '30', 'src/images/produit/boucherie-jacques/agneau/', 'agneau.JPG', 10),
(4, 2, 'Le Porc fermier de race Berkshire', '35', 'src/images/produit/boucherie-jacques/porc-fermier/', 'porc-fermier.jpg', 10),
(5, 2, 'La Pluma et le Secreto Ibérique', '20', 'src/images/produit/boucherie-jacques/pluma/', 'la-pluma.JPG', 10),
(6, 2, 'Les Saucisses fraîches ', '6', 'src/images/produit/boucherie-jacques/saucisse/', 'la-saucisse.JPG', 10);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone` float NOT NULL,
  `password` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` float NOT NULL,
  `ville` varchar(255) NOT NULL,
  `id_droit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `prenom`, `nom`, `mail`, `telephone`, `password`, `adresse`, `code_postal`, `ville`, `id_droit`) VALUES
(1, 'justine', 'lesur', 'justine.lesur@laplateforme.io', 679305000, 'justine', '12 boulevard Ferdinand de Lesseps', 13090, 'Aix-en-Provence', 1);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs_commercants`
--

CREATE TABLE `utilisateurs_commercants` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `raison_social` varchar(255) NOT NULL,
  `téléphone` float NOT NULL,
  `siret` float NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adresse_magasin` varchar(255) NOT NULL,
  `code_postal_magasin` float NOT NULL,
  `ville_magasin` varchar(255) NOT NULL,
  `adresse_siege` varchar(255) NOT NULL,
  `code_postal_siege` float NOT NULL,
  `ville_siege` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_droit` int(11) NOT NULL,
  `dossier_image` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs_commercants`
--

INSERT INTO `utilisateurs_commercants` (`id`, `nom`, `prenom`, `raison_social`, `téléphone`, `siret`, `mail`, `password`, `adresse_magasin`, `code_postal_magasin`, `ville_magasin`, `adresse_siege`, `code_postal_siege`, `ville_siege`, `id_categorie`, `id_droit`, `dossier_image`, `image`, `description`) VALUES
(2, 'Montagné', 'Gilbert', 'Boucherie Jacques', 677778000, 80295500000000, 'Boucherie-jacques@gmail.com', 'gilbert', '8 rue d\'hozier\r\n', 13002, 'Marseille', 'La Joliette Marseille', 13002, 'Marseille', 1, 50, 'src/images/commercant/alimentaire/boucherie-jacques/', 'beef.webp', 'Prestations : épicerie fine, rôtisserie, triperie, préparation de commande, service traiteur, abats, viandes, volailles, bœufs, charcuteries, fromages fins, vins, champagnes, plats cuisinés'),
(3, 'Lemaire', 'Bruno', 'L\'art de la Fromagerie', 655556000, 73282900000000, 'bruno-lemaire@gmail.com', 'bruno', '12 rue des epices', 30900, ' Nîmes', '12 rue des epices', 30900, ' Nîmes', 1, 50, 'src/images/commercant/alimentaire/fromagerie/', 'fromage.jpg', 'Prestations : coopérative laitière, vente de fromage, Livraison dans tout Marseille,\r\nvacherin, Brie de meaux, Brie de melun, Fromage à raclette, Lait de brebis, Bleu de gex, Tomme de brebis'),
(4, 'Zemmour', 'Eric', 'Epicerie Les Deux Rives', 666667000, 35600000000000, 'Zemmour.Eric@gmail.com', 'zemmour', '12 chemin du quartier d\'Espagne', 30900, 'Nîmes', '12 chemin du quartier d\'Espagne', 30900, 'Nîmes', 1, 50, 'src/images/commercant/alimentaire/primeur/', 'corbeille-de-fruits.jpg', 'Prestations : fruits, légumes, alimentation orientale, dépôt de pain, livraison à domicile, livraison de courses à domicile, épicerie, fruits, légumes, plats préparés, Thé à la menthe, Pâtisserie Orientale, Glaces\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commande_produit`
--
ALTER TABLE `commande_produit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `droit`
--
ALTER TABLE `droit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `utilisateurs_commercants`
--
ALTER TABLE `utilisateurs_commercants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `commande_produit`
--
ALTER TABLE `commande_produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `droit`
--
ALTER TABLE `droit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `utilisateurs_commercants`
--
ALTER TABLE `utilisateurs_commercants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

