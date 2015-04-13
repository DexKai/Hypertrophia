create database desarollo



CREATE TABLE SUELDO(
SUE_id int not null PRIMARY KEY AUTO_INCREMENT,
SUE_sueldo int not null
)

CREATE TABLE TIPO_PROFESOR(
TIP_id int not null PRIMARY KEY AUTO_INCREMENT,
TIP_nombre char(100)
)

create table HORARIO(
HOR_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
HOR_ENTRADA TIME,
HOR_SALIDA TIME
)

CREATE TABLE  FORMULARIO_MEDICO(
FM_id int not null PRIMARY KEY AUTO_INCREMENT,
FM_cardiacas boolean not null,
FM_alegias boolean not null,
FM_osea boolean not null,
FM_muscular boolean not null,
FM_asfixia boolean not null,
FM_embarazada boolean not null,
FIM_anemia boolean not null,
FM_alergia boolean not null,
FM_medicamentos text not null

)





create table PROFESOR(
PRO_id int not null PRIMARY KEY AUTO_INCREMENT,
PRO_nombre char(100) not null,
PRO_apellido char(100) not null,
PRO_rut	char(10) not null,
PRO_email char(100) not null,
HOR_id int,
SUE_id int,
TIP_id int,
FOREIGN KEY (HOR_id) references horario(HOR_id),
FOREIGN KEY (SUE_id) references sueldo(SUE_id),
FOREIGN KEY (TIP_id) references tipo_profesor(TIP_id)
)