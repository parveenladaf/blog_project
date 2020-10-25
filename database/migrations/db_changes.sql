
CREATE TABLE author (
 author_id smallint unsigned auto_increment primary key,
 first_name  varchar(255) NOT NULL,
 last_name  varchar(255) NOT NULL,
 email_id varchar(50) NOT NULL,
 password varchar(255) NOT NULL,
 created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 updated_at datetime DEFAULT NULL
);

CREATE TABLE content (
    id int auto_increment NOT NULL,
    title varchar(255) NOT NULL,
    post varchar(500) DEFAULT NULL,
    author_id smallint,
    PRIMARY KEY (id),
    CONSTRAINT fk_author_id FOREIGN KEY (author_id)
    REFERENCES author(author_id)
);


