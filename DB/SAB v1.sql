/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     6/29/2014 10:18:45 PM                        */
/*==============================================================*/


drop table if exists ARCHIVORESPALDO;

drop table if exists BUG;

drop table if exists CAMBIO;

drop table if exists CLIENTE;

drop table if exists CONTACTO;

drop table if exists CONTACTOOLA;

drop table if exists FIXER;

drop table if exists INFORMACIONCONTACTOOLA;

drop table if exists INFORMACION_CONTACTO;

drop table if exists OLA;

drop table if exists PROVEEDOR;

drop table if exists RECUPERACION;

drop table if exists RESPALDO;

drop index RELATIONSHIP_6_FK on RESPONSABILIDAD;

drop table if exists RESPONSABILIDAD;

drop table if exists SERVICIO;

drop table if exists SERVICIO_DE_PROVEEDOR;

drop table if exists SLA;

drop table if exists USUARIO;

/*==============================================================*/
/* Table: ARCHIVORESPALDO                                       */
/*==============================================================*/
create table ARCHIVORESPALDO
(
   ID                   int not null,
   NOMBREARCHIVO        char(128) not null,
   FECHA                date not null,
   AUTOR                char(128) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: BUG                                                   */
/*==============================================================*/
create table BUG
(
   ID                   int not null,
   NOMBRE               char(128) not null,
   DESCRIPCION          varchar(255) not null,
   FECHAPRIMERAAPARICION datetime not null,
   FECHAREPORTE         datetime,
   primary key (ID)
);

/*==============================================================*/
/* Table: CAMBIO                                                */
/*==============================================================*/
create table CAMBIO
(
   ID                   int not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: CLIENTE                                               */
/*==============================================================*/
create table CLIENTE
(
   ID                   int not null,
   DIRECCION            varchar(255) not null,
   RUC                  char(13) not null,
   NOMBRECLIENTE        varchar(255) not null,
   NOMBRECOMERCIAL      varchar(255) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: CONTACTO                                              */
/*==============================================================*/
create table CONTACTO
(
   ID                   int not null,
   NUMERO_DE_IDENTIFICACION varchar(32) not null,
   EMPRESA_ACTUAL       int,
   NOMBRE               varchar(50) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: CONTACTOOLA                                           */
/*==============================================================*/
create table CONTACTOOLA
(
   ID                   int not null,
   NUMERO_DE_IDENTIFICACION varchar(32),
   EMPRESA_ACTUAL       int,
   NOMBRE               varchar(255) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: FIXER                                                 */
/*==============================================================*/
create table FIXER
(
   IDFIXER              int not null,
   ID                   int,
   BUG_ID               int,
   primary key (IDFIXER)
);

/*==============================================================*/
/* Table: INFORMACIONCONTACTOOLA                                */
/*==============================================================*/
create table INFORMACIONCONTACTOOLA
(
   ID                   int not null,
   TIPO                 varchar(64) not null,
   CONTENIDO            varchar(64) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: INFORMACION_CONTACTO                                  */
/*==============================================================*/
create table INFORMACION_CONTACTO
(
   ID                   int not null,
   TIPO                 varchar(64) not null,
   CONTENIDO            varchar(64) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: OLA                                                   */
/*==============================================================*/
create table OLA
(
   ID                   int not null,
   CRITICIDAD           char(255) not null,
   TIEMPORESPUESTA      int not null,
   DESCRIPCION          varchar(255) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: PROVEEDOR                                             */
/*==============================================================*/
create table PROVEEDOR
(
   ID                   int not null,
   NOMBRE               char(128) not null,
   DIRECCION            varchar(255) not null,
   TELEFONO1            char(32) not null,
   TELEFONO2            varchar(32),
   MOVIL1               varchar(32) not null,
   MOVIL2               varchar(32),
   NOMBRECONTACTO       varchar(32) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: RECUPERACION                                          */
/*==============================================================*/
create table RECUPERACION
(
   IDRECUPERACION       int not null,
   ID                   int,
   SER_ID               int,
   TIEMPORECUPERACION   int not null,
   FECHARECUPERACION    varchar(255) not null,
   primary key (IDRECUPERACION)
);

/*==============================================================*/
/* Table: RESPALDO                                              */
/*==============================================================*/
create table RESPALDO
(
   ID                   int not null,
   FRECUENCIA           char(128) not null,
   FECHA_INICIO         date not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: RESPONSABILIDAD                                       */
/*==============================================================*/
create table RESPONSABILIDAD
(
   IDRESPONSABILIDAD    int not null,
   USU_ID               int,
   ID                   int,
   FECHAINICIO          date,
   FECHAFIN             date,
   primary key (IDRESPONSABILIDAD)
);

/*==============================================================*/
/* Index: RELATIONSHIP_6_FK                                     */
/*==============================================================*/
create index RELATIONSHIP_6_FK on RESPONSABILIDAD
(
   USU_ID
);

/*==============================================================*/
/* Table: SERVICIO                                              */
/*==============================================================*/
create table SERVICIO
(
   ID                   int not null,
   NOMBRE               varchar(50) not null,
   DESCRIPCIONSERVICIO  varchar(255) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: SERVICIO_DE_PROVEEDOR                                 */
/*==============================================================*/
create table SERVICIO_DE_PROVEEDOR
(
   ID                   int not null,
   NOMBRE               char(128) not null,
   DESCRIPCION          varchar(255) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: SLA                                                   */
/*==============================================================*/
create table SLA
(
   ID                   int not null,
   RESPONSABLE          char(255) not null,
   CRITICIDAD           char(255) not null,
   TIEMPORESPUESTA      int not null,
   DESCRIPCIONCRITICIDAD varchar(255) not null,
   DISPONIBILIDAD       decimal(4) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO
(
   ID                   int not null,
   NICKNAME             char(32),
   NOMBRE               char(128) not null,
   APELLIDO             char(32) not null,
   CEDULA               char(16) not null,
   TELEFONO             char(16) not null,
   EMAIL                varchar(128) not null,
   FECHANACIMIENTO      date,
   FECHACREACION        date not null,
   primary key (ID)
);

alter table ARCHIVORESPALDO add constraint FK_RELATIONSHIP_19 foreign key (ID)
      references RESPALDO (ID) on delete restrict on update restrict;

alter table BUG add constraint FK_RELATIONSHIP_12 foreign key (ID)
      references SERVICIO (ID) on delete restrict on update restrict;

alter table CAMBIO add constraint FK_RELATIONSHIP_2 foreign key (ID)
      references SERVICIO (ID) on delete restrict on update restrict;

alter table CONTACTO add constraint FK_RELATIONSHIP_17 foreign key (ID)
      references CLIENTE (ID) on delete restrict on update restrict;

alter table CONTACTOOLA add constraint FK_RELATIONSHIP_21 foreign key (ID)
      references OLA (ID) on delete restrict on update restrict;

alter table FIXER add constraint FK_REFERENCE_21 foreign key (ID)
      references USUARIO (ID) on delete restrict on update restrict;

alter table FIXER add constraint FK_REFERENCE_22 foreign key (BUG_ID)
      references BUG (ID) on delete restrict on update restrict;

alter table INFORMACIONCONTACTOOLA add constraint FK_RELATIONSHIP_20 foreign key (ID)
      references CONTACTOOLA (ID) on delete restrict on update restrict;

alter table INFORMACION_CONTACTO add constraint FK_RELATIONSHIP_16 foreign key (ID)
      references CONTACTO (ID) on delete restrict on update restrict;

alter table OLA add constraint FK_RELATIONSHIP_10 foreign key (ID)
      references SERVICIO_DE_PROVEEDOR (ID) on delete restrict on update restrict;

alter table RECUPERACION add constraint FK_REFERENCE_19 foreign key (ID)
      references RESPALDO (ID) on delete restrict on update restrict;

alter table RECUPERACION add constraint FK_REFERENCE_20 foreign key (SER_ID)
      references SERVICIO (ID) on delete restrict on update restrict;

alter table RESPALDO add constraint FK_RELATIONSHIP_5 foreign key (ID)
      references SERVICIO (ID) on delete restrict on update restrict;

alter table RESPONSABILIDAD add constraint FK_REFERENCE_17 foreign key (USU_ID)
      references USUARIO (ID) on delete restrict on update restrict;

alter table RESPONSABILIDAD add constraint FK_REFERENCE_18 foreign key (ID)
      references SERVICIO (ID) on delete restrict on update restrict;

alter table SERVICIO add constraint FK_RELATIONSHIP_15 foreign key (ID)
      references CLIENTE (ID) on delete restrict on update restrict;

alter table SERVICIO_DE_PROVEEDOR add constraint FK_REFERENCE_23 foreign key (ID)
      references PROVEEDOR (ID) on delete restrict on update restrict;

alter table SLA add constraint FK_RELATIONSHIP_3 foreign key (ID)
      references SERVICIO (ID) on delete restrict on update restrict;

