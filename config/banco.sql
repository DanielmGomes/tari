CREATE TABLE fornecedor (
	idFornecedor int(10) unsigned NOT NULL AUTO_INCREMENT,
	razaoSocial varchar(60) NOT NULL,
	fantasia varchar(60) NOT NULL,
	endereco varchar(60) NOT NULL,
	numero varchar(5),
	bairro varchar(60) NOT NULL,
	estado varchar(30) NOT NULL,
	cidade varchar(30) NOT NULL,
	cep varchar(9),
	telefone varchar(14) NOT NULL,
	celular varchar(17),
	email varchar(60),
	cnpj varchar(18) NOT NULL,
	inscricaoEstadual varchar(15),
	atividade varchar(30) NOT NULL,
	contato varchar(60) NOT NULL,
	funcao varchar(60) NOT NULL,
	PRIMARY KEY(idFornecedor)
) ENGINE=InnoDB;
 