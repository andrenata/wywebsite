-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 16 Nov 2018 pada 12.27
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mywebsite`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id_category` int(3) NOT NULL,
  `title_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id_category`, `title_category`) VALUES
(1, 'Temple'),
(2, 'Sport'),
(3, 'Cooking');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_post`
--

CREATE TABLE `category_post` (
  `id` int(3) NOT NULL,
  `id_category` int(3) NOT NULL,
  `id_post` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id_post` int(3) NOT NULL,
  `title_post` varchar(200) NOT NULL,
  `article` longtext NOT NULL,
  `price` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id_post`, `title_post`, `article`, `price`) VALUES
(1, 'White Water Rafting', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel enim numquam rem minus laborum, natus totam saepe voluptates alias, iste, nulla est, non perspiciatis veniam minima expedita repudiandae magnam inventore.', 25),
(2, 'Ubud Temple Tour', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, voluptates necessitatibus assumenda nesciunt distinctio deleniti vitae consequuntur eaque consequatur nemo, corporis unde, maiores aut soluta pariatur, accusamus odio dolore. Maiores.', 50),
(3, 'Cooking Class', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, voluptates necessitatibus assumenda nesciunt distinctio deleniti vitae consequuntur eaque consequatur nemo, corporis unde, maiores aut soluta pariatur, accusamus odio dolore. Maiores.', 55),
(4, 'UNESCO Bali Tour', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, voluptates necessitatibus assumenda nesciunt distinctio deleniti vitae consequuntur eaque consequatur nemo, corporis unde, maiores aut soluta pariatur, accusamus odio dolore. Maiores.', 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
