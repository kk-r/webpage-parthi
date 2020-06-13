--
-- Table structure for table `MyLog`
--

CREATE TABLE `MyLog` (
  `id` int(6) UNSIGNED NOT NULL,
  `log_time` datetime NOT NULL,
  `log_imie` varchar(15) NOT NULL,
  `log_data` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `MyLog`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `MyLog`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=955;
COMMIT;
