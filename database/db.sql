CREATE TABLE usuarios (
    id_usuario INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(255) NOT NULL,
    cargo VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE KEY,
    password TEXT(255) NOT NULL,
    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado VARCHAR(11)
) ENGINE = InnoDB;
INSERT INTO usuarios (nombres,cargo,email,password,fyh_creacion,estado) 
VALUES ('Nicolas Asencio','ADMINISTRADOR','ng.asencio@gmail.com','123456','2024-02-28 21:18:25', '1')