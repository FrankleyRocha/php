CREATE DATABASE IF NOT EXISTS php_pdo_example
  CHARACTER SET utf8
  COLLATE utf8_general_ci;

GRANT ALL PRIVILEGES
  ON php_pdo_example.*
  TO php_pdo_example@localhost
  IDENTIFIED BY 'php_pdo_example';

use php_pdo_example;

-- Estrutura da tabela pessoa
CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
);