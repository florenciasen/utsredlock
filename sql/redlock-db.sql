CREATE DATABASE Redlock;

USE Redlock;

CREATE TABLE users (
  ID INT NOT NULL AUTO_INCREMENT,
  Nama VARCHAR(255) NOT NULL,
  Alamat VARCHAR(255) NOT NULL,
  Jabatan VARCHAR(255) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT into users values("1", "Florencia Senjoyo", "Kebon Jeruk", "Anak mama");
INSERT into users values("2", "Dava Siapa", "Jakarta Selatan","Anak Vape");
INSERT into users values("3", "Gregory", "Kebun Macan", "Tukang Bolos");
