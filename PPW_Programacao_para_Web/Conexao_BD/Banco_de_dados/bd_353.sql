--
-- Banco de dados: bd_353
--

-- --------------------------------------------------------

--
-- Estrutura da tabela alunos
--

CREATE TABLE alunos (
  id_aluno int(11) NOT NULL,
  nome varchar(30) DEFAULT NULL,
  cpf varchar(11) DEFAULT NULL,
  data_nasc date DEFAULT NULL,
  email varchar(100) DEFAULT NULL,
  telefone varchar(15) DEFAULT NULL,
  endereco varchar(50) DEFAULT NULL,
  complemento varchar(100) DEFAULT NULL,
  sexo char(1) DEFAULT NULL,
  pcd char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela alunos
--

INSERT INTO alunos (id_aluno, nome, cpf, data_nasc, email, telefone, endereco, complemento, sexo, pcd) VALUES
(49, 'Camilli Vitória Salvaro Honora', '17782332214', '2008-03-03', 'vitoriahonorato001@gmail.com', '549997751', 'Paraiso', 'Casa', 'F', 'N');

-- --------------------------------------------------------

--
-- Estrutura da tabela jogos
--

CREATE TABLE jogos (
  id_jogos int(11) NOT NULL,
  nome varchar(30) DEFAULT NULL,
  categoria char(1) DEFAULT NULL,
  classificacao int(11) DEFAULT NULL,
  descricao varchar(100) DEFAULT NULL,
  ano int(11) DEFAULT NULL,
  empresa varchar(30) DEFAULT NULL,
  compativel char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela jogos
--

INSERT INTO jogos (id_jogos, nome, categoria, classificacao, descricao, ano, empresa, compativel) VALUES
(1, 'Avakin', '', 15, 'Jogo online, bate-papo', 2015, 'Scrol', ''),
(2, 'Avakin', '', 15, 'Jogo online, bate-papo', 2015, 'Scrol', ''),
(3, 'Avakin', '', 15, 'Jogo online, bate-papo', 2015, 'Scrol', ''),
(4, '12', 'V', 12, '12', 12, '12', ''),
(5, '12', 'V', 12, '12', 12, '12', ''),
(6, '1212', 'E', 121, '12', 12, '32', 'S'),
(7, '1212', 'E', 121, '12', 12, '32', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela ocorrencias
--

CREATE TABLE ocorrencias (
  id_ocorrencia int(11) NOT NULL,
  ocorrencia varchar(255) DEFAULT NULL,
  descricao varchar(255) DEFAULT NULL,
  punicao varchar(255) DEFAULT NULL,
  legislacao varchar(255) DEFAULT NULL,
  tipo_legislacao varchar(100) NOT NULL,
  tipo_punicao varchar(50) NOT NULL,
  data_criacao date DEFAULT NULL,
  status_ varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela ocorrencias
--

INSERT INTO ocorrencias (id_ocorrencia, ocorrencia, descricao, punicao, legislacao, tipo_legislacao, tipo_punicao, data_criacao, status_) VALUES
(21, 'Mexendo no Celular', 'Um aluno estava mexendo no celular, durante a aula de matematica', 'Prender os celular por 24hr', 'Grave', ' Lei nº 15.100/2025', 'Federal', '2025-05-19', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela usuario
--

CREATE TABLE usuario (
  id_usuario int(11) NOT NULL,
  login_ varchar(40) DEFAULT NULL,
  senha varchar(40) DEFAULT NULL,
  tipo char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela usuario
--

INSERT INTO usuario (id_usuario, login_, senha, tipo) VALUES
(4, 'Alesandra', '1234', 'F');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela alunos
--
ALTER TABLE alunos
  ADD PRIMARY KEY (id_aluno);

--
-- Índices para tabela jogos
--
ALTER TABLE jogos
  ADD PRIMARY KEY (id_jogos);

--
-- Índices para tabela ocorrencias
--
ALTER TABLE ocorrencias
  ADD PRIMARY KEY (id_ocorrencia);

--
-- Índices para tabela usuario
--
ALTER TABLE usuario
  ADD PRIMARY KEY (id_usuario);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela alunos
--
ALTER TABLE alunos
  MODIFY id_aluno int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela jogos
--
ALTER TABLE jogos
  MODIFY id_jogos int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela ocorrencias
--
ALTER TABLE ocorrencias
  MODIFY id_ocorrencia int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela usuario
--
ALTER TABLE usuario
  MODIFY id_usuario int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;