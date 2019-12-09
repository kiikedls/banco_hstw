--  Clientes
insert into clientes values (1,'Enrique','Perez','Fernandez','1990-12-12','PEFE901212hscnsn07','pfe98676');
insert into clientes values (2,'Juan','Sanchez','Chavez','1989-05-11','SACJ890511hscnsn01','scj98676');
insert into clientes values (3,'Cesar','lopez','Gonzales','1997-01-20','LOGC970120hscnsn05','lgc98676');
insert into clientes values (4,'Angel','Garza','Delgado','1995-11-01','GADA951101hscnsn09','GDA98676');
insert into clientes values (5,'Saul','Rodriguez','jimenez','1990-12-12','ROJS901212hscnsn02','RJS98676');
--  Direcciones
insert into direcciones values (1,'Av. juan terrazas','121','11','juan terrazas','27201','col. Corona','Torreon','Coahuila','Mexico');
insert into direcciones values (2,'Blvrd. Constitucion','11','331','trevino','27271','col. santa maria','Torreon','Coahuila','Mexico');
insert into direcciones values (3,'Av. Simon bolivar','90','02','Pino Suarez','27200','col. Moreno','Torreon','Coahuila','Mexico');
insert into direcciones values (4,'Damian Carmona','55','31','Cepeda','27222','col. San Antonio','Torreon','Coahuila','Mexico');
insert into direcciones values (5,'Av. Escuadron 201','21','01','Lorenzo','272270','col. Eulogio ortiz','Torreon','Coahuila','Mexico');
--  cliente_Direccion
insert into direccion_cliente values (1,1);
insert into direccion_cliente values (2,2);
insert into direccion_cliente values (3,3);
insert into direccion_cliente values (4,4);
insert into direccion_cliente values (5,5);
--  prestamos
insert into prestamos values (1,'','2000','Quincenal','20000',1);
insert into prestamos values (2,'','2005','Mensual','30000',2);
insert into prestamos values (3,'','2010','Quincenal','50000',3);
insert into prestamos values (4,'','2015','Mensual','60000',4);
insert into prestamos values (5,'','2019','Quincenal','70000',5);
--  pagos
insert into pagos values (1,20,'2019-05-22','2019-05-20',1000,5,0,40000,1);
insert into pagos values (2,20,'2019-05-22','2019-05-22',1500,4,0,60000,2);
insert into pagos values (3,20,'2019-05-22','2019-05-12',2500,6,0,120000,3);
insert into pagos values (4,20,'2019-05-22', NULL,3000,7,0,150000,4);
insert into pagos values (5,20,'2019-05-22', NULL, 3500,8,0,180000,5);
--  tipo tarjeta
insert into tipo_tarjeta values (1,'Credito');
insert into tipo_tarjeta values (2,'Debito');
--  tarjetas
insert into tarjetas values (1,'7894561231236547','02/23',1,1);
insert into tarjetas values (2,'7894567896543569','02/23',2,2);
insert into tarjetas values (3,'7894563241589785','02/23',1,3);
insert into tarjetas values (4,'7894564789564878','02/23',2,4);
insert into tarjetas values (5,'7894562368744582','02/23',1,5);
--  tipo_bancario
insert into tipo_bancario values (1,'Bancario');
insert into tipo_bancario values (2,'No Bancario');
--  creditos
insert into creditos values (1,'HSBC','asdc23324','activo','verde',1,1);
insert into creditos values (2,'BANCOMER','fres45251','activo','verde',2,2);
insert into creditos values (3,'SCOTIABANK','regf15246','inactivo','rojo',3,1);
insert into creditos values (4,'BANAMEX','rewe12365','activo','verde',4,1);
insert into creditos values (5,'BANCOAZTECA','lgde92384','inactivo','amarillo',5,2);
--  Buro
insert into buro values (1,'2019-12-12','HSBC',8,'pago adecuado');
insert into buro values (2,'2018-11-22','BANCOMER',7,'pago insatisfactorio');
insert into buro values (3,'2017-01-10','BANAMEX',6,'Pago debil');
insert into buro values (4,'2019-05-20','SCOTIABANK',8,'pago adecuado');
insert into buro values (5,'2018-06-12','BANCOMER',9,'pago satisfactorio');
--  usuarios
insert into usuarios values (1,'admin','admin');
insert into usuarios values (2,'admin','123');