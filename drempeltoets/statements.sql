CREATE Database ter duin

CREATE TABLE users(
    usersId INT NOT NULL AUTO_INCREMENT,
    usersName VARCHAR(250) NOT NULL,
    usersEmail VARCHAR(250) NOT NULL,
    usersUid VARCHAR(250) NOT NULL,
    usersPwd VARCHAR(250) NOT NULL,
    PRIMARY KEY(usersId)
)

CREATE TABLE kamer(
    id INT NOT NULL AUTO_INCREMENT,
    Hoeveel_personen int NOT NULL,
    prijs_per_nacht int NOT NULL,
    active int not NULL,
    PRIMARY KEY(id)
)

CREATE TABLE reserveren(
    id INT NOT NULL AUTO_INCREMENT,
    startdatum DATE NOT NULL,
    einddatum DATE NOT NULL,
    Naam VARCHAR(250) NOT NULL,
    adres VARCHAR(250) NOT NULL,
    postcode VARCHAR(250) NOT NULL,
    woonplaats VARCHAR(250) NOT NULL,
    kamer_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(kamer_id) REFERENCES kamer(id)
)

