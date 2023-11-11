-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-10-29 22:50:47
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `task_six_blogs`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `blogs`
--

CREATE TABLE `blogs` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`) VALUES
(2, 'b', 'bbb'),
(3, 'c', 'ccc\r\n'),
(4, 'd', 'ddd'),
(7, 'e', 'eee'),
(11, 'f', 'fff'),
(12, 'a', 'aaa');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'tsukasa111111@gmail.com', '$2y$10$Mshq0SPi0UTEkDPA.EPOTO3PmkwT3ZslqtWIvLaBr4jE0mYbicGL2', '2023-04-09 05:02:33', '2023-04-09 05:02:33'),
(7, 'tsukasa091205@gmail.com', '$2y$10$6/FPTvrkSG5dt3.J7wTczuT4ZFc.iwVriS32U6Mn4ceOIX80Q5PeG', '2023-04-09 05:07:02', '2023-04-09 05:07:02'),
(8, 'tsukasa.wdpro@gmail.com', '$2y$10$AwAd8R1Ok.1HEzex0KNaKOFGgfaWSkaTLF3Cg5MA7cNW3PSxghm6C', '2023-10-07 09:39:06', '2023-10-07 09:39:06');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
