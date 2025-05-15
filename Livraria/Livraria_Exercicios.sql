-- Mostre os produtos vendidos em um determinado período

select vi.produto_id as cod, cp.nome, vi.qtde, vi.valor_venda, vi.valor_desconto, vi.valor_liquido
from vendas_itens as vi, vendas_capa as vc, cad_produtos cp
where data_venda >= '2025-04-01' and data_venda <= '2025-04-30'
and vc.id = vi.venda_id
and cp.id = vi.produto_id;

-- Exiba serviços contratados com valor acima de R$ 300

select vc.id, vc.data_venda, vc.cliente_id, cc.nome, vc.valor_produtos, vc.valor_desconto, vc.valor_liquido
from vendas_capa as vc, cad_clientes as cc
where vc.valor_liquido > 300
and cc.id = vc.cliente_id;

-- Mostre os atendimentos feitos por um funcionário específico

select vc.id, vc.data_venda, vc.cliente_id, cc.nome, vc.valor_produtos, vc.valor_desconto, vc.valor_liquido
from vendas_capa as vc, cad_clientes as cc
where vc.vendedor_id = 1
and cc.id = vc.cliente_id;

-- Liste todos os pedidos feitos por clientes de fora do estado

select vc.id, vc.data_venda, vc.cliente_id, cc.nome, vc.valor_produtos, vc.valor_desconto, vc.valor_liquido
from vendas_capa as vc, cad_clientes as cc
where cc.uf <> "SC"
and cc.id = vc.cliente_id;

-- Apresente todos os clientes que participaram de promocoes ou descontos

select vc.id, vc.data_venda, vc.cliente_id, cc.nome, vc.valor_produtos, vc.valor_desconto, vc.valor_liquido
from vendas_capa as vc, cad_clientes as cc
where vc.valor_desconto > 0
and cc.id = vc.cliente_id;

-- Atualize algum nome ou descricao

update cad_clientes set nome = 'Leandro G S Fossatti'
where id = 1;

-- Atualize preco/valor de um item

update cad_produtos set preco_venda = 12.99
where id = 5;

-- Delete um registro com base em uma condicao de data

delete from vendas_itens
where venda_id = 5;

delete from vendas_capa
where data_venda >= '2025-05-08';

-- Adicione um novo campo em alguma tabela

alter table cad_vendedores
add column comissao decimal(5,2);

-- Altere o tipo ou tamanho de um campo existente

alter table cad_clientes
change email email varchar(80);

-- Remova uma tabela antiga, caso ela exista

drop table if exists vendas_comissao

-- link do Miro: https://miro.com/app/board/uXjVI1GOxjI=/?share_link_id=435977961639