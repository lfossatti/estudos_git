create table cad_clientes (
  id int(6) auto_increment primary key,
  situacao varchar(1) not null DEFAULT 'A',
  nome varchar(100) not null,
  cpf_cnpj varchar(20) not null,
  endereco varchar(100) not null,
  bairro varchar(50) not null,
  cidade varchar(50) not null,
  uf varchar(2) not null,
  cep varchar(8) not null,
  fone varchar(11) not null,
  email varchar(100),
  obs varchar(200)
);

create table cad_produtos (
  id int(6) auto_increment primary key,
  situacao varchar(1) not null DEFAULT 'A',
  nome varchar(100) not null,
  preco_venda decimal (10,4),
  obs varchar(200)
);

create table cad_vendedores (
  id int(6) auto_increment primary key,
  situacao varchar(1) not null DEFAULT 'A',
  nome varchar(50) not null,
  funcao varchar(20)
);

create table vendas_capa (
  id int(6) auto_increment primary key,
  vendedor_id INT(6) NOT NULL,
  cliente_id INT(6) NOT NULL,
  data_venda DATE NOT NULL,
  valor_produtos DECIMAL(10,4),
  valor_desconto DECIMAL(10,4),
  valor_liquido DECIMAL(10,4),

  FOREIGN KEY (vendedor_id) REFERENCES cad_vendedores(id),
  FOREIGN KEY (cliente_id) REFERENCES cad_clientes(id)  
  );

create table vendas_itens (
  id int(6) auto_increment primary key,
  venda_id INT(6) NOT NULL,
  produto_id INT(6) NOT NULL,
  qtde DECIMAL(10,4),
  valor_venda DECIMAL(10,4),
  valor_desconto DECIMAL(10,4),
  valor_liquido DECIMAL(10,4),

  FOREIGN KEY (venda_id) REFERENCES vendas_capa(id),
  FOREIGN KEY (produto_id) REFERENCES cad_produtos(id)    
  );

create table vendas_comissao (
  id int(6) auto_increment primary key,
  venda_id INT(6) NOT NULL,
  vendedor_id INT(6) NOT NULL,
  comissao DECIMAL(10,4),

  FOREIGN KEY (venda_id) REFERENCES vendas_capa(id),
  FOREIGN KEY (vendedor_id) REFERENCES cad_vendedores(id)    
  );
