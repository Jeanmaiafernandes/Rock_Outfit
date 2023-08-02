create table clientes
(
    id    int auto_increment
        primary key,
    email varchar(320) null,
    nome  varchar(120) null,
    senha varchar(64)  null
);

