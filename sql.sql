CREATE TABLE user(
    'id' INT NOT NULL AUTO_INCREMENT,
    'name' VARCHAR(20) NOT NULL,
    'password' VARCHAR(255) NOT NULL,
    'created' DATETIME NOT NULL,
    'phonenum' VARCHAR(20) NOT NULL,
    'age' VARCHAR(8) NOT NULL,
    'sex' VARCHAR(1),
    PRIMARY KEY ('id'),
    UNIQUE KEY ('name')
);

CREATE TABLE content(
    'id' INT NOT NULL AUTO_INCREMENT,
    'content' TEXT NOT NULL,
    'created' DATETIME NOT NULL.
    PRIMARY KEY ('id')
);

CREATE TABLE bookmark(
    'id' INT NOT NULL AUTO_INCREMENT,
    'userid' INT NOT NULL,
    'contentid' INT NOT NULL,
    PRIMARY KEY ('id')
);