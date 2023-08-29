create table categorias
(
    id               int auto_increment
        primary key,
    nome             varchar(50) null,
    id_categoria_pai int         null,
    constraint categorias_categorias_id_categoria_pai_fk
        foreign key (id_categoria_pai) references categorias (id)
);

create table clientes
(
    id    int auto_increment
        primary key,
    email varchar(320) not null,
    nome  varchar(64)  not null,
    senha varchar(64)  not null,
    constraint email
        unique (email)
)
    comment 'Dados dos clientes';

create table pedidos
(
    id      int auto_increment
        primary key,
    data    varchar(100) null,
    status  varchar(260) not null,
    total   int          not null,
    usuário varchar(260) not null
);

create table produtos
(
    id        int auto_increment
        primary key,
    nome      varchar(60)  not null,
    descricao varchar(260) null,
    preço     int          null,
    estoque   int          null
);

