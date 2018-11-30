CREATE TABLE IF NOT EXISTS `user` (
`ur_Id` int(11) NOT NULL AUTO_INCREMENT,
`ur_username` varchar(50) NOT NULL,
`ur_password` varchar(50) NOT NULL,
`ur_status` int(11) NOT NULL,
PRIMARY KEY (`ur_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO `user` (`ur_Id`, `ur_username`, `ur_password`, `ur_status`) VALUES
(1, 'asd1@gmail.com', '123', 1),
(2, 'asd2@gmail.com', '567', 1),
(3, 'asd3@gmail.com', '897', 1);

