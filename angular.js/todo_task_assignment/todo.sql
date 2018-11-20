
CREATE TABLE IF NOT EXISTS `todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
);



INSERT INTO `todo` (`id`, `item`, `status`, `created_at`) VALUES
(8, 'This was very hard', 0, '2018-18-11'),
(13, 'Alot of google research', 0, '2018-18-11'),
(15, 'I am ready to pull hair out', 0, '2018-18-11'),
(16, 'I admit defeat', 0, '2018-18-11'),
(17, 'See you next month', 0, '2018-18-11');

