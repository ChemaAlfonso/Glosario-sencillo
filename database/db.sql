CREATE DATABASE glosario_chema;

use glosario_chema;

CREATE TABLE usuarios(
id          int (100) auto_increment NOT NULL,
nickname    varchar(150) NOT NULL UNIQUE,
password    varchar(255) NOT NULL,
rol         varchar(20),
email       varchar(255) NOT NULL,
CONSTRAINT pk_usuarios_id PRIMARY KEY(id)
)Engine=InnoDB;

CREATE TABLE categorias(
id          int (255) auto_increment NOT NULL,
nombre      varchar(255) NOT NULL,
CONSTRAINT pk_categorias PRIMARY KEY(id)
)Engine=InnoDB;


CREATE TABLE entradas(
id               int (100) auto_increment NOT NULL,
usuario_id       int (100) NOT NULL,
categoria_id     int (100) NOT NULL,
palabra         varchar(150) NOT NULL UNIQUE,
descripcion     TEXT NOT NULL,
enlace          varchar(255),
fecha           date,
CONSTRAINT pk_entrada_id PRIMARY KEY(id),
CONSTRAINT fk_entrada_categorias FOREIGN KEY(categoria_id) REFERENCES categorias(id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)Engine=InnoDB;



/* INSERTS para usuarios */

INSERT INTO usuarios VALUES (null,'admin','adminadmin','admin','admin@admin.com');

/* INSERTS para categorias */

INSERT INTO categorias VALUES (null,'A');
INSERT INTO categorias VALUES (null,'B');
INSERT INTO categorias VALUES (null,'C');
INSERT INTO categorias VALUES (null,'D');
INSERT INTO categorias VALUES (null,'E');
INSERT INTO categorias VALUES (null,'F');
INSERT INTO categorias VALUES (null,'G');
INSERT INTO categorias VALUES (null,'H');
INSERT INTO categorias VALUES (null,'I');
INSERT INTO categorias VALUES (null,'J');
INSERT INTO categorias VALUES (null,'K');
INSERT INTO categorias VALUES (null,'L');
INSERT INTO categorias VALUES (null,'M');
INSERT INTO categorias VALUES (null,'N');
INSERT INTO categorias VALUES (null,'O');
INSERT INTO categorias VALUES (null,'P');
INSERT INTO categorias VALUES (null,'Q');
INSERT INTO categorias VALUES (null,'R');
INSERT INTO categorias VALUES (null,'S');
INSERT INTO categorias VALUES (null,'T');
INSERT INTO categorias VALUES (null,'U');
INSERT INTO categorias VALUES (null,'V');
INSERT INTO categorias VALUES (null,'W');
INSERT INTO categorias VALUES (null,'X');
INSERT INTO categorias VALUES (null,'Y');
INSERT INTO categorias VALUES (null,'Z');


/* INSERTS para entradas */


INSERT INTO entradas VALUES (null,1,8,'h1 - HTML','Crea titulos de nivel 1','',CURDATE());
INSERT INTO entradas VALUES (null,1,8,'h2 - HTML','Crea titulos de nivel 2','developer.mozilla.org/es/docs/Web/HTML/Elemento/Elementos_t%C3%ADtulos',CURDATE());
INSERT INTO entradas VALUES (null,1,8,'h3 - HTML','Crea titulos de nivel 3','developer.mozilla.org/es/docs/Web/HTML/Elemento/Elementos_t%C3%ADtulos',CURDATE());
INSERT INTO entradas VALUES (null,1,3,'Class - CSS','Permite añadir propiedades a varios elementos con la misma clase','',CURDATE());
INSERT INTO entradas VALUES (null,1,4,'DOM','Document object model','',CURDATE());
INSERT INTO entradas VALUES (null,1,1,'A','Bienvenido a tu glosario de recursos web!','',CURDATE());
INSERT INTO entradas VALUES (null,1,1,'A1','Puedes escribir aqui tus pequeños recordatorios','',CURDATE());
INSERT INTO entradas VALUES (null,1,1,'A2','Asi podras consultarlos de forma sencilla y rapida, a que esperas?, crea uno!','',CURDATE());
INSERT INTO entradas VALUES (null,1,2,'B','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,5,'E','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,6,'F','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,7,'G','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,9,'I','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,10,'J','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,11,'K','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,12,'L','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,13,'M','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,14,'N','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,15,'O','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,16,'P','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,17,'Q','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,18,'R','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,19,'S','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,20,'T','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,21,'U','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,22,'V','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,23,'W','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,24,'X','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,25,'Y','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());
INSERT INTO entradas VALUES (null,1,26,'Z','Aun no existe ninguna palabra en esta categoria, vamos, crea una!','',CURDATE());






/* drop database glosario_chema; */