-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2019 pada 20.28
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `judul` text,
  `foto` varchar(255) NOT NULL,
  `artikel` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `judul`, `foto`, `artikel`) VALUES
(10, 'testing', 'FFB1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis ac enim dapibus malesuada. Praesent tortor neque, tempor eget sagittis id, facilisis non ante. Nam non eleifend arcu. Donec ipsum nulla, iaculis vestibulum felis placerat, malesuada semper odio. Cras mattis porttitor metus, non imperdiet enim interdum ut. Sed suscipit vulputate est nec dapibus. Aenean vitae hendrerit metus.\r\n\r\nPraesent a felis aliquet, consequat ante at, lacinia tellus. Fusce quis urna viverra, lacinia velit nec, dapibus massa. Nunc blandit ut elit ut condimentum. Aliquam volutpat malesuada lacus vel interdum. Sed luctus dignissim volutpat. Fusce sed eros condimentum, volutpat leo eu, consectetur velit. Duis viverra luctus eros, et tempor est euismod nec.\r\n\r\nPellentesque turpis felis, dictum sed dignissim et, iaculis sed ipsum. Mauris elementum volutpat arcu, ut luctus libero eleifend a. Vivamus nibh felis, tempor id mattis vitae, aliquet nec quam. Nullam eu dictum diam. Aliquam in commodo erat, eu rhoncus nunc. Fusce quis posuere metus, vehicula pretium odio. Morbi nibh quam, varius in maximus id, pulvinar non eros.\r\n\r\nNulla in blandit neque. Nunc ornare sem nec dignissim finibus. Phasellus mauris orci, sagittis vitae justo non, consectetur facilisis massa. Vivamus ut facilisis mi. Sed fermentum est at purus auctor vestibulum. Nunc semper augue ligula, laoreet ornare eros vestibulum in. Aenean quam risus, ultrices sit amet semper nec, lacinia ornare metus. Suspendisse sit amet odio id turpis condimentum aliquam.\r\n\r\nMaecenas non aliquam enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque condimentum ac justo eu ornare. Sed ut magna blandit, sagittis dui sed, mollis diam. Donec eu pharetra sem. Proin condimentum odio ac odio dapibus condimentum. Praesent suscipit consequat eros, eget imperdiet magna malesuada eget. Sed suscipit vestibulum lectus egestas molestie. Etiam dignissim scelerisque accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sem nibh, pulvinar non sapien nec, maximus ultrices urna. Nam eget velit eu orci iaculis sollicitudin at in ipsum. Nulla efficitur bibendum aliquam. Mauris vehicula pulvinar gravida.'),
(11, 'testing 2', 'damn1.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis ac enim dapibus malesuada. Praesent tortor neque, tempor eget sagittis id, facilisis non ante. Nam non eleifend arcu. Donec ipsum nulla, iaculis vestibulum felis placerat, malesuada semper odio. Cras mattis porttitor metus, non imperdiet enim interdum ut. Sed suscipit vulputate est nec dapibus. Aenean vitae hendrerit metus.\r\n\r\nPraesent a felis aliquet, consequat ante at, lacinia tellus. Fusce quis urna viverra, lacinia velit nec, dapibus massa. Nunc blandit ut elit ut condimentum. Aliquam volutpat malesuada lacus vel interdum. Sed luctus dignissim volutpat. Fusce sed eros condimentum, volutpat leo eu, consectetur velit. Duis viverra luctus eros, et tempor est euismod nec.\r\n\r\nPellentesque turpis felis, dictum sed dignissim et, iaculis sed ipsum. Mauris elementum volutpat arcu, ut luctus libero eleifend a. Vivamus nibh felis, tempor id mattis vitae, aliquet nec quam. Nullam eu dictum diam. Aliquam in commodo erat, eu rhoncus nunc. Fusce quis posuere metus, vehicula pretium odio. Morbi nibh quam, varius in maximus id, pulvinar non eros.\r\n\r\nNulla in blandit neque. Nunc ornare sem nec dignissim finibus. Phasellus mauris orci, sagittis vitae justo non, consectetur facilisis massa. Vivamus ut facilisis mi. Sed fermentum est at purus auctor vestibulum. Nunc semper augue ligula, laoreet ornare eros vestibulum in. Aenean quam risus, ultrices sit amet semper nec, lacinia ornare metus. Suspendisse sit amet odio id turpis condimentum aliquam.\r\n\r\nMaecenas non aliquam enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque condimentum ac justo eu ornare. Sed ut magna blandit, sagittis dui sed, mollis diam. Donec eu pharetra sem. Proin condimentum odio ac odio dapibus condimentum. Praesent suscipit consequat eros, eget imperdiet magna malesuada eget. Sed suscipit vestibulum lectus egestas molestie. Etiam dignissim scelerisque accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sem nibh, pulvinar non sapien nec, maximus ultrices urna. Nam eget velit eu orci iaculis sollicitudin at in ipsum. Nulla efficitur bibendum aliquam. Mauris vehicula pulvinar gravida.'),
(12, 'judul testing', 'Air_Boosters.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis ac enim dapibus malesuada. Praesent tortor neque, tempor eget sagittis id, facilisis non ante. Nam non eleifend arcu. Donec ipsum nulla, iaculis vestibulum felis placerat, malesuada semper odio. Cras mattis porttitor metus, non imperdiet enim interdum ut. Sed suscipit vulputate est nec dapibus. Aenean vitae hendrerit metus.\r\n\r\nPraesent a felis aliquet, consequat ante at, lacinia tellus. Fusce quis urna viverra, lacinia velit nec, dapibus massa. Nunc blandit ut elit ut condimentum. Aliquam volutpat malesuada lacus vel interdum. Sed luctus dignissim volutpat. Fusce sed eros condimentum, volutpat leo eu, consectetur velit. Duis viverra luctus eros, et tempor est euismod nec.\r\n\r\nPellentesque turpis felis, dictum sed dignissim et, iaculis sed ipsum. Mauris elementum volutpat arcu, ut luctus libero eleifend a. Vivamus nibh felis, tempor id mattis vitae, aliquet nec quam. Nullam eu dictum diam. Aliquam in commodo erat, eu rhoncus nunc. Fusce quis posuere metus, vehicula pretium odio. Morbi nibh quam, varius in maximus id, pulvinar non eros.\r\n\r\nNulla in blandit neque. Nunc ornare sem nec dignissim finibus. Phasellus mauris orci, sagittis vitae justo non, consectetur facilisis massa. Vivamus ut facilisis mi. Sed fermentum est at purus auctor vestibulum. Nunc semper augue ligula, laoreet ornare eros vestibulum in. Aenean quam risus, ultrices sit amet semper nec, lacinia ornare metus. Suspendisse sit amet odio id turpis condimentum aliquam.\r\n\r\nMaecenas non aliquam enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque condimentum ac justo eu ornare. Sed ut magna blandit, sagittis dui sed, mollis diam. Donec eu pharetra sem. Proin condimentum odio ac odio dapibus condimentum. Praesent suscipit consequat eros, eget imperdiet magna malesuada eget. Sed suscipit vestibulum lectus egestas molestie. Etiam dignissim scelerisque accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sem nibh, pulvinar non sapien nec, maximus ultrices urna. Nam eget velit eu orci iaculis sollicitudin at in ipsum. Nulla efficitur bibendum aliquam. Mauris vehicula pulvinar gravida.'),
(14, 'judul asoy', 'ICON.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis ac enim dapibus malesuada. Praesent tortor neque, tempor eget sagittis id, facilisis non ante. Nam non eleifend arcu. Donec ipsum nulla, iaculis vestibulum felis placerat, malesuada semper odio. Cras mattis porttitor metus, non imperdiet enim interdum ut. Sed suscipit vulputate est nec dapibus. Aenean vitae hendrerit metus.\r\n\r\nPraesent a felis aliquet, consequat ante at, lacinia tellus. Fusce quis urna viverra, lacinia velit nec, dapibus massa. Nunc blandit ut elit ut condimentum. Aliquam volutpat malesuada lacus vel interdum. Sed luctus dignissim volutpat. Fusce sed eros condimentum, volutpat leo eu, consectetur velit. Duis viverra luctus eros, et tempor est euismod nec.\r\n\r\nPellentesque turpis felis, dictum sed dignissim et, iaculis sed ipsum. Mauris elementum volutpat arcu, ut luctus libero eleifend a. Vivamus nibh felis, tempor id mattis vitae, aliquet nec quam. Nullam eu dictum diam. Aliquam in commodo erat, eu rhoncus nunc. Fusce quis posuere metus, vehicula pretium odio. Morbi nibh quam, varius in maximus id, pulvinar non eros.\r\n\r\nNulla in blandit neque. Nunc ornare sem nec dignissim finibus. Phasellus mauris orci, sagittis vitae justo non, consectetur facilisis massa. Vivamus ut facilisis mi. Sed fermentum est at purus auctor vestibulum. Nunc semper augue ligula, laoreet ornare eros vestibulum in. Aenean quam risus, ultrices sit amet semper nec, lacinia ornare metus. Suspendisse sit amet odio id turpis condimentum aliquam.\r\n\r\nMaecenas non aliquam enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque condimentum ac justo eu ornare. Sed ut magna blandit, sagittis dui sed, mollis diam. Donec eu pharetra sem. Proin condimentum odio ac odio dapibus condimentum. Praesent suscipit consequat eros, eget imperdiet magna malesuada eget. Sed suscipit vestibulum lectus egestas molestie. Etiam dignissim scelerisque accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sem nibh, pulvinar non sapien nec, maximus ultrices urna. Nam eget velit eu orci iaculis sollicitudin at in ipsum. Nulla efficitur bibendum aliquam. Mauris vehicula pulvinar gravida.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
