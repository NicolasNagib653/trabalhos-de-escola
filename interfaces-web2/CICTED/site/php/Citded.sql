/* cicted_logico: */
DROP DATABASE IF EXISTS cicted;
CREATE DATABASE IF NOT EXISTS cicted;
USE cicted;

-- Criar tabelas com InnoDB para suportar chaves estrangeiras

CREATE TABLE usuario (
 nome VARCHAR(20),
 id_usu INT PRIMARY KEY,
 telefone VARCHAR(15),
 email VARCHAR(50),
 instituicao_de_ensino VARCHAR(100),
 INDEX (instituicao_de_ensino) -- Índice adicionado para a chave estrangeira
) ENGINE=InnoDB;

CREATE TABLE produtos (
 nome VARCHAR(50),
 descricao VARCHAR(200),
 preco DECIMAL(10, 2),
 id_pro INT PRIMARY KEY AUTO_INCREMENT
 
) ENGINE=INNODB;

CREATE TABLE foto (
 caminho_imagem VARCHAR(250)
) ENGINE=INNODB;

CREATE TABLE categoria (
 categoria VARCHAR(20) PRIMARY KEY
) ENGINE=InnoDB;

CREATE TABLE feedback (
 comentario VARCHAR(200),
 estrelas INT CHECK(estrelas BETWEEN 1 AND 10),
 id_com INT PRIMARY KEY
) ENGINE=InnoDB;

CREATE TABLE vende (
 fk_usuario_id_usu INT NULL,
 fk_produtos_id_pro INT NULL,
 fk_usuario_instituicao_de_ensino VARCHAR(100) NULL
) ENGINE=InnoDB;

CREATE TABLE compra (
 fk_produtos_id_pro INT NULL,
 fk_usuario_id_usu INT NULL
) ENGINE=InnoDB;

CREATE TABLE deu (
 fk_usuario_id_usu INT NULL,
 fk_usuario_id_com INT NULL
) ENGINE=InnoDB;

CREATE TABLE tem (
 fk_produtos_id_pro INT NULL,
 fk_categoria_categoria VARCHAR(20) NULL
) ENGINE=InnoDB;

CREATE TABLE recebe (
 fk_produtos_id_pro INT NULL
) ENGINE=InnoDB;

-- Adicionando chaves estrangeiras com ALTER TABLE

ALTER TABLE vende 
ADD CONSTRAINT FK_vende_1 
FOREIGN KEY (fk_usuario_id_usu) 
REFERENCES usuario (id_usu) 
ON DELETE SET NULL;

ALTER TABLE vende 
ADD CONSTRAINT FK_vende_2 
FOREIGN KEY (fk_produtos_id_pro) 
REFERENCES produtos (id_pro) 
ON DELETE SET NULL;

ALTER TABLE vende 
ADD CONSTRAINT FK_vende_3 
FOREIGN KEY (fk_usuario_instituicao_de_ensino) 
REFERENCES usuario (instituicao_de_ensino) 
ON DELETE SET NULL;

ALTER TABLE compra 
ADD CONSTRAINT FK_compra_1 
FOREIGN KEY (fk_produtos_id_pro) 
REFERENCES produtos (id_pro) 
ON DELETE SET NULL;

ALTER TABLE compra 
ADD CONSTRAINT FK_compra_2 
FOREIGN KEY (fk_usuario_id_usu) 
REFERENCES usuario (id_usu) 
ON DELETE SET NULL;

ALTER TABLE deu 
ADD CONSTRAINT FK_deu_1 
FOREIGN KEY (fk_usuario_id_usu) 
REFERENCES usuario (id_usu) 
ON DELETE SET NULL;

ALTER TABLE deu 
ADD CONSTRAINT FK_deu_2 
FOREIGN KEY (fk_usuario_id_com) 
REFERENCES feedback (id_com) 
ON DELETE SET NULL;

ALTER TABLE tem 
ADD CONSTRAINT FK_tem_1 
FOREIGN KEY (fk_produtos_id_pro) 
REFERENCES produtos (id_pro) 
ON DELETE SET NULL;

ALTER TABLE tem 
ADD CONSTRAINT FK_tem_2 
FOREIGN KEY (fk_categoria_categoria) 
REFERENCES categoria (categoria) 
ON DELETE SET NULL;

ALTER TABLE recebe 
ADD CONSTRAINT FK_recebe_1 
FOREIGN KEY (fk_produtos_id_pro) 
REFERENCES produtos (id_pro)  
ON DELETE SET NULL;