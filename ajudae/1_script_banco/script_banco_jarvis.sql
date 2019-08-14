create database Jarvis;

create table usuario(
	email varchar(40) not null primary key, 
	nome varchar(30),
	telefone varchar(12),
	senha varchar(30),
	RA int(10),
	curso varchar(30),
	semestre varchar(20),
	acesso int(2)
);

create table pedido( 
	ID_pedido int primary key auto_increment,
	titulo varchar(50),
	categoria varchar(30), 
	status_pedido varchar(30), 
	descricao varchar(200), 
	FK_doador_usuario varchar(40), 
    FK_donatario_usuario varchar(40),  
	FOREIGN KEY (FK_doador_usuario) REFERENCES usuario(email),
    FOREIGN KEY (FK_donatario_usuario) REFERENCES usuario(email)
);

insert into usuario (email, nome, telefone, senha, ra, curso, semestre, acesso) 
values ('semDoador','semDoador','00000000000','semDoador',0,'semDoador','semDoador',0)