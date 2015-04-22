/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     22-04-2015 0:44:38                           */
/*==============================================================*/


drop table if exists CLASE;

drop table if exists DISCIPLINA;

drop table if exists FK_DISCIPLINA_TIPO_PROFESOR;

drop table if exists FK_SOCIO_PROFESOR;

drop table if exists HORARIO_CLASE;

drop table if exists HORARIO_LABORAL;

drop table if exists INFORME_EDUCACION;

drop table if exists INFORME_MEDICO_PROFESOR;

drop table if exists INFORME_MEDICO_SOCIO;

drop table if exists PAGO;

drop table if exists PROFESOR;

drop table if exists PROGRESO;

drop table if exists SOCIO;

drop table if exists SUELDO;

drop table if exists TIPO_PROFESOR;

/*==============================================================*/
/* Table: CLASE                                                 */
/*==============================================================*/
create table CLASE
(
   CLA_ID               int not null auto_increment,
   DIS_ID               int,
   CLA_NOMBRE           varchar(500),
   CLA_DESCRIPCION      text,
   CLA_IMAGEN           varchar(1024),
   primary key (CLA_ID)
);

/*==============================================================*/
/* Table: DISCIPLINA                                            */
/*==============================================================*/
create table DISCIPLINA
(
   DIS_ID               int not null auto_increment,
   DIS_NOMBRE           char(256),
   DIS_DESCRIPCION      text,
   primary key (DIS_ID)
);

/*==============================================================*/
/* Table: FK_DISCIPLINA_TIPO_PROFESOR                           */
/*==============================================================*/
create table FK_DISCIPLINA_TIPO_PROFESOR
(
   DIS_ID               int not null,
   TIP_ID               int not null,
   primary key (DIS_ID, TIP_ID)
);

/*==============================================================*/
/* Table: FK_SOCIO_PROFESOR                                     */
/*==============================================================*/
create table FK_SOCIO_PROFESOR
(
   PRO_ID               int not null,
   SO_ID_SOCIO          int not null,
   primary key (PRO_ID, SO_ID_SOCIO)
);

/*==============================================================*/
/* Table: HORARIO_CLASE                                         */
/*==============================================================*/
create table HORARIO_CLASE
(
   HORC_ID              int not null auto_increment,
   CLA_ID               int,
   HORC_ENTRADA         time,
   HORC_SALIDA          time,
   primary key (HORC_ID)
);

/*==============================================================*/
/* Table: HORARIO_LABORAL                                       */
/*==============================================================*/
create table HORARIO_LABORAL
(
   HOR_ID               int not null auto_increment,
   PRO_ID               int,
   HOR_ENTRADA          time,
   HOR_SALIDA           time,
   primary key (HOR_ID)
);

/*==============================================================*/
/* Table: INFORME_EDUCACION                                     */
/*==============================================================*/
create table INFORME_EDUCACION
(
   IE_ID                int not null auto_increment,
   PRO_ID               int,
   IE_ENSENANZA_COMPLETA varchar(1024),
   IE_UNIVERSIDAD       varchar(1024),
   IE_UNIVRESIDAD_DETALLE varchar(1024),
   IE_INSTITUTO         varchar(1024),
   IE_INSTITUTO_DETALLE varchar(1024),
   IE_POSTGRADO         text,
   IE_CERTIFICACION     text,
   IE_DIPLOMADO         text,
   primary key (IE_ID)
);

/*==============================================================*/
/* Table: INFORME_MEDICO_PROFESOR                               */
/*==============================================================*/
create table INFORME_MEDICO_PROFESOR
(
   IM_ID                int not null auto_increment,
   PRO_ID               int,
   IM_CARDIACAS         varchar(1024),
   IM_CARDIACAS_DETALLE text,
   IM_ELERGIAS          varchar(1024),
   IM_ALERGIAS_DETALLE  text,
   IM_OSEA3             varchar(1024),
   IM_OSEA_DETALLE      text,
   IM_MUSCULAR3         varchar(1024),
   IM_MUSCULAR_DETALLE  text,
   IM_ASFIXIA3          varchar(1024),
   IM_EMBARAZADA3       varchar(1024),
   IM_ANEMIA3           varchar(1024),
   IM_MEDICAMENTOS3     text,
   primary key (IM_ID)
);

