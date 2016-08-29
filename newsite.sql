-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Ago-2016 às 14:39
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_08_19_201512_create_products_table', 1),
('2016_08_22_131211_create_services_table', 1),
('2016_08_22_133242_create_tests_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coast` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `nameService` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longDescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imageService` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publish` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `services`
--

INSERT INTO `services` (`id`, `nameService`, `description`, `longDescription`, `imageService`, `url`, `publish`, `created_at`, `updated_at`) VALUES
(6, 'Teste Validator HorseMask', 'Teste Validator', '<p>Teste Validator</p>', 'KJhBxy6Ldp2wnTIFh9p2AmJYuawszNnmIye33L0H.jpg', 'teste_validator_horsemask', '1', '2016-08-23 19:41:29', '2016-08-25 19:35:37'),
(5, 'another', 'tests', '<p>Teste Validator33</p>', 'vBeD6S8Swprds3ShLloy5DW8RBMhAS0AHA0ljbPd.jpg', 'service_teste_url', '1', '2016-08-23 19:41:07', '2016-08-25 19:26:01'),
(8, 'Novo serviço', 'Teste Validator', '<p>Teste Validator</p>', 'GvOkIHoAIXgt5Zgn9nA5W13YhTG4lxhxGqnw8wBN.jpg', 'service_teste_url', '1', '2016-08-23 19:42:16', '2016-08-23 19:42:16'),
(9, ' Bitches', 'this is sparta', '<p><strong>&nbsp;this is sparta</strong></p>', 'axeinilTMmIbn1wHWTYwcz6xIUcY6iwCWeUnTHCb.jpg', 'service_teste_url', '1', '2016-08-23 21:59:08', '2016-08-23 21:59:08'),
(10, 'Novo serviço Teste de Acênto', ' Novo serviço Teste de Acênto', '<p><strong>&nbsp;dsNovo servi&ccedil;o Teste de Ac&ecirc;nto</strong></p>', 'iNkKw5WJlKbyaaAPIAGONvzOHhph5fKrWEyFeOkI.jpg', 'novo_servico_teste_de_acento', '0', '2016-08-23 22:27:25', '2016-08-24 16:12:21'),
(11, 'Nôvo Sêrvíço 333', ' Nôvo Sêrvíço', '<p>N&ocirc;vo S&ecirc;rv&iacute;&ccedil;o</p>', 'KjFn77Vv2LHcrjRXuDCQLDIgWPt00yBq0JzPti5n.jpg', 'novo_servico_333', '1', '2016-08-23 22:33:26', '2016-08-23 22:33:26'),
(12, 'fdsfsdfsd', ' sdfs', '<p>&nbsp;dfsdf</p>', 'VsdJBPV5Ibq9hN67A3kOW8cdIK3DzBBo3xhtEQBk.jpg', 'fdsfsdfsd', '1', '2016-08-23 22:58:58', '2016-08-23 22:58:58'),
(13, ' fdserr', ' rwef', '<p>fsdf</p>', 'Vza9ju2ERFgc8X2HxPHKRdtqTi28arZABueRBSkr.jpg', 'fdserr', '1', '2016-08-23 22:59:15', '2016-08-23 22:59:15'),
(14, ' tretreth', ' hgfhfgh', '<p>&nbsp;hfghfgh</p>', 'DKderVRTNnUOtaq7k6vdZdDmeVMLhxdBBCd3zT6ajpg', 'tretreth', '1', '2016-08-23 23:20:29', '2016-08-23 23:20:29'),
(17, 'quero png porra agora vai carai', ' http://localhost:8000/image/images/0qd4b6WQM02IZGMit4O4lJA1PtUTrPVTQpBovM5ppng', '<p>&nbsp;http://localhost:8000/image/images/0qd4b6WQM02IZGMit4O4lJA1PtUTrPVTQpBovM5ppng</p>', 'vOV4wZOS0liDhFa9LldC5LXHCtdbWy9O8s3lOyU5.png', 'quero_png_porra_agora_vai_carai', '0', '2016-08-23 23:23:46', '2016-08-24 16:12:08'),
(18, 'gggggfd777', ' gfdgd', '<p>&nbsp;gfdgdtret</p>', '7qEqSnhJR5a1ab29VWX2y0Q8axji5EufxQB3NAc8.png', 'gggggfd777', '1', '2016-08-23 23:37:48', '2016-08-23 23:37:48'),
(19, ' mmmnb jui 66  yut', ' 6456jh jgh', '<p>&nbsp;gdsfg</p>', 'deJZM99EzR4vxG2R4XtZtKGGmUaKoaIaQ9nRh4ug.jpg', 'mmmnb_jui_66_yut', '1', '2016-08-23 23:40:11', '2016-08-23 23:40:11'),
(20, ' Novo site quase pronto', '  Novo site quase pronto', '<p>&nbsp; Novo site <strong>quase</strong> pronto</p>', 'LA8fVYI658KFl7amYE1paJBG0XX3O94Ey2npuz4P.jpg', 'novo_site_quase_pronto', '1', '2016-08-24 00:41:20', '2016-08-24 00:41:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yuri Alexs', 'yuri.alexs@gmail.com', '$2y$10$V/DCZ6T7gNFyN2v6tMsvGe2XQv3tJXiZKdJ6re0b3HLaGW9vLvEEm', NULL, '2016-08-23 19:12:22', '2016-08-23 19:12:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_nameservice_unique` (`nameService`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
