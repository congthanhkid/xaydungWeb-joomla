
DROP TABLE IF EXISTS `#__jvcounter_logs`;
CREATE TABLE IF NOT EXISTS `#__jvcounter_logs` (
  `session_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `timestart` int(11) NOT NULL,
  `timelast` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `browser` text NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `lasturl` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
