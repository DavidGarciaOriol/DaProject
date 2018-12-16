CREATE TABLE users (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    username    VARCHAR(255) NOT NULL,
    email       VARCHAR(255) NOT NULL,
    password    VARCHAR(255) NOT NULL,
    created_at  TIMESTAMP NOT NULL default now(),
    updated_at  TIMESTAMP NOT NULL default now() on update now()
)Engine=INNODB;

CREATE TABLE comunidades (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    user_id     INT NOT NULL,
    name        VARCHAR(100) NOT NULL,
    description VARCHAR(255) NULL,
    created_at  TIMESTAMP NOT NULL default now(),
    updated_at  TIMESTAMP NOT NULL default now() on update now(),

    CONSTRAINT fk_comunidad_user FOREIGN KEY(user_id) REFERENCES users(id)

)Engine=InnoDb;

CREATE TABLE logins (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    username    VARCHAR(255) NOT NULL,
    ip          VARCHAR(100) NOT NULL,
    browser     VARCHAR(255) NOT NULL,
    status      ENUM('OK','FAULT') NOT NULL,
    created_at  TIMESTAMP NOT NULL default now()
);

CREATE TABLE comunidad (
    id			int PRIMARY KEY AUTO_INCREMENT,
    com_id 	int NOT null,
    description	varchar(255) not null,
    created_at	TIMESTAMP NOT NULL default now(),
    updated_at	TIMESTAMP NOT NULL default now() on update now(),
    
    CONSTRAINT fk_comunidades_comunidad FOREIGN KEY(com_id) REFERENCES comunidades(id) ON DELETE CASCADE
)Engine=INNODB;