drop database if exists projeto_criminal;

create database projeto_criminal;

use projeto_criminal;

create table usuario(loguin varchar(15) primary key, senha varchar(100));

create table localidade(localidade varchar(100), id int auto_increment primary key);

create table tipo(tipo varchar(20), id int auto_increment primary key);

create table ocorrencia (id int auto_increment primary key, descricao text, dia varchar(10), hora varchar(5), 
tipo varchar(50), usuario_loguin varchar(15), localidade varchar(50), detalheLocal text,
constraint usuario_loguin foreign key(usuario_loguin) references usuario(loguin));

create table arquivos(id_ocorrencia int, id int, arquivo text, primary key(id_ocorrencia, id));

insert into localidade (localidade) values ("Alto Cruzeiro");
insert into localidade (localidade) values ("Alto do Cruzeiro");
insert into localidade (localidade) values ("Baixa Grande");
insert into localidade (localidade) values ("Baixao");
insert into localidade (localidade) values ("Batingas");
insert into localidade (localidade) values ("Boa Vista");
insert into localidade (localidade) values ("Bom Sucesso");
insert into localidade (localidade) values ("Brasilia");
insert into localidade (localidade) values ("Brasiliana");
insert into localidade (localidade) values ("Cacimbas");
insert into localidade (localidade) values ("Catitus");
insert into localidade (localidade) values ("Canafistula");
insert into localidade (localidade) values ("Capitão-de-Fragata");
insert into localidade (localidade) values ("Cavaco");
insert into localidade (localidade) values ("Centro");
insert into localidade (localidade) values ("Distrito Industrial");
insert into localidade (localidade) values ("Eldorado");
insert into localidade (localidade) values ("Guaribas");
insert into localidade (localidade) values ("Itapoã");
insert into localidade (localidade) values ("Jardim de Maria");
insert into localidade (localidade) values ("Jardim Esperança");
insert into localidade (localidade) values ("Jardim Tropical");
insert into localidade (localidade) values ("Manoel Teles");
insert into localidade (localidade) values ("Massaranduba");
insert into localidade (localidade) values ("Nova Esperança");
insert into localidade (localidade) values ("Novo Horizonte");
insert into localidade (localidade) values ("Olho D'água dos Cazuzinhos");
insert into localidade (localidade) values ("Ouro Preto");
insert into localidade (localidade) values ("Padre Antonio Lima");
insert into localidade (localidade) values ("Planalto");
insert into localidade (localidade) values ("Primavera");
insert into localidade (localidade) values ("Rosa Cruz");
insert into localidade (localidade) values ("Santa Edwiges");
insert into localidade (localidade) values ("Santa Esmeralda");
insert into localidade (localidade) values ("São Luiz");
insert into localidade (localidade) values ("São Luiz II");
insert into localidade (localidade) values ("Senador Arnon Melo");
insert into localidade (localidade) values ("Senador Arnon de Melo");
insert into localidade (localidade) values ("Senador Nilo Coelho");
insert into localidade (localidade) values ("Senador Teotônio Vilela");
insert into localidade (localidade) values ("Verdes Campos");
insert into localidade (localidade) values ("Zélia Barbosa Rocha");


insert into tipo(tipo) values("assalto");
insert into tipo(tipo) values("furto");
insert into tipo(tipo) values("assassinato");
insert into tipo(tipo) values("sequestro");
insert into tipo(tipo) values("latrocínio");
insert into tipo(tipo) values("impotunação sexual");
insert into tipo(tipo) values("assédio sexual");
insert into tipo(tipo) values("assédio moral");
insert into tipo(tipo) values("estupro");
insert into tipo(tipo) values("violencia infantil");
insert into tipo(tipo) values("violencia doméstica");
insert into tipo(tipo) values("abandono de incapaz");
insert into tipo(tipo) values("violencia contra animais");
insert into tipo(tipo) values("abuso de incapaz");
insert into tipo(tipo) values("pedofilia");
insert into tipo(tipo) values("agressão física");
insert into tipo(tipo) values("abuso de autoridade");
insert into tipo(tipo) values("trafico de drogas");
insert into tipo(tipo) values("tiroteio");
insert into tipo(tipo) values("atentado ao pudor");
insert into tipo(tipo) values("trafico de pessoas");
insert into tipo(tipo) values("trafico de armas");
insert into tipo(tipo) values("crime de homofobia");
insert into tipo(tipo) values("crime de racismo");
insert into tipo(tipo) values("feminicidio");