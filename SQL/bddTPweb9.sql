CREATE DATABASE bddtpweb;

USE bddtpweb;

CREATE TABLE Oeuvres (
  idOeuvre int(11) NOT NULL AUTO_INCREMENT,
  Titre VARCHAR(64),
  Prix FLOAT,
  Datecreat DATE,
	PRIMARY KEY (idOeuvre)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO Oeuvres(Titre, Prix, Datecreat) VALUES
("Grenouille foireuse",2.0,"2018-06-24"),
("Dragon enflammé",223.5,"2016-06-24"),
("Souris fertile",0.7,"2017-06-24"),
("Gourde Quechua",7.0,"2019-06-24");