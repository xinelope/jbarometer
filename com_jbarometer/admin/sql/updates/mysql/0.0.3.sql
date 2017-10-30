DROP TABLE IF EXISTS `#__jbarometer`;

CREATE TABLE `#__jbarometer` (
		`id` INT(11) NOT NULL AUTO_INCREMENT ,
		`etappe1` INT(8) NOT NULL ,
		`datum1` DATE NOT NULL ,
		`zielsumme` INT(8) NOT NULL ,
		`zieldatum` DATE NOT NULL ,
		`stand` INT(8) NOT NULL ,
		`standdatum` DATE NOT NULL ,
		PRIMARY KEY (`id`)) ENGINE = MyISAM;
INSERT INTO `#__jbarometer` (`id`, `etappe1`, `datum1`, `zielsumme`, `zieldatum`, `stand`, `standdatum`)
VALUES (NULL, '100000', '2017-12-01', '500000', '2017-12-31', '34100', NOW())
