select nome_produto, (select descricao_categoria from categoria where id_categoria = produto.id_categoria) as nome_categoria from produto;
select (select descricao_categoria from categoria where id_categoria = produto.id_categoria) as nome_categoria, count(*) from produto group by id_categoria;

select nome_produto, preco, (preco * 22) as total_produto from produto;
select (select descricao_categoria from categoria where categoria.id_categoria = produto.id_categoria) as nome_categoria, count(*) as total_prod, avg(preco) as media_preco
from produto group by id_categoria;

/* nome do vendedor, quantidade de produtos, categoria */
select nome_vendedor, 
(select sum(iv2.quantidade) from item_venda as iv2 where iv2.id_venda = iv.id_venda) as total_produtos, 
(select descricao_categoria from categoria where id_categoria = (select id_categoria from produto where id_produto = iv.id_produto)) as categoria
from vendedor as v, item_venda as iv, venda as vd
where v.id_vendedor = vd.id_vendedor and vd.id_venda = iv.id_venda;

/* nome do vendedor, data da venda, produto, quantidade e categoria */
select nome_vendedor, vd.data_venda, (select nome_produto from produto where id_produto = iv.id_produto) as produto,
iv.quantidade, iv.preco_unitario
from vendedor as v, item_venda as iv, venda as vd
where v.id_vendedor = vd.id_vendedor and vd.id_venda = iv.id_venda;

/* nome do cliente, produto, preco, categoria, data_venda */
select nome_cliente, (select nome_produto from produto where id_produto = iv.id_produto) as produto,
iv.preco_unitario, (select descricao_categoria from categoria where id_categoria = (select id_categoria from produto where id_produto = iv.id_produto)) as categoria,
vd.data_venda
from cliente as c, item_venda as iv, venda as vd
where c.id_cliente = vd.id_cliente and vd.id_venda = iv.id_venda;

/* data venda, nome do cliente, nome do vendedor, quantidade e total_venda */
select vd.data_venda, c.nome_cliente, v.nome_vendedor, (select sum(iv2.quantidade) from item_venda as iv2 where iv2.id_venda = iv.id_venda) as qtde_produtos, 
(select sum(iv2.quantidade * iv2.preco_unitario) from item_venda as iv2 where iv2.id_venda = iv.id_venda) as total_R$
from cliente as c, vendedor as v, item_venda as iv, venda as vd
where c.id_cliente = vd.id_cliente and v.id_vendedor = vd.id_vendedor and vd.id_venda = iv.id_venda
group by vd.id_venda;

select vd.data_venda, c.nome_cliente, v.nome_vendedor, sum(iv.quantidade) as qtde, sum(iv.quantidade * iv.preco_unitario) as total_R$
from cliente as c, vendedor as v, item_venda as iv, venda as vd
where c.id_cliente = vd.id_cliente and v.id_vendedor = vd.id_vendedor and vd.id_venda = iv.id_venda
group by vd.id_venda;

/* listar todos os clientes que tenham mais que um pedido na tabela de pedidos */
select nome from clientes where id_cliente IN (select id_cliente from pedidos group by id_cliente having count(*)>1); /* having = contem */

/* listar todos os clientes que nunca compraram */
select nome from clientes c where not exists (select 1 from pedidos p where p.id_cliente = c.id_cliente);

/* listar todos os clientes que já compraram */
select nome from clientes c where exists (select 1 from pedidos p where p.id_cliente = c.id_cliente);
