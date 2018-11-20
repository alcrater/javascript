<?php
//Setting up the database connection

$db_host = 'localhost'; //database is install on php server
$db_user = 'audrey'; //name to log into mysql
$db_password = 'southhills#'; //password to login to mysql
$db_name = 'audrey'; //name of the database within mysql
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}



USE angularcode_task;

CREATE TABLE IF NOT EXISTS `todo` (

  `id` int(11) NOT NULL AUTO_INCREMENT,

  `task` varchar(200) NOT NULL,

  `status` int(11) NOT NULL,

  `created_at` int(11) NOT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;




INSERT INTO `tasks` (`id`, `task`, `status`, `created_at`) VALUES

(1, 'My first task', 0, 1390815970),

(2, 'Task Two', 2, 1390815993),

(3, 'Find Three', 2, 1390817659),

(4, 'Find Four', 2, 1390818389);


?>

