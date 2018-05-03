drop database tiendaArtesanias;
create database tiendaArtesanias;
use tiendaArtesanias;


create table MetodosPago(id_MetodosPago int auto_increment not null,
                            nombre varchar(30) ,
                            descripcion varchar (100),
                            constraint MetodosPagoPk primary key (id_MetodosPago)
               );

create table Estado(id_Estado int auto_increment not null,
                                  nombre varchar(50) ,
                                  constraint EstadoPk primary key (id_Estado)
                                             );

create table Ciudad(id_Ciudad int auto_increment not null,
                   nombre varchar(50) ,
                   id_Estado int not null ,
                   constraint CiudadPk primary key (id_Ciudad,id_Estado),
                   constraint CiudadFk foreign key (id_Estado) references Estado (id_Estado)
                                      
                              );




create table CuponDescuento(id_CuponDescuento int auto_increment not null,
                            nombre varchar(30) ,
                            descripcion varchar (100),
                            fecha_inicio date,
                            fecha_termino date,
                            porcentaje int,
                            constraint cuponDescuentoPk primary key (id_CuponDescuento)
               );

create table Rol(id_Rol int auto_increment not null,	
                       Descripcion varchar(100),
                       constraint RolPK primary key (id_Rol));



create table Categoria(id_Categoria int auto_increment not null,	
                        Descripcion varchar(50),
                        constraint DepartamentoPK primary key (id_Categoria));
    
                   
create table Proveedor(id_Proveedor int auto_increment not null , 
						Nombre varchar(100),
						pagina_Web varchar(100),
						Telefono varchar(10),
						Direccion varchar (100),
						E_mail varchar(100),
						constraint ProveedorPK primary key (id_Proveedor));


create table Cliente(id_Cliente int auto_increment not null , 
						Pass varchar (50),
						id_Rol int not null,
						constraint ClientePK primary key (id_Cliente),
						constraint ClienteFK1 foreign key (id_rol) references Rol (id_Rol));


create table Envios(id_Envio int auto_increment not null,
                    nombre varchar(30) ,
                    email varchar (100),
                    id_Ciudad int,
                    id_Estado int,
                    telefono varchar(20),
                    direccion varchar(100),
                    id_Cliente int ,
                    constraint EnviosPk primary key (id_Envio, id_Ciudad, id_Estado),
                    constraint EnviosFk foreign key (id_Ciudad,id_Estado) references Ciudad (id_Ciudad,id_Estado),
                                                          
                    constraint EnviosFk2 foreign key (id_Cliente) references Cliente (id_Cliente)
                                             );

create table Venta(id_Venta int auto_increment not null,
					id_Cliente int,
					id_Empleado varchar(10),
					Fecha_Venta date,
					Subtotal double,
					iva double,
					TotalVenta double,
					id_CuponDescuento int,
					id_MetodosPago int,
					constraint VentaPK primary key(id_Venta),
					constraint VentaFK foreign key (id_Cliente)references Cliente(id_Cliente),
					constraint VentaFK4 foreign key (id_CuponDescuento)references CuponDescuento(id_CuponDescuento),
					constraint VentaFK5 foreign key (id_MetodosPago)references MetodosPago(id_MetodosPago),				
					constraint VentaCk1 check (TotalVenta >= 0),
					constraint VentaCk2 check (Subtotal >= 0),
					constraint VentaCk3 check (iva >= 0));


create table Perdida(id_Perdida int auto_increment not null,
					fechaPerdida date,
					causa varchar(100),
					constraint PerdidaPk primary key (id_Perdida));



create table Producto(id_Producto int auto_increment not null,
						id_Categoria int,
						Nombre varchar(50),
						precioVenta double,
						precioCompra double,
						constraint ProductoPK primary key (id_Producto),
						constraint ProductFK3 foreign key (id_Categoria)references  Categoria(id_Categoria),
						constraint ProductoCk1 check (precioVenta >= 0),
						constraint ProductoCk2 check (precioCompra >= 0));



create table Surte (id_Proveedor int not null,
					id_Producto int not null,
					fecha date not null,
					Cantidad int,
					constraint SuertePK1 primary key (id_Proveedor,id_Producto,fecha),
					constraint SuerteFK1 foreign key (id_Proveedor)references Proveedor(id_Proveedor),
					constraint SuerteFK2 foreign key (id_Producto)references Producto(id_Producto),
					constraint SuerteCk1 check (Cantidad >=0));

					

create table detallePerdida(id_Producto int not null,
							id_Perdida int not null,
							cantidad_de_perdida int,
							constraint detallePerdidaPK1 primary key (id_Producto,id_Perdida),
							constraint detallePerdidaFK1 foreign key (id_Producto)references Producto(id_Producto),
							constraint detallePerdidaFK2 foreign key (id_Perdida)references Perdida(id_Perdida),
							constraint detallePerdidaCk1 check (cantidad_de_perdida >= 0));

create table detalleVenta(id_Producto int not null,
							id_Venta int not null,
							cantidadProducto int,
							Total double,
							constraint detalleVentaPK1 primary key (id_Producto,id_Venta),
			         		constraint detalleVentaFk1 foreign key (id_Venta) references Venta(id_Venta),
			         		constraint detalleVentaFk2 foreign key (id_Producto) references Producto(id_Producto),
                         	constraint detalleVentaCk1 check (Total >= 0),							
							constraint detalleVentaCk4 check (cantidadProducto >= 0));


							
create table Inventario(id_Producto int not null,
						id_Categoria int not null,
						Cantidad int,
						constraint InventarioPK primary key (id_Producto,id_Categoria),
						constraint InventarioFK1 foreign key (id_Categoria)references Categoria (id_Categoria),
						constraint InventarioFK2 foreign key (id_Producto)references Producto(id_Producto),						
						constraint InventarioCk1 check (Cantidad>=0));



						


