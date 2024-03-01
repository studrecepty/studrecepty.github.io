CREATE TABLE komentare_stranka1 (
    cid INT(11) not null AUTO_INCREMENT PRIMARY KEY,
    uid VARCHAR(128) NOT NULL,
    date datetime NOT NULL,
    message TEXT NOT NULL
);

CREATE TABLE komentare_stranka2 (
    cid INT(11) not null AUTO_INCREMENT PRIMARY KEY,
    uid VARCHAR(128) NOT NULL,
    date datetime NOT NULL,
    message TEXT NOT NULL
);

CREATE TABLE komentare_stranka3 (
    cid INT(11) not null AUTO_INCREMENT PRIMARY KEY,
    uid VARCHAR(128) NOT NULL,
    date datetime NOT NULL,
    message TEXT NOT NULL
);
