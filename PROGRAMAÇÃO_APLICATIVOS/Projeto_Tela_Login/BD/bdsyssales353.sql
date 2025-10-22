--
-- Banco de dados:  bdsyssales353 
--

-- --------------------------------------------------------

--
-- Estrutura para tabela  categoria 
--

CREATE TABLE  categoria  (
   CODCATEG  int(11) NOT NULL,
   DESCRIAO  varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela  categoria 
--

INSERT INTO  categoria  ( CODCATEG ,  DESCRIAO ) VALUES
(1, 'Frios'),
(2, 'Massas'),
(3, 'Laticíneos');

-- --------------------------------------------------------

--
-- Estrutura para tabela  clientes 
--

CREATE TABLE  clientes  (
   CODCLI  int(11) NOT NULL,
   NOME  varchar(40) NOT NULL,
   CPF_CNPJ  char(14) NOT NULL,
   RUA  varchar(50) DEFAULT NULL,
   BAIRRO  varchar(45) DEFAULT NULL,
   CIDADE  varchar(45) DEFAULT NULL,
   CEP  char(8) DEFAULT NULL,
   UF  char(2) DEFAULT NULL,
   FONE  varchar(15) DEFAULT NULL,
   DATANASC  date DEFAULT NULL,
   TIPO  int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela  clientes 
--

INSERT INTO  clientes  ( CODCLI ,  NOME ,  CPF_CNPJ ,  RUA ,  BAIRRO ,  CIDADE ,  CEP ,  UF ,  FONE ,  DATANASC ,  TIPO ) VALUES
(1, 'Jose Barnabé', '12345678904', 'Rua da\r\nVitoria', 'Torre', 'Recife', '52369789', 'PE', '34215698', '1965-08-28', 0),
(2, 'Maria Santos', '78945612303', 'Rua da\r\nMata', 'Torre', 'Recife', '52379789', 'PE', '34287896', '1945-09-30', 0),
(3, 'Marcos Bezerra', '45612378908', 'Alameda da\r\nConquista', 'Derbi', 'Recife', '52399789', 'PE', '34256987', '1975-02-10', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela  dependente 
--

CREATE TABLE  dependente  (
   CODFUNC  int(11) NOT NULL,
   SEQUENCIAL  int(11) NOT NULL,
   NOME  varchar(40) NOT NULL,
   CPF  char(11) NOT NULL,
   DATANASC  date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela  dependente 
--

INSERT INTO  dependente  ( CODFUNC ,  SEQUENCIAL ,  NOME ,  CPF ,  DATANASC ) VALUES
(1, 1, 'Josiana Silva', '12345678901', '1982-05-09'),
(1, 2, 'Josimara Silva', '01123456789', '1978-07-01');

-- --------------------------------------------------------

--
-- Estrutura para tabela  fone_cliente 
--

CREATE TABLE  fone_cliente  (
   CODCLIENTE  int(11) DEFAULT NULL,
   FONE  varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela  fone_cliente 
--

INSERT INTO  fone_cliente  ( CODCLIENTE ,  FONE ) VALUES
(1, '8134322589'),
(1, '8188759863'),
(1, '8134322589'),
(1, '8188759863');

-- --------------------------------------------------------

--
-- Estrutura para tabela  formapag 
--

CREATE TABLE  formapag  (
   CODFPAG  int(11) NOT NULL,
   DESCRIAO  varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela  formapag 
--

INSERT INTO  formapag  ( CODFPAG ,  DESCRIAO ) VALUES
(1, 'Dinheiro'),
(2, 'Cartão Mater Card'),
(3, 'Cartão Hiper Card');

-- --------------------------------------------------------

--
-- Estrutura para tabela  fornecedores 
--

CREATE TABLE  fornecedores  (
   id_fornecedores  int(11) NOT NULL,
   nome  varchar(255) DEFAULT NULL,
   CNPJ  char(14) DEFAULT NULL,
   Rua  varchar(255) DEFAULT NULL,
   Bairro  varchar(255) DEFAULT NULL,
   Cidade  varchar(255) DEFAULT NULL,
   CEP  char(8) DEFAULT NULL,
   UF  char(2) DEFAULT NULL,
   fone  varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela  funcionario 
--

CREATE TABLE  funcionario  (
   CODFUNC  int(11) NOT NULL,
   NOME  varchar(40) NOT NULL,
   CPF  char(11) NOT NULL,
   DATANASC  date DEFAULT NULL,
   PONTUACAO  int(11) DEFAULT 0,
   CODFUNCSUP  int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela  funcionario 
--

INSERT INTO  funcionario  ( CODFUNC ,  NOME ,  CPF ,  DATANASC ,  PONTUACAO ,  CODFUNCSUP ) VALUES
(1, 'Jose Silva', '12345678904', '1965-08-28', 0, NULL),
(2, 'Maria Santos', '78945612303', '1945-09-30', 25, 1),
(3, 'Marcos Bezerra', '45612378908', '1975-02-10', 53, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela  itens 
--

CREATE TABLE  itens  (
   CODITEM  int(11) NOT NULL,
   CODVENDA  int(11) NOT NULL,
   CODPROD  int(11) NOT NULL,
   QTD  int(11) NOT NULL DEFAULT 1,
   VALORUNIT  float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela  itens 
--

INSERT INTO  itens  ( CODITEM ,  CODVENDA ,  CODPROD ,  QTD ,  VALORUNIT ) VALUES
(1, 1, 1, 10, 2.5),
(1, 2, 1, 20, 2.5),
(1, 3, 5, 20, 6),
(1, 4, 5, 20, 6),
(2, 1, 3, 5, 10.5),
(2, 2, 3, 15, 10.5),
(2, 3, 6, 15, 4.5),
(2, 4, 6, 15, 4.5),
(3, 1, 4, 5, 6),
(3, 2, 4, 25, 6),
(3, 3, 7, 25, 8.5),
(3, 4, 7, 25, 8.5);

-- --------------------------------------------------------

--
-- Estrutura para tabela  produt 
--

CREATE TABLE  produt  (
   CODPROD  int(11) NOT NULL,
   NOME  varchar(40) NOT NULL,
   CODCATEG  int(11) NOT NULL,
   QTDEST  int(11) NOT NULL,
   VALUNIT  float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela  usuarios 
--

CREATE TABLE  usuarios  (
   Usuario_ID  int(5) NOT NULL,
   Nome  varchar(50) NOT NULL DEFAULT '',
   Sobrenome  varchar(50) NOT NULL DEFAULT '',
   eMail  varchar(100) NOT NULL DEFAULT '',
   Usuario  varchar(32) NOT NULL DEFAULT '',
   Senha  varchar(32) NOT NULL DEFAULT '',
   Info  text NOT NULL,
   Nivel_usuario  enum('0','1','2') NOT NULL DEFAULT '0',
   Dta_cadastro  datetime NOT NULL,
   Dta_ultimo_login  datetime NOT NULL,
   Ativado  enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela  usuarios 
--

INSERT INTO  usuarios  ( Usuario_ID ,  Nome ,  Sobrenome ,  eMail ,  Usuario ,  Senha ,  Info ,  Nivel_usuario ,  Dta_cadastro ,  Dta_ultimo_login ,  Ativado ) VALUES
(1, 'admin', 'admin', 'admin@', 'admin', 'admin', '... sobre admin.', '0', '2025-03-28 19:12:55', '2025-03-28 19:12:55', '1'),
(2, 'João', 'Silva', 'joao@', 'joao123', 'senha123', '... sobre João.', '1', '2025-03-28 19:12:55', '2025-03-28 19:12:55', '1'),
(3, 'Maria', 'Santos', 'maria@', 'maria456', 'senha456', '... sobre Maria.', '2', '2025-03-28 19:12:55', '2025-03-28 19:12:55', '1'),
(4, 'Pedro', 'Souza', 'pedro@', 'pedro789', 'senha789', '... sobre Pedro.', '1', '2025-03-28 19:12:55', '2025-03-28 19:12:55', '0'),
(5, 'Ana', 'Oliveira', 'ana@', 'ana1011', 'senha1011', '... sobre Ana.', '1', '2025-03-28 19:12:55', '2025-03-28 19:12:55', '1'),
(6, 'Lucas', 'Ferreira', 'lucas@', 'lucas1213', 'senha1213', '... sobre Lucas.', '2', '2025-03-28 19:12:55', '2025-03-28 19:12:55', '1'),
(7, 'Julia', 'Costa', 'julia@', 'julia1415', 'senha1415', '... sobre Julia.', '1', '2025-03-28 19:12:55', '2025-03-28 19:12:55', '1'),
(8, 'Mateus', 'Almeida', 'mateus@', 'mateus1617', 'senha1617', '... sobre Mateus.', '1', '2025-03-28 19:12:55', '2025-03-28 19:12:55', '1'),
(9, 'Camila', 'Ribeiro', 'camila@', 'camila1819', 'senha1819', '... sobre Camila.', '2', '2025-03-28 19:12:55', '2025-03-28 19:12:55', '0'),
(10, 'Felipe', 'Gomes', 'felipe@', 'felipe2021', 'senha2021', '... sobre Felipe.', '1', '2025-03-28 19:12:55', '2025-03-28 19:12:55', '1');

-- --------------------------------------------------------

--
-- Estrutura para tabela  venda 
--

CREATE TABLE  venda  (
   CODVENDA  int(11) NOT NULL,
   DATA  date NOT NULL,
   CODCLI  int(11) NOT NULL,
   CODFUNC  int(11) NOT NULL,
   CODFPAG  int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela  venda 
--

INSERT INTO  venda  ( CODVENDA ,  DATA ,  CODCLI ,  CODFUNC ,  CODFPAG ) VALUES
(1, '2006-01-25', 1, 1, 1),
(2, '2006-01-25', 1, 2, 1),
(3, '2006-01-30', 2, 2, 2),
(4, '2006-02-20', 2, 2, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela  categoria 
--
ALTER TABLE  categoria 
  ADD PRIMARY KEY ( CODCATEG );

--
-- Índices de tabela  clientes 
--
ALTER TABLE  clientes 
  ADD PRIMARY KEY ( CODCLI ),
  ADD UNIQUE KEY  IU_CPF_CNPJ_CLI  ( CPF_CNPJ );

--
-- Índices de tabela  dependente 
--
ALTER TABLE  dependente 
  ADD PRIMARY KEY ( CODFUNC , SEQUENCIAL );

--
-- Índices de tabela  formapag 
--
ALTER TABLE  formapag 
  ADD PRIMARY KEY ( CODFPAG );

--
-- Índices de tabela  fornecedores 
--
ALTER TABLE  fornecedores 
  ADD PRIMARY KEY ( id_fornecedores );

--
-- Índices de tabela  funcionario 
--
ALTER TABLE  funcionario 
  ADD PRIMARY KEY ( CODFUNC ),
  ADD UNIQUE KEY  IU_CPF_CNPJ_FUNCIONARIO  ( CPF );

--
-- Índices de tabela  itens 
--
ALTER TABLE  itens 
  ADD PRIMARY KEY ( CODITEM , CODVENDA , CODPROD );

--
-- Índices de tabela  produt 
--
ALTER TABLE  produt 
  ADD PRIMARY KEY ( CODPROD );

--
-- Índices de tabela  usuarios 
--
ALTER TABLE  usuarios 
  ADD PRIMARY KEY ( Usuario_ID );

--
-- Índices de tabela  venda 
--
ALTER TABLE  venda 
  ADD PRIMARY KEY ( CODVENDA );

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela  fornecedores 
--
ALTER TABLE  fornecedores 
  MODIFY  id_fornecedores  int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela  usuarios 
--
ALTER TABLE  usuarios 
  MODIFY  Usuario_ID  int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
