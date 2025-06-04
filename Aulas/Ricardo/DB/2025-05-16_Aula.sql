create table clientes (
id int primary key auto_increment,
nome varchar(100)
);

create table pedidos (
id int primary key auto_increment,
id_cliente int,
data_pedido date,
valor decimal(10,2)
);

insert into clientes values 
(1, "Leandro Fossatti"),
(2, "Miguel Pedro");

insert into pedidos values 
(1, 1, '2025-05-15', 152.32),
(2, 2, '2025-05-16', 457.44),
(3, 2, '2025-05-15', 182.75),
(4, 2, '2025-05-16', 347.29),
(5, 1, '2025-05-15', 100.32),
(6, 1, '2025-05-16', 895.29),
(7, 2, '2025-05-15', 752.34),
(8, 1, '2025-05-16', 471.22);

select nome from clientes where id = (select id_cliente from pedidos where id_cliente = 2 limit 1);

select nome from clientes where id in (select id_cliente from pedidos);

create table itens_pedido (
id int primary key auto_increment,
id_pedido int,
produto varchar(100),
quantidade int,
preco_unitario decimal(10,2)
);

insert into itens_pedido values 
(1, 1, "TV", 1, 152.32),
(2, 2, "MOUSE", 1, 457.44),
(3, 3, "PAPEL", 2, 182.75),
(4, 4, "MOUSE", 1, 347.29),
(5, 5, "TV", 2, 100.32),
(6, 6, "NOTE", 1, 895.29),
(7, 7, "IMPR", 1, 752.34),
(8, 8, "IMPR", 1, 471.22);

select produto, 
(select data_pedido from pedidos where pedidos.id = itens_pedido.id_pedido) as data_do_pedido 
from itens_pedido;

create table clientes_endereco (
id int primary key auto_increment,
id_cliente int,
rua varchar(100),
bairro varchar(50),
cidade varchar(50)
);

insert into clientes_endereco values 
(1, 1, "Rua Farroupilha, 111", "Farroupilha", "Videira"),
(2, 2, "Rua Central", "Centro", "Curitiba");

select * from clientes;
select * from clientes_endereco;

Select nome, (select rua from clientes_endereco where clientes_endereco.id_cliente = clientes.id) as "nome da rua"
from clientes;

create table curso (
id int primary key auto_increment,
nome_curso varchar(100)
);

create table aluno (
id int primary key auto_increment,
nome_aluno varchar(100),
id_curso int
);

insert into curso values 
(1, "Informatica"),
(2, "Contabilidade"),
(3, "Direito"),
(4, "Design");

insert into aluno values 
(1, "Leandro Fossati", 2),
(2, "Gustavo Jogador", 1),
(3, "Clara Castanha", 4),
(4, "Miguel Pedro", 3);

Select nome_aluno, (select nome_curso from curso where aluno.id_curso = curso.id) as "nome do curso"
from aluno;

create table departamento (
id int primary key auto_increment,
nome_departamento varchar(100)
);

create table funcionario (
id int primary key auto_increment,
nome_funcionario varchar(100),
id_departamento int
);

insert into departamento values 
(1, "Financeiro"),
(2, "Controladoria"),
(3, "Juridico"),
(4, "Operações");

insert into funcionario values 
(1, "Leandro G S Fossati", 2),
(2, "Gustavo B Jogador", 1),
(3, "Clara C Castanha", 4),
(4, "Miguel Pedro BF", 3);

Select nome_funcionario, (select nome_departamento from departamento where funcionario.id_departamento = departamento.id) as "nome do departamento"
from funcionario;

create table fornecedor (
id int primary key auto_increment,
nome_fornecedor varchar(100)
);

create table produto (
id int primary key auto_increment,
nome_produto varchar(100),
id_fornecedor int
);

insert into fornecedor values 
(1, "Technosuply"),
(2, "Comercial Brasil"),
(3, "Logistica Alfa");

insert into produto values 
(1, "Monitor 22", 1),
(2, "Cabo HDMI", 2),
(3, "Notebook Gamer", 3);

Select nome_produto, (select nome_fornecedor from fornecedor where produto.id_fornecedor = fornecedor.id) as "nome do fornecedor"
from produto;

create table cidades (
id int primary key auto_increment,
nome_cidade varchar(100)
);

create table cursos (
id int primary key auto_increment,
nome_curso varchar(100)
);

create table alunos (
id int primary key auto_increment,
nome_aluno varchar(100),
id_curso int,
id_cidade int
);

insert into cidades values 
(1, "Videira"),
(2, "Caçador"),
(3, "Curitibanos");

insert into cursos values 
(1, "Desenvolvimento de sistemas"),
(2, "Administracao"),
(3, "Design");

insert into alunos values 
(1, "Isabela Ferreira", 1, 1),
(2, "João Andrade", 2, 2),
(3, "Marina Lopes", 3, 3);

Select nome_aluno, 
(select nome_curso from cursos where alunos.id_curso = cursos.id) as "nome do curso",
(select nome_cidade from cidades where alunos.id_cidade = cidades.id) as "nome da cidade"
from alunos;

create table cliente (
id int primary key auto_increment,
nome_cliente varchar(100)
);

create table entregador (
id int primary key auto_increment,
nome_entregador varchar(100)
);

create table pedido (
id int primary key auto_increment,
nome_pedido varchar(100),
id_cliente int,
id_entregador int
);

insert into cliente values 
(1, "Eduardo lima"),
(2, "Carla Souza");

insert into entregador values 
(1, "Tiago Ribeiro"),
(2, "Juliana Dias");

insert into pedido values 
(1, "Pedido A", 1, 2),
(2, "Pedido B", 2, 1);

Select nome_pedido, 
(select nome_cliente from cliente where pedido.id_cliente = cliente.id) as "nome do cliente",
(select nome_entregador from entregador where pedido.id_entregador = entregador.id) as "nome do entregador"
from pedido;

create table empresa (
id int primary key auto_increment,
nome_empresa varchar(100)
);

create table projeto (
id int primary key auto_increment,
nome_projeto varchar(100),
id_empresa int
);

create table funcionarios (
id int primary key auto_increment,
nome_funcionario varchar(100),
id_projeto int
);

insert into empresa values 
(1, "AlfaTech"),
(2, "BethaCorp");

insert into projeto values 
(1, "Sistema ERP", 1),
(2, "APP Mobile", 2);

insert into funcionarios values 
(1, "Andre Silva", 1),
(2, "Patricia Moura", 2);

Select nome_funcionario, 
(select nome_projeto from projeto where funcionarios.id_projeto = projeto.id) as "nome do projeto",
(select nome_empresa from empresa where empresa.id = (select id_empresa from projeto where projeto.id = funcionarios.id_projeto)) as "nome da empresa"
from funcionarios;

create table hospital (
id int primary key auto_increment,
nome_hospital varchar(100)
);

create table medico (
id int primary key auto_increment,
nome_medico varchar(100),
id_hospital int
);

create table paciente (
id int primary key auto_increment,
nome_paciente varchar(100),
id_medico int
);

insert into hospital values 
(1, "Hospital São Lucas"),
(2, "Hospital Vida Saudável");

insert into medico values 
(1, "Dra. Renata Costa", 1),
(2, "Dr. Felipe Andrade", 2);

insert into paciente values 
(1, "Marina Silva", 1),
(2, "Lucas Oliveira", 2);

Select nome_paciente, 
(select nome_medico from medico where paciente.id_medico = medico.id) as "nome do medico",
(select nome_hospital from hospital where hospital.id = (select id_hospital from medico where medico.id = paciente.id_medico)) as "nome da hospital"
from paciente;