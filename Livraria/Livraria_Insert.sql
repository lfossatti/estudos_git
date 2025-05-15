insert into cad_clientes values 
(1, "A", "Leandro Fossatti", "98765432100", "Rua Farroupilha, 814", "Farroupilha", "Videira", "SC",  "89561140", "49999807070", null, null),	
(2, "A", "Miguel Fossatti", "48998448998", "Rua Qualquer, 111", "Batel", "Curitiba", "PR",  "80000000", "41988707070", null, null),	
(3, "A", "Ana da Luz", "11122233344", "Rua Brasil, 1475", "Farroupilha", "Vinhedo", "SP",  "01000000", "49999803030", null, null),	
(4, "A", "Gustavo Becker Jogador", "12345678900", "Rua do Jogador, 1234", "Centro", "Cuiaba", "MT",  "34000100", "55980804040", null, null),	
(5, "A", "Maria Duarte", "54658545244", "Rua Itoupava, 114", "Itoupava", "Blumenau", "SC",  "85000140", "999804023", null, null);

insert into cad_vendedores values 
(1, "A", "Carlos da Silva"),
(2, "A", "Ana da Costa"),
(3, "A", "Vanessa Antunes"),
(4, "A", "Fred Jr"),
(5, "A", "Dafne Doo");

insert into cad_produtos values 
(1, "A", "Notebook i7", 3490, null),
(2, "A", "Impressora laser colorida", 840, null),
(3, "A", "Caixa papel A4", 95, null),
(4, "A", "Mochila estudante", 180, null),
(5, "A", "Caderno grande", 9.99, null);

insert into vendas_capa values 
(1, 1, 1, "2025-04-27", 3499.99, 299.99, 3200),
(2, 3, 5, "2025-05-03", 840, 0, 840),
(3, 5, 4, "2025-05-03", 189.99, 0, 189.99),
(4, 2, 2, "2025-05-05", 4330, 330, 4000),
(5, 5, 1, "2025-05-08", 284.99, 0, 284.99);

insert into vendas_itens values 
(1, 1, 1, 1, 3490.00, 299, 3191),
(2, 1, 5, 1, 9.99, 0.99, 9),
(3, 2, 2, 1, 840, 0, 840),
(4, 3, 4, 1, 180, 0, 180),
(5, 3, 5, 1, 9.99, 0, 9.99),
(6, 4, 1, 1, 3490.00, 290, 3200),
(7, 4, 2, 1, 840, 40, 800),
(8, 5, 3, 1, 95, 0, 95),
(9, 5, 4, 1, 180, 0, 180),
(10, 5, 5, 1, 9.99, 0, 9.99);

