/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     14-04-2015 15:49:19                          */
/*==============================================================*/

drop table if exists FK_DISCIPLINA_TIPO_PROFESOR;

drop table if exists FK_SOCIO_PROFESOR;

drop table if exists CLASE;

drop table if exists DISCIPLINA;

drop table if exists SUELDO;

drop table if exists INFORME_MEDICO;

drop table if exists PROFESOR;

drop table if exists HORARIO;


drop table if exists PAGO;

drop table if exists PROGRESO;

drop table if exists SOCIO;

drop table if exists TIPO_PROFESOR;

/*==============================================================*/
/* Table: CLASE                                                 */
/*==============================================================*/
create table CLASE
(
   CLA_id               int not null auto_increment,
   DIS_id               int,
   CLA_nombre           varchar(20),
   CLA_descripcion      text,
   CLA_imagen           varchar(1024),
   primary key (CLA_id)
);

/*==============================================================*/
/* Table: DISCIPLINA                                            */
/*==============================================================*/
create table DISCIPLINA
(
   DIS_id               int not null auto_increment,
   DIS_nombre           varchar(256),
   DIS_descripcion      text,
   primary key (DIS_id)
);

/*==============================================================*/
/* Table: FK_DISCIPLINA_TIPO_PROFESOR                           */
/*==============================================================*/
create table FK_DISCIPLINA_TIPO_PROFESOR
(
   DIS_id               int not null,
   TIP_id               int not null,
   primary key (DIS_id, TIP_id)
);

/*==============================================================*/
/* Table: FK_SOCIO_PROFESOR                                     */
/*==============================================================*/
create table FK_SOCIO_PROFESOR
(
   PRO_id               int not null,
   SO_id          int not null,
   primary key (PRO_id, SO_id)
);

/*==============================================================*/
/* Table: HORARIO                                               */
/*==============================================================*/
create table HORARIO
(
   HOR_id               int not null auto_increment,
   PRO_id               int,
   HOR_entrada          time,
   HOR_salida           time,
   primary key (HOR_id)
);

/*==============================================================*/
/* Table: INFORME_MEDICO                                        */
/*==============================================================*/
create table INFORME_MEDICO
(
   IM_id                int not null auto_increment,
   SO_id          	int,
   PRO_id               int,
   IM_cardiacas         varchar(10),
   IM_cardicas_detalle  text,
   IM_alergias          varchar(10),
   IM_alergia_detalle   text,
   IM_osea              varchar(10),
   IM_osea_detalle      text,
   IM_muscular          varchar(10),
   IM_muscualr_detalle  text,
   IM_asfixia           varchar(10),
   IM_embarazada        varchar(10),
   IM_anemia            varchar(10),
   IM_medicamentos      text,
   primary key (IM_id)
);

/*==============================================================*/
/* Table: PAGO                                                  */
/*==============================================================*/
create table PAGO
(
   PA_id           int not null auto_increment,
   SO_id          int,
   PA_monto             int,
   PA_pago_mes          bool,
   PA_fecha_pago        datetime,
   primary key (PA_id)
);

/*==============================================================*/
/* Table: PROFESOR                                              */
/*==============================================================*/
create table PROFESOR
(
   PRO_id               int not null auto_increment,
   HOR_id               int,
   SUE_id               int,
   IM_id                int,
   TIP_id               int,
   PRO_rut              varchar(10),
   PRO_nombre           varchar(20),
   PRO_apellidop        varchar(20),
   PRO_apellidom        varchar(20),
   PRO_email            varchar(100),
   primary key (PRO_id)
);

/*==============================================================*/
/* Table: PROGRESO                                              */
/*==============================================================*/
create table PROGRESO
(
   PROG_id              int not null auto_increment,
   SO_id            int,
   PROG_peso            float,
   PROG_altura          float,
   PROG_porcentaje_grasa float,
   PROG_indice_masa_corporal float,
   PROG_fecha_evaluacion datetime,
   primary key (PROG_id)
);

/*==============================================================*/
/* Table: SOCIO                                                 */
/*==============================================================*/
create table SOCIO
(
   SO_id          int not null auto_increment,
   PROG_id              int,
   IM_id                int,
   PA_id           int,
   SO_rut               varchar(256),
   SO_nombre            varchar(256),
   SO_apellido_materno  varchar(256),
   SO_apellido_paterno  varchar(256),
   SO_email             varchar(256),
   SO_direccion         varchar(256),
   SO_estado_actividad  varchar(256),
   primary key (SO_id)
);

