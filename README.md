# projetointegrador
repositório para o projeto integrador do segundo semestre
 

SQL: 


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome` tinytext NOT NULL,
  `senha` text NOT NULL,
  `sexo` int(11) NOT NULL,
  `idade` int(11) NOT NULL,
  `altura` double NOT NULL,
  `peso` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;
