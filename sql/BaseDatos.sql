
CREATE DATABASE programa6h
CREATE TABLE `programa6h`.`alumnos` (
    `IdAlumno` INT(10) NOT NULL AUTO_INCREMENT ,
    `NumeroDeControl` VARCHAR(25) NOT NULL,
    `CURP` VARCHAR(25) NOT NULL,
    `Nombre` VARCHAR(20) NOT NULL , 
    `ApellidoPaterno` VARCHAR(25) NOT NULL , 
    `ApellidoMaterno` VARCHAR(25) NOT NULL , 
    `Grado` INT NOT NULL , 
    `Grupo` CHAR(1) NOT NULL , 
    PRIMARY KEY (`IdAlumno`)
);