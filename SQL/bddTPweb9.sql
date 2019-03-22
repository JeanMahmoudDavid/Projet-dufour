CREATE DATABASE bddtpweb;

USE bddtpweb;

CREATE TABLE Oeuvres (
  idOeuvre int(11) NOT NULL AUTO_INCREMENT,
  Titre VARCHAR(64),
  Prix FLOAT,
  Datecreat DATE,
  idTheme int(11),
  idAnnee int(11),
	PRIMARY KEY (idOeuvre)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE Theme (
  idTheme int(11) NOT NULL AUTO_INCREMENT,
  valtheme VARCHAR(64),
  PRIMARY KEY (idTheme)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE Annee (
  idAnnee int(11) NOT NULL AUTO_INCREMENT,
  valannee int(11),
  PRIMARY KEY (idAnnee)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE Oeuvres
ADD CONSTRAINT Oeuvres_idAnnee
FOREIGN KEY (idAnnee)
REFERENCES Annee (idAnnee);

ALTER TABLE Oeuvres
ADD CONSTRAINT Oeuvres_idTheme
FOREIGN KEY (idTheme)
REFERENCES Theme (idTheme);

INSERT INTO Oeuvres(Titre, Prix, Datecreat) VALUES
("Grenouille foireuse",2.0,"2018-06-24"),
("Dragon enflammé",223.5,"2016-06-24"),
("Souris fertile",0.7,"2017-06-24"),
("Gourde Quechua",7.0,"2019-06-24");

INSERT INTO Annee(valannee) VALUES
("2018"),
("2019"),
("2020"),
("2021");

INSERT INTO Theme(valtheme) VALUES
("Animaux"),
("Fantastique"),
("Abstrait"),
("Figurine");