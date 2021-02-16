DROP DATABASE IF EXISTS livrariaDaGente;
CREATE DATABASE livrariaDaGente;

USE livrariaDaGente;

CREATE TABLE usuario(
    id INTEGER NOT NULL AUTO_INCREMENT,
    nome VARCHAR(60) NOT NULL,
    email VARCHAR(45) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    saldo INTEGER,
    PRIMARY KEY(id)
);

CREATE TABLE livro(
    id INTEGER NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(50) NOT NULL,
    autor VARCHAR(40) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    subtitulo VARCHAR(100) NOT NULL,
    edicao INTEGER NOT NULL,
    isbn VARCHAR(13) NOT NULL,
    estado VARCHAR(12) NOT NULL,
    valor NUMERIC(5,2) NOT NULL,
    usuario_id INTEGER NOT  NULL,
    PRIMARY KEY(id),
    CONSTRAINT fk_usuario FOREIGN KEY (usuario_id) REFERENCES usuario(id)

);

CREATE TABLE acervo(
    id INTEGER NOT NULL AUTO_INCREMENT,
    livro_id INTEGER NOT NULL,
    usuario_id INTEGER NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT acervo_fk_livro  FOREIGN KEY (livro_id) REFERENCES livro(id),
    CONSTRAINT acervo_fk_usuario FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);

CREATE TABLE listaDeDesejos(
    id INTEGER NOT NULL AUTO_INCREMENT,
    livro_id INTEGER NOT NULL,
    usuario_id INTEGER NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT listaDesejos_fk_livro  FOREIGN KEY (livro_id) REFERENCES livro(id),
    CONSTRAINT listaDesejos_fk_usuario FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);