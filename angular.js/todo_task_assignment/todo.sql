
CREATE TABLE IF NOT EXISTS `todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
);



INSERT INTO `todo` (`id`, `item`, `status`, `created_at`) VALUES
(1, 'This was very hard', 1, '2018-18-11'),
(2, 'Alot of google research', 1, '2018-18-11'),
(3, 'I am ready to pull hair out', 1, '2018-18-11'),
(4, 'I admit defeat', 1, '2018-18-11'),
(5, 'See you next month', 1, '2018-18-11');