/*==============================================================*/
/* Table: INFORME_MEDICO_SOCIO                                  */
/*==============================================================*/
create table INFORME_MEDICO_SOCIO
(
   IMS_ID               int not null auto_increment,
   SO_ID_SOCIO          int,
   IMS_CARDIACAS        varchar(1024),
   IMS_CARDIACAS_DETALLE text,
   IMS_ALERGIAS         varchar(1024),
   IMS_ALERGIAS_DETALLE text,
   IMS_OSEA             varchar(1024),
   IMS_OSEA_DEATALLE    text,
   IMS_MUSCULAR         varchar(1024),
   IMS_MUSCULAR_DETALLE text,
   IMS_ASFIXIA          varchar(1024),
   IMS_EMBARAZADA       varchar(1024),
   IMS_ANEMIA           varchar(1024),
   IMS_MEDICAMENTO      text,
   primary key (IMS_ID)
);

/*==============================================================*/
/* Table: PAGO                                                  */
/*==============================================================*/
create table PAGO
(
   PA_ID_PAGO           int not null auto_increment,
   SO_ID_SOCIO          int,
   PA_MONTO             int,
   PA_PAGO_MES          bool,
   PA_FECHA_PAGO        datetime,
   primary key (PA_ID_PAGO)
);

/*==============================================================*/
/* Table: PROFESOR                                              */
/*==============================================================*/
create table PROFESOR
(
   PRO_ID               int not null auto_increment,
   HOR_ID               int,
   SUE_ID               int,
   IM_ID                int,
   TIP_ID               int,
   IE_ID                int,
   PRO_RUT              varchar(10),
   PRO_NOMBRE           varchar(20),
   PRO_APELLIDOP        varchar(20),
   PRO_APELLIDOM        varchar(20),
   PRO_EMAIL            varchar(1024),
   PRO_IMAGEN           varchar(1024),
   PRO_TIPO             varchar(1024),
   primary key (PRO_ID)
);

/*==============================================================*/
/* Table: PROGRESO                                              */
/*==============================================================*/
create table PROGRESO
(
   PROG_ID              int not null auto_increment,
   SO_ID_SOCIO          int,
   PROG_PESO            float,
   PROG_ALTURA          float,
   PROG_PORCENTAJE_GRASA float,
   PROG_INDICE_MASA_CORPORAL float,
   PROG_FECHA_EVALUACION datetime,
   primary key (PROG_ID)
);

/*==============================================================*/
/* Table: SOCIO                                                 */
/*==============================================================*/
create table SOCIO
(
   SO_ID_SOCIO          int not null auto_increment,
   PROG_ID              int,
   PA_ID_PAGO           int,
   IMS_ID               int,
   SO_RUT               varchar(1024),
   SO_NOMBRE            varchar(1024),
   SO_APELLIDO_MATERNO  varchar(1024),
   SO_APELLIDO_PATERNO  varchar(1024),
   SO_EMAIL             varchar(1024),
   SO_DIRECCION         varchar(1024),
   SO_ESTADO_ACTIVIDAD  varchar(1024),
   SO_IMAGEN            varchar(1024),
   SO_TIPO              varchar(1024),
   primary key (SO_ID_SOCIO)
);

/*==============================================================*/
/* Table: SUELDO                                                */
/*==============================================================*/
create table SUELDO
(
   SUE_ID               int not null auto_increment,
   PRO_ID               int,
   SUE_SUELDO           int,
   SUE_FECHA            time,
   SUE_PAGADO           varchar(500),
   primary key (SUE_ID)
);

/*==============================================================*/
/* Table: TIPO_PROFESOR                                         */
/*==============================================================*/
create table TIPO_PROFESOR
(
   TIP_ID               int not null auto_increment,
   PRO_ID               int,
   TIP_NOMBRE           varchar(100),
   primary key (TIP_ID)
);

alter table CLASE add constraint FK_FK_CLASE_DISCIPLINA foreign key (DIS_ID)
      references DISCIPLINA (DIS_ID) on delete restrict on update restrict;

alter table FK_DISCIPLINA_TIPO_PROFESOR add constraint FK_FK_DISCIPLINA_TIPO_PROFESOR foreign key (DIS_ID)
      references DISCIPLINA (DIS_ID) on delete restrict on update restrict;

