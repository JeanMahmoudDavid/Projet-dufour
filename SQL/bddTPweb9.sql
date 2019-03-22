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
  Theme VARCHAR(64),
  PRIMARY KEY (idTheme)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE Annee (
  idAnnee int(11) NOT NULL AUTO_INCREMENT,
  Annee DATE,
  PRIMARY KEY (idAnnee)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE Oeuvres
ADD CONSTRAINT Annee_idAnnee
FOREIGN KEY Oeuvres_idAnnee
REFERENCES Oeuvres(idAnnee)

ALTER TABLE Theme
ADD CONSTRAINT Oeuvres_idTheme
FOREIGN KEY Oeuvres_idAnnee
REFERENCES Theme(idOeuvres)

FOREIGN KEY 

INSERT INTO Oeuvres(Titre, Prix, Datecreat) VALUES
("Grenouille foireuse",2.0,"2018-06-24"),
("Dragon enflammé",223.5,"2016-06-24"),
("Souris fertile",0.7,"2017-06-24"),
("Gourde Quechua",7.0,"2019-06-24");