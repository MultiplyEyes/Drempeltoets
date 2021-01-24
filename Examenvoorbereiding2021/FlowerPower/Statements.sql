CREATE DATABASE flowerpower;

USE flowerpower;

CREATE TABLE artikel(
    artikelcode INT NOT NULL AUTO_INCREMENT,
    artikel VARCHAR(100) NOT NULL,
    prijs DECIMAL(6,2) NOT NULL,
    PRIMARY KEY(artikelcode)
);

CREATE TABLE winkel(
    winkelcode INT NOT NULL AUTO_INCREMENT,
    winkelnaam VARCHAR(100) NOT NULL,
    winkeladres VARCHAR(100) NOT NULL,
    winkelpostcode VARCHAR(100) NOT NULL,
    vestigingsplaats VARCHAR(100) NOT NULL,
    telefoonnummer VARCHAR(100) NOT NULL,
    PRIMARY KEY(winkelcode)
);

CREATE TABLE medewerker(
    medewerkerscode INT NOT NULL AUTO_INCREMENT,
    voorletters VARCHAR(100) NOT NULL,
    voorvoegsels VARCHAR(100),
    achternaam VARCHAR(100) NOT NULL,
    gebruikersnaam VARCHAR(100) NOT NULL,
    wachtwoord VARCHAR(100) NOT NULL,
    PRIMARY KEY(medewerkerscode)
);

CREATE TABLE klant(
    klantcode INT NOT NULL AUTO_INCREMENT,
    voorletters VARCHAR(100) NOT NULL,
    tussenvoegsels VARCHAR(100),
    achternaam VARCHAR(100) NOT NULL,
    adres VARCHAR(100) NOT NULL,
    postcode VARCHAR(100) NOT NULL,
    woonplaats VARCHAR(100) NOT NULL,
    geboortedatum DATE NOT NULL,
    gebruikersnaam VARCHAR(100) NOT NULL,
    wachtwoord VARCHAR(100) NOT NULL,
    PRIMARY KEY(klantcode)
);

CREATE TABLE factuur(
    factuurnummer INT NOT NULL AUTO_INCREMENT,
    factuurdatum DATETIME,
    klantcode INT NOT NULL,
    PRIMARY KEY(factuurnummer),
    FOREIGN KEY(klantcode) REFERENCES klant(klantcode)
);

CREATE TABLE factuurregel(
    factuurnummer INT NOT NULL,
    artikelcode INT NOT NULL,
    aantal INT NULL,
    prijs DECIMAL(6, 2),
    FOREIGN KEY(factuurnummer) REFERENCES factuur(factuurnummer),
    FOREIGN KEY(artikelcode) REFERENCES artikel(artikelcode)
);

CREATE TABLE bestelling(
    artikelcode INT NOT NULL,
    winkelcode INT NOT NULL,
    aantal INT,
    klantcode INT NOT NULL,
    medewerkerscode INT NOT NULL,
    afgehaald BOOLEAN NOT NULL,
    FOREIGN KEY(artikelcode) REFERENCES artikel(artikelcode),
    FOREIGN KEY(winkelcode) REFERENCES winkel(winkelcode),
    FOREIGN KEY(klantcode) REFERENCES klant(klantcode),
    FOREIGN KEY(medewerkerscode) REFERENCES medewerker(medewerkerscode)
);