/*==============================================================*/
/* Table: SUELDO                                                */
/*==============================================================*/
create table SUELDO
(
   SUE_id               int not null auto_increment,
   PRO_id               int,
   SUE_sueldo           int,
   primary key (SUE_id)
);

/*==============================================================*/
/* Table: TIPO_PROFESOR                                         */
/*==============================================================*/
create table TIPO_PROFESOR
(
   TIP_id               int not null auto_increment,
   PRO_id               int,
   TIP_nombre           varchar(100),
   primary key (TIP_id)
);

alter table CLASE add constraint FK_FK_CLASE_DISCIPLINA foreign key (DIS_id)
      references DISCIPLINA (DIS_id) on delete restrict on update restrict;

alter table FK_DISCIPLINA_TIPO_PROFESOR add constraint FK_FK_DISCIPLINA_TIPO_PROFESOR foreign key (DIS_id)
      references DISCIPLINA (DIS_id) on delete restrict on update restrict;

alter table FK_DISCIPLINA_TIPO_PROFESOR add constraint FK_FK_DISCIPLINA_TIPO_PROFESOR2 foreign key (TIP_id)
      references TIPO_PROFESOR (TIP_id) on delete restrict on update restrict;

alter table FK_SOCIO_PROFESOR add constraint FK_FK_SOCIO_PROFESOR foreign key (PRO_id)
      references PROFESOR (PRO_id) on delete restrict on update restrict;

alter table FK_SOCIO_PROFESOR add constraint FK_FK_SOCIO_PROFESOR2 foreign key (SO_id)
      references SOCIO (SO_id) on delete restrict on update restrict;

alter table HORARIO add constraint FK_FK_PROFESOR_HORARIO2 foreign key (PRO_id)
      references PROFESOR (PRO_id) on delete restrict on update restrict;

alter table INFORME_MEDICO add constraint FK_FK_PREFESOR_INFORMEMEDICO foreign key (PRO_id)
      references PROFESOR (PRO_id) on delete restrict on update restrict;

alter table INFORME_MEDICO add constraint FK_FK_SOCIO_INFORME_MEDICO2 foreign key (SO_id)
      references SOCIO (SO_id) on delete restrict on update restrict;

alter table PAGO add constraint FK_FK_SOCIO_PAGO2 foreign key (SO_id)
      references SOCIO (SO_id) on delete restrict on update restrict;

alter table PROFESOR add constraint FK_FK_PREFESOR_INFORMEMEDICO2 foreign key (IM_id)
      references INFORME_MEDICO (IM_id) on delete restrict on update restrict;

alter table PROFESOR add constraint FK_FK_PROFESOR_HORARIO foreign key (HOR_id)
      references HORARIO (HOR_id) on delete restrict on update restrict;

alter table PROFESOR add constraint FK_FK_PROFESOR_SUELDO foreign key (SUE_id)
      references SUELDO (SUE_id) on delete restrict on update restrict;

alter table PROFESOR add constraint FK_FK_PROFESOR_TIPOPROFESOR foreign key (TIP_id)
      references TIPO_PROFESOR (TIP_id) on delete restrict on update restrict;

alter table PROGRESO add constraint FK_FK_SOCIO_PROGRESO foreign key (SO_id)
      references SOCIO (SO_id) on delete restrict on update restrict;

alter table SOCIO add constraint FK_FK_SOCIO_INFORME_MEDICO foreign key (IM_id)
      references INFORME_MEDICO (IM_id) on delete restrict on update restrict;

alter table SOCIO add constraint FK_FK_SOCIO_PAGO foreign key (PA_id)
      references PAGO (PA_id) on delete restrict on update restrict;

alter table SOCIO add constraint FK_FK_SOCIO_PROGRESO2 foreign key (PROG_id)
      references PROGRESO (PROG_id) on delete restrict on update restrict;

alter table SUELDO add constraint FK_FK_PROFESOR_SUELDO2 foreign key (PRO_id)
      references PROFESOR (PRO_id) on delete restrict on update restrict;

alter table TIPO_PROFESOR add constraint FK_FK_PROFESOR_TIPOPROFESOR2 foreign key (PRO_id)
      references PROFESOR (PRO_id) on delete restrict on update restrict;