alter table FK_DISCIPLINA_TIPO_PROFESOR add constraint FK_FK_DISCIPLINA_TIPO_PROFESOR2 foreign key (TIP_ID)
      references TIPO_PROFESOR (TIP_ID) on delete restrict on update restrict;

alter table FK_SOCIO_PROFESOR add constraint FK_FK_SOCIO_PROFESOR foreign key (PRO_ID)
      references PROFESOR (PRO_ID) on delete restrict on update restrict;

alter table FK_SOCIO_PROFESOR add constraint FK_FK_SOCIO_PROFESOR2 foreign key (SO_ID_SOCIO)
      references SOCIO (SO_ID_SOCIO) on delete restrict on update restrict;

alter table HORARIO_CLASE add constraint FK_FK_CLASE_HORARIO_CLASE foreign key (CLA_ID)
      references CLASE (CLA_ID) on delete restrict on update restrict;

alter table HORARIO_LABORAL add constraint FK_FK_HORARIO_PROFESOR foreign key (PRO_ID)
      references PROFESOR (PRO_ID) on delete restrict on update restrict;

alter table INFORME_EDUCACION add constraint FK_INFORME_EDUCACION_PROFESOR foreign key (PRO_ID)
      references PROFESOR (PRO_ID) on delete restrict on update restrict;

alter table INFORME_MEDICO_PROFESOR add constraint FK_FK_PREFESOR_INFORMEMEDICO foreign key (PRO_ID)
      references PROFESOR (PRO_ID) on delete restrict on update restrict;

alter table INFORME_MEDICO_SOCIO add constraint FK_FK_INFORME_MEDICO_SOCIO_SOCIO2 foreign key (SO_ID_SOCIO)
      references SOCIO (SO_ID_SOCIO) on delete restrict on update restrict;

alter table PAGO add constraint FK_FK_SOCIO_PAGO2 foreign key (SO_ID_SOCIO)
      references SOCIO (SO_ID_SOCIO) on delete restrict on update restrict;

alter table PROFESOR add constraint FK_FK_HORARIO_PROFESOR2 foreign key (HOR_ID)
      references HORARIO_LABORAL (HOR_ID) on delete restrict on update restrict;

alter table PROFESOR add constraint FK_FK_PREFESOR_INFORMEMEDICO2 foreign key (IM_ID)
      references INFORME_MEDICO_PROFESOR (IM_ID) on delete restrict on update restrict;

alter table PROFESOR add constraint FK_FK_PROFESOR_SUELDO foreign key (SUE_ID)
      references SUELDO (SUE_ID) on delete restrict on update restrict;

alter table PROFESOR add constraint FK_FK_PROFESOR_TIPOPROFESOR foreign key (TIP_ID)
      references TIPO_PROFESOR (TIP_ID) on delete restrict on update restrict;

alter table PROFESOR add constraint FK_INFORME_EDUCACION_PROFESOR2 foreign key (IE_ID)
      references INFORME_EDUCACION (IE_ID) on delete restrict on update restrict;

alter table PROGRESO add constraint FK_FK_SOCIO_PROGRESO foreign key (SO_ID_SOCIO)
      references SOCIO (SO_ID_SOCIO) on delete restrict on update restrict;

alter table SOCIO add constraint FK_FK_INFORME_MEDICO_SOCIO_SOCIO foreign key (IMS_ID)
      references INFORME_MEDICO_SOCIO (IMS_ID) on delete restrict on update restrict;

alter table SOCIO add constraint FK_FK_SOCIO_PAGO foreign key (PA_ID_PAGO)
      references PAGO (PA_ID_PAGO) on delete restrict on update restrict;

alter table SOCIO add constraint FK_FK_SOCIO_PROGRESO2 foreign key (PROG_ID)
      references PROGRESO (PROG_ID) on delete restrict on update restrict;

alter table SUELDO add constraint FK_FK_PROFESOR_SUELDO2 foreign key (PRO_ID)
      references PROFESOR (PRO_ID) on delete restrict on update restrict;

alter table TIPO_PROFESOR add constraint FK_FK_PROFESOR_TIPOPROFESOR2 foreign key (PRO_ID)
      references PROFESOR (PRO_ID) on delete restrict on update restrict;

