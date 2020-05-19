-- create database dashbd;

-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 03/04/2019 às 09:39
-- Versão do servidor: 5.5.63-MariaDB-cll-lve
-- Versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sabha_dashbd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `chamadospormes`
--

CREATE TABLE `chamadospormes` (
  `ajan` int(4) DEFAULT NULL,
  `fjan` int(4) DEFAULT NULL,
  `afev` int(4) DEFAULT NULL,
  `ffev` int(4) DEFAULT NULL,
  `amar` int(4) DEFAULT NULL,
  `fmar` int(4) DEFAULT NULL,
  `aabr` int(4) DEFAULT NULL,
  `fabr` int(4) DEFAULT NULL,
  `amai` int(4) DEFAULT NULL,
  `fmai` int(4) DEFAULT NULL,
  `ajun` int(4) DEFAULT NULL,
  `fjun` int(4) DEFAULT NULL,
  `ajul` int(4) DEFAULT NULL,
  `fjul` int(4) DEFAULT NULL,
  `aago` int(4) DEFAULT NULL,
  `fago` int(4) DEFAULT NULL,
  `aset` int(4) DEFAULT NULL,
  `fset` int(4) DEFAULT NULL,
  `aout` int(4) DEFAULT NULL,
  `fout` int(4) DEFAULT NULL,
  `anov` int(4) DEFAULT NULL,
  `fnov` int(4) DEFAULT NULL,
  `adez` int(4) DEFAULT NULL,
  `fdez` int(4) DEFAULT NULL,
  `ano` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `chamadospormes`
--

INSERT INTO `chamadospormes` (`ajan`, `fjan`, `afev`, `ffev`, `amar`, `fmar`, `aabr`, `fabr`, `amai`, `fmai`, `ajun`, `fjun`, `ajul`, `fjul`, `aago`, `fago`, `aset`, `fset`, `aout`, `fout`, `anov`, `fnov`, `adez`, `fdez`, `ano`) VALUES
(269, 0, 254, 0, 311, 0, 247, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(269, 268, 254, 258, 311, 309, 247, 249, 273, 280, 250, 236, 250, 260, 306, 292, 235, 248, 252, 272, 273, 278, 175, 177, 2018),
(287, 272, 235, 242, 251, 248, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2019);

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `Codigo` int(11) NOT NULL,
  `RazaoSocial` varchar(50) NOT NULL,
  `CNPJ` varchar(40) NOT NULL,
  `Endereco` varchar(60) NOT NULL,
  `Cidade` varchar(30) NOT NULL,
  `Bairro` varchar(30) NOT NULL,
  `CEP` varchar(8) DEFAULT NULL,
  `InscricaoEstatual` varchar(18) NOT NULL,
  `Telefone1` varchar(18) NOT NULL,
  `Telefone2` varchar(18) NOT NULL,
  `Contato` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Observacao` varchar(100) NOT NULL,
  `Tipo` smallint(6) NOT NULL,
  `Descricao` varchar(50) NOT NULL,
  `Ativo` varchar(10) NOT NULL,
  `uid_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `clientes`
--

INSERT INTO `clientes` (`Codigo`, `RazaoSocial`, `CNPJ`, `Endereco`, `Cidade`, `Bairro`, `CEP`, `InscricaoEstatual`, `Telefone1`, `Telefone2`, `Contato`, `Email`, `Observacao`, `Tipo`, `Descricao`, `Ativo`, `uid_cliente`) VALUES
(6, 'CIBI CIA IND BRAS. IMPIANTI', '72277932000359', 'AV dos Imigrantes, 252', 'Taubaté', 'Quiririm', '12043490', '688010173114', '12 36274000', ' ', 'SERGIO BIANCHI/Alessandra', 'nfe@cibi.com.br', 'GESTAO/UNICONET/CLOUDBACKUP', 1, 'CONTRATO', 'Sim', 1),
(8, 'KARL HEINZ BAUERMEISTER', '00602569000127', 'R Serra Negra, 340', 'Tremembé', 'Pq das Pontes', '12120000', ' ', '12 3424063', '12 36215798', 'KARL OU LIANE', 'QMAESTER@QMAESTER.COM.BR', 'HOSTING', 1, 'CONTRATO', 'Sim', 2),
(13, 'MAZZAROPI HOTEIS E SERVICOS LTDA', '55395735000153', 'ETR Municipal dos Remédios, 2380', 'Taubaté', 'Remedios', '12086000', '688065312112', '12 36343405', ' ', 'ARTHUR / Isabel Cristina - Contas a Pagar', 'adm@mazzaropi.com.br', 'GESTAO', 1, 'CONTRATO', 'Sim', 3),
(14, 'OVERSOUND IND. COM. ELET. ACUST LTDA', '67868273000123', 'AV FELIX GALVAO CRUZ SIMOES, 420', 'PINDAMONHANGABA', 'FEITAL', '12441275', '528152087114', '12 3637-3302', ' ', 'Thais Rissoni / Felipe', 'oversound@oversound.com.br', 'GESTAO/CLOUDBACKUP', 1, 'CONTRATO', 'Sim', 4),
(17, 'SAO BENTO EMPREENDIMENTOS LTDA', '04135260000125', 'ETR VEREADOR BENEDITO CANDIDO RIBEIRO, 1403', 'São Bento do Sapucaí', 'QUILOMBO', '12490000', '634057507117', '12 39712686', ' ', 'Dayvid Trincheira (Financeiro)', 'dayvid@trincheira.com.br', 'SUPORTE/ CLOUD SERVER', 1, 'CONTRATO', 'Sim', 5),
(25, 'FABINJECT INDUSTRIA PLASTICA LTDA', '56413990000144', 'AV Dom Pedro I', 'Taubaté', 'Itaim', '12082000', '688168681114', '12 36431858', '12 36725192', ' ', 'suporte@grupofabinject.com.br', 'SUPORTE', 1, 'CONTRATO', 'Sim', 6),
(26, 'OFICIAL DE REG IMOV .TIT E DOCTOS CIVIL', '50445477000159', 'R Dora Lygua Richieri, 30 - Loja 1', 'Campos do Jordão', 'Vila paulista', '12460000', ' ', '12 36644166', ' ', 'titulos@ricj.com.br', 'certidoes@ricj.com.br', 'SUPORTE', 1, 'CONTRATO', 'Sim', 7),
(27, 'GIVI DO BRASIL LTDA', '05738907000176', 'AV ALEXANDRINA DAS CHAGAS MOREIRA, 603', 'Pindamonhangaba', 'PQ INDUSTRIAL', '12412800', '528129067118', '12 36488025', ' ', 'Jackeline e Marcela', 'fiscal@givi.com.br', 'GESTAO/ UNICONET/ CLOUDBACKUP', 1, 'CONTRATO', 'Sim', 8),
(29, 'VIACAO SAENS PENA LTDA', '17051740000150', 'R Jose Maria Vilaca, 195', 'São José dos Campos', 'Alto da Ponte', '12212340', ' ', '12 3924-2200', '12 3911-8100', 'Paulo Henrique (Ger) Fabio Santos (Financ)', 'adm.financeiro@saenspenasjc.com.br', 'GESTAO', 1, 'CONTRATO', 'Sim', 9),
(30, 'NOVAMETAL DO BRASIL LTDA', '03590147000177', 'AV ALEXANDRINA DAS CHAGAS MOREIRA, 695 - 745', 'Pindamonhangaba', 'Distrito Industrial', '12412800', '528119433114', '12 36444500', ' ', ' ', 'a.coelho@novametal.com.br', 'CONTRATO', 1, 'CONTRATO', 'Sim', 10),
(53, 'FABIANO SABHA WALCZAK', '25133011881', 'R Dona Chiquinha de Mattos, 467', 'Taubaté', 'Quiririm', '12043270', ' ', ' ', ' ', ' ', ' ', ' ', 2, 'AVULSO', 'Sim', 12),
(56, 'OFFICER DISTRIBUIDORA', '71702716000774', 'ROD Anhanguera km 37, 37 - Bl 10 e 11', 'Cajamar', 'Jordanéia', '07750000', '241.086.685.110', ' ', ' ', ' ', ' ', ' ', 3, 'COMISSIONAMENTOS', 'Sim', 13),
(68, 'ECO PAPER PRODUTOS EM PAPEL LTDA', '08184606000136', 'AV Julio de Paula Claro, 980', 'Pindamonhangaba', 'Feital', '12441400', '528142532113', ' ', ' ', 'JOICE / FERNANDA NARDY', 'joice.campos@ecopaper.ind.br', ' ', 2, 'AVULSO', 'Sim', 14),
(75, 'INGRAM MICRO BRASIL LTDA', '01771935000215', 'AV Piracema, 1341', 'Barueri', 'Tamboré', '06460030', '206074912112', '11 20784200', '11 20784232', 'Juliana - Contas a Receber', 'atendimento@ingrammicro.com.br', ' ', 3, 'COMISSIONAMENTOS', 'Sim', 15),
(128, 'QUIMBIOL - PELOGGIA & PENA SS LTDA', '96487913000153', 'AV Francisco Barreto Leme, 1357', 'Taubaté', 'Vila São Geraldo', '12062001', ' ', '12 21235256', '12 21235222', 'Jessica', 'financeiro@quimbiol.com.br', 'SUPORTE/ HOSTING', 1, 'CONTRATO', 'Sim', 16),
(107, 'M&F COMERCIO E SERVIÇOS DE INF LTDA ME', '03115223000192', 'R Antônio Castilho Marcondes, 90', 'Taubaté', 'Jardim Baronesa', '12091030', '688250699118', ' ', ' ', ' ', ' ', ' ', 2, 'AVULSO', 'Sim', 17),
(111, 'NEWTON ALMEIDA FRANCA JUNIOR TREMEMBE ME', '02062300000120', 'AV DOS IPES, 382', 'Tremembé', 'FLOR DO VALE', '12120000', '695014393114', '12 36722376', ' ', 'NEWTON', 'hoffmannia@uol.com.br', 'SUPORTE', 1, 'CONTRATO', 'Sim', 18),
(125, 'ZUIKO INDUSTRIA DE MAQUINAS LTDA', '15500776000148', 'R BENEDICTO CLAUDIANO, 100', 'Pindamonhangaba', 'VITORIA VALE III', '12414435', '528085663116', '12 36427028', ' ', 'Raquel Leitao / Thiago Prudente thiago.prudente@zu', 'nfe@zuiko.com.br', 'GESTAO', 1, 'CONTRATO', 'Sim', 19),
(133, 'DART EMBALAGENS DO BRASIL LTDA', '06881830000151', 'R NICOLAU MOASSAB, 85 - LOTEAMENTO INDUSTRIAL FEITAL', 'Pindamonhangaba', 'Feital', '12441285', '528132379119', '12 21260517', ' ', 'Vaneia Santos (Adm/Fin)', 'vaneia.santos@dart.biz', 'Manutenção e ou Instalação', 2, 'AVULSO', 'Sim', 20),
(134, 'ALESSANDRO INOCENCIO DOS SANTOS EIRELLI', '17232314000112', 'R Luiz Augusto de Gouvea, 50', 'Taubaté', 'Chacara Sao Silvestre', '12085000', '688.207.696.115', '12 3631-5728', ' ', 'Alessandro Inocencio', 'alessandro@taubaterra.com.br', 'HOSTING', 1, 'CONTRATO', 'Sim', 21),
(142, 'CAMPOS DO JORDAO SERV DE HOTELARIA LTDA', '08718622000161', 'R Marianne Baungarten, 3400', 'Campos do Jordão', 'Vila Inglesa', '12460000', '246.113.389.112', '12 36343405', ' ', 'Izabel Cristina', 'adm@mazzaropi.com.br', 'SUPORTE', 1, 'CONTRATO', 'Sim', 22),
(145, 'MCG TRANSPORTE LTDA', '74211608000282', 'R Princesa Izabel, 405', 'Pindamonhangaba', 'Cidade Nova', '12414270', '528140655116', ' ', ' ', 'Sueli', 'adm@mcgtransporte.com.br', 'SUPORTE', 1, 'CONTRATO', 'Sim', 23),
(152, 'HOUTER DO BRASIL LTDA', '03928633000152', 'R Léa Maria Brandão Russo, 189', 'São José dos Campos', 'Jardim Satélite', '12231820', '645409029116', ' ', ' ', ' ', 'sac@houter.com.br', ' ', 2, 'AVULSO', 'Sim', 24),
(156, 'SEMEDIC PROD MEDICOS HOSPITALARES LTD', '11274275000130', 'AV Barão do Rio Branco, 68', 'São José dos Campos', 'Jardim Esplanada II', '12242800', '645570283114', '12 981410102', ' ', 'Edilson Silva', 'financeiro@semedic.com.br', 'SUPORTE', 1, 'CONTRATO', 'Sim', 25),
(155, 'INVEST NEGOCIOS IMOBILIARIOS S/C LTD', '53322459000178', 'AV Andrômeda, 2870', 'São José dos Campos', 'Bosque dos Eucaliptos', '12233001', ' ', '12 39164000', ' ', 'Katia Faria', 'emp@investimoveissjc.com.br', 'SUPORTE', 1, 'CONTRATO', 'Sim', 26),
(161, 'MAXAM NITROVALE INDUSTRIA QUIMICA LTDA', '05933838000151', 'ETR MUNIC CELESTINO FERNANDES DA SILVA - s/nº - Zona Rural', 'Cruzeiro', 'Zona Rural', '12701970', '282120665114', '12 35121018', '12 32094056', 'Milton Romero e Ana Lucia (Financeiro)', 'mromero@maxam.net', 'UNICONET/SUPORTE/CLOUD BACKUP - CZR', 1, 'CONTRATO', 'Sim', 27),
(162, 'C & C ASSES CONTABIL E CONDOMINAL LTDA', '01263796000138', 'R Doutor Gastao Camara Leal, 545', 'Taubaté', 'Centro', '12020080', ' ', '12 3621-9107', ' ', 'Claudia e Solange Costa', 'financeiro@grupounicon.com.br', 'SUPORTE', 1, 'CONTRATO', 'Sim', 28),
(171, 'EXPRESSO REDENCAO TRANSP E TURISMO LTDA', '72302409000173', 'TRV Margarida, 200', 'Taubaté', 'Estiva', '12050220', '688006450111', '12 3633-1356', ' ', 'Caroline Silva (Contas a Pagar)', 'contasapagar3@vgadm.com.br', 'CLOUDSERVER', 1, 'CONTRATO', 'Sim', 30),
(177, 'G A OBRAS DE INFRAESTRUTURA EIRELI', '23105727000139', 'R Voluntario Benedito Sergio, 940 - Rua 3 Nr 195', 'Taubaté', 'Parque Sao Cristovao', '12053000', '688.360.954.113', '12 3432-3234', ' ', 'Rodolfo/Thais / Marcelo', 'financeiro@demoliterra.com.br', 'SUPORTE + HOSTING', 1, 'CONTRATO', 'Sim', 32),
(179, 'KARL HEINZ BAUERMEISTER', '84449586700', 'R Alice Brandao, 523', 'Taubaté', 'Vila Sao Geraldo', '12062150', ' ', '12 36215798', ' ', 'Marina/Priscila', 'financeiro@qmaester.com.br', 'HOSPEDAGEM', 1, 'CONTRATO', 'Sim', 33),
(180, 'ALEXANDRE LIMA BORGES', '22334932817', 'R Doutor Souza Alves, 384 - 3o Andar - Sala 307', 'Taubaté', 'Centro', '12020030', ' ', '12 36213132', ' ', 'Juliana Mara / Dr Alexandre Borges', 'julianamara_seguros@hotmail.com', 'SUPORTE', 1, 'CONTRATO', 'Sim', 34),
(181, 'AREIAS GESTAO E PARTIC SOCIETARIAS LTDA', '09196653000162', 'ROD Floriano Rodrigues Pinheiro - KM  6 - SALA 1', 'Taubaté', 'Quiririm', '12042000', ' ', '12 36862461', '12 36861270', 'Lucia Sumie Aoki/ Eliana Andrade', 'contasapagar@areiastubarao.com.br', 'SUPORTE /FIREWALL/ CLOUDBACKUP', 1, 'CONTRATO', 'Sim', 35),
(184, 'A.C. BERTTI TRANSPORTES-ME', '24103986000193', 'AV Charles Schnneider -Bosque Flamboyant, 781 - Sala 62', 'Taubaté', 'Barranco', '12072040', '688374510111', '12 34139819', ' ', 'Ger. Carlos Bertti', 'contato@acberttitransportes.com.br', 'CLOUDSERVER', 1, 'CONTRATO', 'Sim', 36),
(189, 'LOG SERVICE LTDA', '04850257000193', 'R Jurandir Martins Filho, 35 - 9 andar - Ed Global Office', 'Taubaté', 'Lavad de Areia-Bosq Flamboyant', '12041065', '688167611116', '12 34264636', ' ', ' ', 'paula@logserviceltda.com.br', 'CLOUD BACKUP', 1, 'CONTRATO', 'Sim', 37),
(201, 'FRETSOLUTIONS INFORMATICA E TECNOL LTDA', '26122494000170', 'R RIVALDO VALERIO (BOSQUE FLAMBOYANT), 50', 'Taubaté', 'Barranco', '12041020', '688.393.514.114', '12 36814244', ' ', 'Everson / Pamella', 'financeiro@elconsultoria.com.br', 'CLOUDSERVER', 1, 'CONTRATO', 'Sim', 38),
(217, '2o TABELIAO DE NOTAS E PROT LETR TITULOS', '50455443000145', 'AV Coronel Fernando Prestes, 64', 'Pindamonhangaba', 'Centro', '12400240', ' ', '12 36424547', ' ', ' ', 'cartorio@bighost.com.br', 'CLOUDBACKUP', 1, 'CONTRATO', 'Sim', 39),
(218, 'PRO SERV INDUSTRIA MECANICA LTDA', '54521208000185', 'R Batista Sansoni, 301', 'Taubaté', 'Quiririm', '12043500', '688062606110', '12 36274600', ' ', 'Fabio Regino - Ger Financeiro', 'nfe@proserv.ind.br', 'GESTAO/ CLOUD BACKUP', 1, 'CONTRATO', 'Sim', 40),
(219, 'CAMPIONE - NEGOCIOS IMOBILIARIOS LTDA', '11390273000297', 'AV ALMIR JULIO DE SA BIERRENBACH, 200 - BL 002 SL 503', 'RIO DE JANEIRO', 'JACAREPAGUA', '22775028', ' ', '12 34116255', ' ', ' ', 'compras@tursan.com.br', ' ', 2, 'AVULSO', 'Sim', 41),
(220, 'MAZZAROPI HOTELARIA LTDA', '26775454000128', 'AV Virgilio Cardoso Pinna, 8043', 'Taubaté', 'Piracangagua II', '12092774', '688401340112', ' ', ' ', ' ', 'adm1@mazzaropi.com.br', 'GESTAO', 1, 'CONTRATO', 'Sim', 42),
(221, '1o TABELIAO DE NOTAS E PROT LETR TITULOS', '50455435000107', 'AV Coronel Fernando Prestes, 52', 'Pindamonhangaba', 'Centro', '12400240', ' ', '12 36431746', ' ', 'Sr. Luiz Carlos', '1cartorio@uol.com.br', 'CLOUDBACKUP', 1, 'CONTRATO', 'Sim', 43),
(223, 'U.M. Tecnologia Ltda - EPP', '19686471000123', 'ETR DOUTOR ALTINO BONDENSAN, 500 - CJ 204B CTO EMPRESARIAL I', 'São José dos Campos', 'Eugenio de Mello', '12247016', '645.649.846.113', '12 39451362', ' ', 'Giovani Dias - Fundador', 'giovani.dias@urbemobile.com.br', 'Servico Cert Digital', 2, 'AVULSO', 'Sim', 45),
(224, 'TECSUS TECNOLOGIAS P/ SUSTENTABILIDA S/A', '19025928000159', 'ETR Doutor Altino Bondensan, 500 - Pq Tecno Ctr Empr ISL204C', 'São José dos Campos', 'Eugenio de Melo', '12247016', '645.633.986.111', '12 39451515', ' ', 'Diogo Branquinho Ramos', 'compras@tecsus.com.br', ' ', 2, 'AVULSO', 'Sim', 46),
(225, 'ESTEVES E ESTEVES ADVOGADOS', '03419927000159', 'R Doutor Pedro Costa, 40 - CJ 1', 'Taubaté', 'Centro', '12010160', ' ', '12 3629-6538', '12 3632-9897', 'Maria Helena Quintanilha de Almeida', 'helena@estevesadvogados.com.br', 'GESTAO', 1, 'CONTRATO', 'Sim', 47),
(226, 'TURISMO SANTO ANDRE LTDA ', '57512691002688', 'R Batista Sansoni, 501', 'Taubaté', 'Quiririm', '12043500', '688453377110', '12 3625-8500', ' ', ' ', 'suporte@tursan.com.br', 'GESTAO + CLOUD BACKUP', 1, 'CONTRATO', 'Sim', 48),
(227, 'REGINALDO FRANSCISCO ANDRADE ME', '11896168000143', 'AV PAPA JOAO PAULO II, 741 - SALA 01', 'São José dos Campos', 'URBANOVA VII', '12244597', '645346170113', ' ', ' ', ' ', 'reginaldo@assisandaimes.com.br', 'SUPORTE', 1, 'CONTRATO', 'Sim', 49),
(239, 'SKY TECHNOLOGY IND E COM  PROD ELETR LTD', '07770874000177', 'R Loanda, 923', 'São José dos Campos', 'Chacaras Reunidas', '12238330', '645.489.324.112', ' ', ' ', ' ', 'financeiro@gruposky.com.br', 'SUPORTE', 1, 'CONTRATO', 'Sim', 50),
(231, 'BETEL AEROINTERIORES LTDA EPP', '01757672000109', 'R Jose de Campos, 88', 'São José dos Campos', 'Cidade Morumbi', '12236650', '645.250.260.115', ' ', ' ', 'SUELI DE FATIMA', 'diretoria@betel.aero', 'SUPORTE', 1, 'CONTRATO', 'Sim', 51),
(234, 'MKR COMERCIO DE PECAS PARA MOTO LTDA', '05850041000190', 'R Genesia Berardinelli Tarantino, 397', 'São José dos Campos', 'Jardim Paulista', '12216220', '645.456.115.110', ' ', ' ', ' ', 'administrativo.riu@piramidemoto.com.br', 'SUPORTE', 1, 'CONTRATO', 'Sim', 52),
(235, 'NAVA MADEIRAS E MATERIAIS DE CONSTRUCAO', '00827404000153', 'AV PAPA JOAO PAULO II, 741', 'São José dos Campos', 'URBANOVA', '12244597', '645.357.604.117', ' ', ' ', 'Jean Oliveira', 'jean@assiscasaeconstrucao.com.br', 'SUPORTE', 1, 'CONTRATO', 'Sim', 53),
(236, 'S. F. LANDIM TECIDOS', '07260819000137', 'AV Cassiopeia, 610 - loja 1- loja 2', 'São José dos Campos', 'Jardim Satelite', '12230011', '645468832116', '12 39318778', ' ', 'SEBASTIÃO FIDÉLIS', 'financeiro@munitextecidos.com.br', 'SUPORTE', 1, 'CONTRATO', 'Sim', 54),
(237, 'FOCUS ON SERVICES DO BRASIL SERV INF LTD', '03044004000160', 'AV Paulista, 1765 - 7 ANDAR', 'São Paulo', 'Bela Vista', '01311200', ' ', '11 22721224', ' ', ' ', 'thiago.lopes@focusonservices.com', 'SUPORTE', 2, 'AVULSO', 'Sim', 55),
(238, 'ADVOCACIA DE PAULA E CAMARGO', '65058539000147', 'AV Alfredo Ignacio Nogueira Penido, 255 - Andar 13 SL 1308', 'São José dos Campos', 'Parque Residencial Aquarius', '12246000', ' ', '12 21386090', ' ', 'MARCIA LOURDES DE PAULA', 'advocacia@depaula.adv.br', 'SUPORTE', 1, 'CONTRATO', 'Sim', 56),
(243, 'COOPERATIVA DE LATICINIOS MED V PARAIBA', '46632451000142', 'ROD Oswaldo Cruz- S/N - KM 3 - S/N', 'Taubaté', 'Catagua', '12090700', '688012413116', ' ', ' ', ' ', ' ', ' ', 2, 'AVULSO', 'Sim', 57),
(242, 'FRANCO CONSULTORIA DE IMOVEIS', '10353632000192', 'R Ubatuba, 154', 'Taubaté', 'Jardim das Nações', '12030060', '688.280.950.115', '12 3633-8556', ' ', ' ', ' ', 'SUPORTE', 1, 'CONTRATO', 'Sim', 58),
(248, 'A D RUSSO CONSULTORIA CONTABIL', '23863189000141', 'R Coronel Augusto Monteiro, 659', 'Taubaté', 'Centro', '12020160', ' ', '12 3631-3348', ' ', 'antonio@adrusso.com.br', ' ', ' ', 2, 'AVULSO', 'Sim', 59),
(249, 'SANY IMP E EXP DA AMERICA DO SUL LTDA', '09066194000100', 'AV Doutor Romeu Carlos Petrilli, 600', 'Jacareí', 'Parque Meia Lua', '12335490', '392161142117', ' ', ' ', 'vinicius.rezende@sanydobrasil.com', ' ', 'CLOUDBACKUP', 1, 'CONTRATO', 'Sim', 60),
(251, 'ATIMAKY ESQUADRIAS METALICAS LTDA', '47400817000110', 'R CAMINHO DOS MAMOEIROS, 99', 'TAUBATÉ', 'LOTEAMENTO QUINTA DAS FRUTAS', '12092520', '688458021111', ' ', ' ', ' ', ' ', 'GESTAO', 1, 'CONTRATO', 'Sim', 61),
(253, 'AUTO POSTO ALTY LTDA', '48413660000120', 'AV Juscelino Kubitschek de Oliveira, 560', 'Taubaté', 'Centro', '12010600', '688036410115', '12 3424-8169', ' ', 'Graciela', ' ', ' ', 1, 'CONTRATO', 'Sim', 62),
(188, 'FUNDACAO DE APOIO A PESQUISA E POS GRAD', '10405698000189', 'R Armando de Oliveira Cobra, 50 - Ed New Worker Tower-Sl 409', 'São José dos Campos', 'Parque Residencial Aquarius', '12246002', ' ', '12 3911-9569', ' ', 'Sarah Lanziloti', 'secretaria@fapg.org.br', 'HOSTING/SUPORTE/CLOUDBACKP', 1, 'CONTRATO', 'Sim', 63),
(254, 'Avulso2018', '03115223000192', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2, 'AVULSO', 'Sim', 64),
(256, 'CIRCUIT EQUIPAMENTOS ESPORTIVO EIRELLI', '54102488000197', 'AV ALEXANDRINA CHAGAS MOREIRA, 760', 'PINDAMONHANGABA', 'DISTRITO INDUSTRIAL', '12412800', '528122930113', '12 3648-3300', '12 3648-2774', ' ', 'maria.breda@circuit.com.br', 'SUPORTE E GESTAO', 1, 'CONTRATO', 'Sim', 65),
(49, 'TURSAN TURISMO SANTO ANDRE LTDA', '57512691000120', 'AV JULIO DE SA BIERRENBACH ALM, 200 - BLC-002   SAL-0504', 'Rio de Janeiro', 'JACAREPAGUA', '22775040', '11200290', '21 3554-800', ' ', ' ', 'suporte@tursan.com.br', 'GESTAO/CLOUD BACKUP/HOSTING/ CLOUD SERVER', 1, 'CONTRATO', 'Sim', 66),
(255, 'ARMAFILE GERENC E ARMAZ DE DOCUMENTOS LT', '06907138000155', 'ROD Geraldo Scavone, 2300 - UNID 17', 'Jacareí', 'Jardim Califórnia', '12305490', ' ', ' ', ' ', 'marco@buenogrupo.com.br', ' ', ' ', 2, 'AVULSO', 'Sim', 67),
(259, 'Sonia Regina Nogueira Silva', '32442806843', 'R Jayr de Lima Ferreira, 100 - Bloco 10A APTO 21', 'Mogi das Cruzes', 'Jd Cintia', '08830265', ' ', ' ', ' ', ' ', 'equipesonianogueira@gmail.com', ' ', 2, 'AVULSO', 'Sim', 68);

-- --------------------------------------------------------

--
-- Estrutura para tabela `contratos`
--

CREATE TABLE `contratos` (
  `uid_contrato` int(11) NOT NULL,
  `totalhoras` int(11) NOT NULL,
  `valorhorahe` int(11) NOT NULL,
  `tiposervicocontrato` varchar(10) NOT NULL,
  `emailcontrato` varchar(30) NOT NULL,
  `contatocontrato` varchar(30) NOT NULL,
  `resumocontrato` longtext NOT NULL,
  `historicocontrato` longtext NOT NULL,
  `cliente_uid` int(11) NOT NULL,
  `codotrs` int(11) NOT NULL,
  `valorcontrato` decimal(10,2) NOT NULL,
  `valoratual` decimal(10,2) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `datacriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `datamodificacao` timestamp NULL DEFAULT NULL,
  `dataassinatura` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `contratos`
--

INSERT INTO `contratos` (`uid_contrato`, `totalhoras`, `valorhorahe`, `tiposervicocontrato`, `emailcontrato`, `contatocontrato`, `resumocontrato`, `historicocontrato`, `cliente_uid`, `codotrs`, `valorcontrato`, `valoratual`, `status`, `datacriacao`, `datamodificacao`, `dataassinatura`) VALUES
(1, 0, 0, '2', '1cartorio@uol.com.br', 'Luiz carlos', 'Cloud Backup', '\r\n\r\nCota Inicial: 100 GB\r\nCota Atual: 300 GB', 43, 201707, '100.00', '290.00', 1, '2018-10-23 17:34:08', '2018-10-24 16:56:26', '2017-05-30'),
(2, 0, 0, '2', 'cartori@bighost.com.br', 'Reynaldo Marciano', 'Cloud Backup', 'Cota Inicial: 100GB\r\nCota Atual: 100GB', 0, 201704, '100.00', '100.00', 1, '2018-10-18 17:40:15', NULL, NULL),
(4, 0, 0, '3', 'carlos.bertti@acberttitranspor', 'Antonio Carlos Bertti', 'Plano Contratado: Custom (1 CPU 3.01/ 02GB RAM/ 50GB Disco) - Backup \r\nSistema Operacional: Windows server 2008 64 bits\r\nSuporte Contratado: 8x5 - horÃ¡rio comercial', 'Contrato numero 204 ', 36, 201606, '150.00', '158.87', 1, '2018-10-18 18:06:37', '2018-10-24 16:57:32', '2016-05-01'),
(6, 5, 41, '1', 'advocacia@depaula.adv.br', 'Cristina', 'Visita: mensal\r\nFranquia de horas Mensais: 5 horas\r\nVisitas nas dependÃªncias do cliente (atendimento \"In Loco\"0 com duraÃ§Ã£o de : atÃ© 4 horas\r\nHorÃ¡rio de atendimento: HorÃ¡rio comercial 08:00 as 18:00 com 1h de almoÃ§o.\r\nPrazo de Atendimento: 4x8\r\nServiÃ§o de Suporte ( Apoio a novos projetos e a estrutura existente./ ManutenÃ§Ã£o preventiva nos equipamentos./ Auxilio aos usuÃ¡rios no uso dos sistemas Operacionais: Windows XP, Windows Vista, Windows 7, Windows 8 e Windows 10./ Auxilio aos usuÃ¡rios no uso de pacote MS- Office, assim como problemas gerados no dia-a-dia dos mesmos, tais como falha na impressÃ£o, conexÃ£o de internet e intranet./Apoio tÃ©cnico quando necessÃ¡rio em processos de aquisiÃ§Ã£o de sistemas ou soluÃ§Ãµes tecnolÃ³gicas, desenvolvidos por terceiros./ Auxilio remoto para usuÃ¡rios, atravÃ©s da central de atendimento.\r\nEstaÃ§Ãµes de trabalho:4', '.', 56, 201808, '300.00', '300.00', 1, '2018-10-18 18:53:49', '2018-10-24 16:58:29', '2018-04-03'),
(7, 5, 45, '1', 'alexandre.borges@adv.oabsp.org', 'Alexandre Borges Lima', 'Visita: mensal\r\nFranquia de horas Mensais: 5 horas\r\nVisitas nas dependÃªncias do cliente (atendimento \"In Loco\"0 com duraÃ§Ã£o de : atÃ© 4 horas\r\nHorÃ¡rio de atendimento: HorÃ¡rio comercial 08:00 as 18:00 com 1h de almoÃ§o.\r\nPrazo de Atendimento: 4x8\r\nServiÃ§o de Suporte ( Apoio a novos projetos e a estrutura existente./ ManutenÃ§Ã£o preventiva nos equipamentos./ Auxilio aos usuÃ¡rios no uso dos sistemas Operacionais: Windows XP, Windows Vista, Windows 7, Windows 8 e Windows 10./ Auxilio aos usuÃ¡rios no uso de pacote MS- Office, assim como problemas gerados no dia-a-dia dos mesmos, tais como falha na impressÃ£o, conexÃ£o de internet e intranet./Apoio tÃ©cnico quando necessÃ¡rio em processos de aquisiÃ§Ã£o de sistemas ou soluÃ§Ãµes tecnolÃ³gicas, desenvolvidos por terceiros./ Auxilio remoto para usuÃ¡rios, atravÃ©s da central de atendimento.\r\nEstaÃ§Ãµes de trabalho: 7', '.', 34, 20161, '250.00', '263.32', 1, '2018-10-18 19:13:49', '2018-10-24 16:58:51', '2016-04-05'),
(11, 4, 85, '1', 'frsantos@uol.com.br', 'Fabio Ribeiro', 'Visita: mensal\r\nFranquia de horas Mensais: 04 horas\r\nVisitas nas dependÃªncias do cliente (atendimento \"IN LOCO\") com duraÃ§Ã£o de: atÃ© 2 horas\r\nPrazo de atendimento: 4x8\r\nContrato Suporte ( manutenÃ§Ã£o preventiva nos equipamentos./ Auxilio aos usuÃ¡rios no uso dos sistemas operacionais: Windows XP, Windows Vista, Windows7, Windows 8 e Windows 10./ Auxilio aos usuÃ¡rios no uso pacote MS-Office, assim como problemas gerados no dia-a-dia dos mesmos, tais como falha na impressÃ£o, conexÃ£o da internet e intranet./Auxilio remoto para usuÃ¡rios, atravÃ©s da central de Atendimento./AdministraÃ§Ã£o Suporte e Servidores.\r\nAmbiente coberto: Servidores: 1 - EstaÃ§Ã£o de Trabalho: 12 - Notebooks: 1 - Roteadores: 1 - Switchs -1.\r\nHorÃ¡rio de Atendimento: horÃ¡rio comercial das 08:00 as 18:00 de segunda a sexta.', '.', 7, 201419, '450.00', '566.49', 1, '2018-10-19 13:14:34', '2018-10-24 16:59:50', '2018-07-01'),
(17, 0, 0, '3', 'secretaria@fapg.org.br', 'Hudson A. Bode', 'Plano Contratado: CUSTOM (1 CPU 3.01/ 4GB RAM/ 120 GB disco) - Backup\r\nSistema Operacional: Windows Server 2012\r\nSuporte Contratado: 8x5 HorÃ¡rio comercial\r\n', '.', 63, 201607, '350.00', '350.00', 1, '2018-10-19 14:13:09', '2018-10-24 17:04:02', '2017-03-02'),
(52, 0, 0, '4', 'fernanda.nardy@ecopaper.ind.br', 'Antonio Carlos Gomes Nardy', 'Plano Basic\r\nEspaÃ§o em disco: 05 GB/  TransferÃªncia Mensal: 1024 MB / Contas FTP: 01  / Contas email: 15  / Listas de email: 01  / Banco de dados: 0  / Sub DomÃ­nios: 0  /                            Sub DomÃ­nios Estac: 05  / Sub DomÃ­nios Supl: 00.\r\nGerenciador de email: Microsoft Outlook\r\n', '.', 14, 201501, '35.00', '38.00', 1, '2018-11-30 12:32:09', '2019-03-28 17:12:46', '2014-12-01'),
(53, 0, 0, '4', 'financeiro@grupounicon.com.br', 'Claudia Chiste', 'Plano Contratado Basic\r\nEspaÃ§o em disco: 05 GB /  TransferÃªncia Mensal: 1024 MB / Contas FTP: 01 / Contas Email: 15 / Listas de email: 01 / Banco de dados: 0 / Sub DomÃ­nios: 00 / \r\nSub DomÃ­nios Estac: 05 / Sub DomÃ­nios Supl: 00\r\n', '.', 28, 201429, '30.00', '37.00', 1, '2018-11-30 12:45:15', NULL, '2014-05-14'),
(58, 0, 0, '4', 'luizalberto@quimbiol.com.br', 'Luiz Alberto', 'Contrato basico: EspaÃ§o em disco: 05 GB / Transferencia mensal: 1024 MB / Contas FTP: 01 / Contas email: 15 / Listas de email: 01/  Banco de dados: 01 /\r\nSub Dominios: 00 /  Sub dominios: 05/', '.', 16, 201428, '80.00', '50.00', 1, '2018-11-30 18:52:52', '2018-11-30 19:12:38', '2018-11-01');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fechamento`
--

CREATE TABLE `fechamento` (
  `fechaano` year(4) NOT NULL,
  `fechames` int(11) NOT NULL,
  `fecha0` int(11) NOT NULL,
  `fecha1` int(11) NOT NULL,
  `fecha2` int(11) NOT NULL,
  `fecha3` int(11) NOT NULL,
  `fecha4` int(11) NOT NULL,
  `fecha5` int(11) NOT NULL,
  `fecha69` int(11) NOT NULL,
  `fecha10` int(11) NOT NULL,
  `indice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `fechamento`
--

INSERT INTO `fechamento` (`fechaano`, `fechames`, `fecha0`, `fecha1`, `fecha2`, `fecha3`, `fecha4`, `fecha5`, `fecha69`, `fecha10`, `indice`) VALUES
(2018, 1, 131, 56, 13, 19, 7, 2, 21, 19, 1),
(2018, 1, 131, 56, 13, 19, 7, 2, 21, 19, 2),
(2018, 2, 146, 47, 16, 15, 4, 9, 10, 10, 3),
(2018, 3, 167, 60, 11, 19, 14, 6, 9, 23, 4),
(2018, 4, 133, 46, 9, 15, 10, 4, 16, 16, 5),
(2018, 5, 132, 61, 10, 24, 10, 8, 12, 23, 6),
(2018, 6, 124, 40, 23, 16, 8, 5, 11, 9, 7),
(2018, 7, 126, 57, 19, 7, 17, 7, 16, 11, 8),
(2018, 9, 119, 39, 19, 11, 9, 9, 16, 26, 10),
(2018, 8, 130, 71, 19, 11, 21, 5, 20, 15, 11),
(2018, 10, 128, 55, 15, 7, 9, 16, 18, 24, 12),
(2018, 11, 177, 47, 14, 13, 8, 4, 8, 7, 13),
(2018, 12, 115, 38, 7, 7, 0, 4, 3, 3, 14),
(2019, 1, 197, 36, 6, 11, 6, 4, 7, 5, 17),
(2019, 2, 153, 46, 8, 10, 3, 4, 13, 5, 18),
(2019, 3, 163, 52, 6, 6, 2, 4, 11, 4, 19);

-- --------------------------------------------------------

--
-- Estrutura para tabela `propostas`
--

CREATE TABLE `propostas` (
  `uid_proposta` int(11) NOT NULL,
  `datacriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `arquivos` mediumblob NOT NULL,
  `cliente_uid` int(11) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `estagio` varchar(20) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `descricao` longtext NOT NULL,
  `datamodificacao` timestamp NULL DEFAULT NULL,
  `contato` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `resumo` longtext NOT NULL,
  `tiposervico` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `propostas`
--

INSERT INTO `propostas` (`uid_proposta`, `datacriacao`, `arquivos`, `cliente_uid`, `valor`, `estagio`, `numero`, `descricao`, `datamodificacao`, `contato`, `email`, `resumo`, `tiposervico`) VALUES
(1, '2018-10-19 13:05:08', '', 7, '2581.16', '6', '065-102018', ' 03/10/18 - Entrei em contato com Fabio, mas nÃ£o consegui falar com ele.  \r\n26/10/18 - O novo nÃºmero de telefone do cartÃ³rio mudou para 3668-9696. Falei com o Fabio e ele vai aguardar atÃ© o fim desse ano para poder comprar a licenÃ§a. ', '2018-10-26 13:24:24', 'Fabio', 'oficial@ricj.com.br', '   G3S-01259   WinSvrEssntls 2019 SNGL OLP NL    ', '5'),
(2, '2018-10-19 13:05:40', '', 8, '2596.60', '4', '066-102018', '18/10/18 - enviada proposta\r\n22/10/18 - aceite do cliente depois das 12h\r\n23/10/18 - solicitaÃ§Ã£o de produto no fornecedor (JoÃ£o Mansur - World Tech).   ', '2018-10-23 18:40:48', 'Rodrigo HipÃ³lito', 'coord.adm@givi.com.br', ' HD 600GB SAS    ', '5'),
(3, '2018-11-30 12:31:21', '', 64, '2280.00', '6', '100-102018', 'Expresso MaringÃ¡\r\n19/10/18 - Nivaldo informou que nÃ£o consegue fechar proposta agora. Elogiou nosso trabalho e pediu para esperarmos.  ', '2018-12-03 13:17:39', 'Nivaldo', 'nivaldo.giuseppi@expressomaringa.com.br', ' revisÃ£o do ambiente de rede ', '6'),
(4, '2018-11-30 12:30:23', '', 25, '110.00', '6', '112-102018', ' 22/10/18 - proposta enviada. Antonio falou com a Renata. \r\n29/10/18- Renata terÃ¡ uma reuniÃ£o com a Totvs amanhÃ£ (30/10), no final do dia, para resolver o que fazer com relaÃ§Ã£o as propostas. Ligar na quarta-feira , pela manhÃ£. \r\n31/10/18 - Renata fechou com a Totvs, pois eles fizeram uma proposta englobando o backup. ', '2018-11-22 13:15:58', 'Renata Carvalho', 'financeiro@semedic.com.br', ' M&F Cloud Backup â€“ 100 GB\r\n ', '2'),
(5, '2018-11-30 12:29:35', '', 25, '800.00', '6', '105-102018', '  23/10/18 - proposta enviada. Antonio falou com a Renata. \r\n29/10/18- Renata terÃ¡ uma reuniÃ£o com a Totvs amanhÃ£ (30/10), no final do dia, para resolver o que fazer com relaÃ§Ã£o as propostas. Ligar na quarta-feira , pela manhÃ£. \r\nRenata fechou com a Totvs.', '2018-11-22 13:16:55', 'Renata Carvalho', 'financeiro@semedic.com.br', '  Cloud Server - 800,00 mensal e 1800,00 implantaÃ§Ã£o.  ', '3'),
(6, '2018-10-25 12:42:25', '', 27, '675.00', '4', '023-102018', ' 24/10/18 - encaminhada proposta e aceite do cliente no mesmo dia. \r\n25/10/18 - agendado serviÃ§o para dia 16/10/18 com inÃ­cio no perÃ­odo da manhÃ£.', '2018-10-25 12:57:46', 'Ely Freitas', 'efreitas@maxam.net', ' ServiÃ§o mÃ£o-de-obra : â€¢	Retirada do servidor de Cruzeiro;\r\nâ€¢	ValidaÃ§Ã£o do ambiente apÃ³s retirada do servidor;\r\nâ€¢	InstalaÃ§Ã£o do servidor na unidade de SÃ£o JosÃ© dos Campos;\r\nâ€¢	ValidaÃ§Ã£o do ambiente apÃ³s instalaÃ§Ã£o do servidor.\r\n ', '6'),
(7, '2018-10-25 12:53:23', '', 64, '6000.00', '6', '024-102018', ' UTEC\r\n16/10/18 - encaminhei (comercial) proposta para Fabiano e ele enviou para cliente. \r\n05/11/18 - Fabiano teve uma reuniÃ£o com o cliente dia 29/10 e solicitaram parcelamento. Fabiano estÃ¡ estudando a possibilidade e atÃ© o momento nÃ£o tem uma definiÃ§Ã£o. \r\n22/11/18 - O cliente retornou dizendo retomarÃ¡ o projeto no inicio de janeiro/19  \r\n22/02/19 - cliente desistiu do projeto.', '2019-02-22 14:14:39', 'UTEC - Alex Siqueira', 'alex.siqueira@utec.com.br', '    Proposta de serviÃ§o mÃ£o-de-obra UTEC:\r\nâ€¢	InstalaÃ§ao do ESX no servidor novo\r\nâ€¢	Migrar AD/DNS\r\nâ€¢	Migrar arquivos\r\nâ€¢	Migrar interface de gerenciamento Ubiquiti\r\nâ€¢	Converter o servidor de aplicaÃ§Ã£o em servidor Virtual\r\nâ€¢	Implantar um PFsense \r\nâ€¢	Criar rotinas de BKP baremetal dos servidores nos micros montados\r\n* PFSense no primeiro momento somente como FW + blacklist\r\nOBS importante: nessa negociaÃ§Ã£o envolve 1 servidor de R$5000.00 do CÃ¡ssio Rosas.\r\n    ', '6'),
(8, '2018-10-30 14:59:01', '', 11, '97322.40', '1', '067-102018', '  30/10/18 - enviada proposta para Fabiano \r\n30/10/18 - Alterada a margem para 1.08 e encaminhada para o cliente. \r\n01/11/18 - proposta atualizada; valor melhor. Fabiano enviou e-mail para cliente.', '2018-11-01 14:55:47', 'Felipe', 'sistemas@tursan.com.br', '  Computador I3, 4GB, HD SSD  120 x 56 unidades ', '5'),
(9, '2018-10-30 15:00:28', '', 11, '124867.99', '1', '068-102018', '30/10/18 - Proposta enviada para Fabiano', NULL, 'Antonio', 'sistemas@tursan.com.br', 'I3; 4GB; HD SSD +licenÃ§a', '5'),
(10, '2018-11-30 12:31:49', '', 64, '4625.70', '4', '069-112018', 'Forming Tubing\r\n13/11/18 - Enviada proposta para cliente. JÃ¡ confirmado o recebimento. \r\n19/11/18 - Fabiano melhorou o valor, pois o cliente tinha outra proposta com valor menor. E-mail enviado. \r\n21/11/18 - Pedido enviado para o fornecedor. ', '2018-12-03 13:15:59', 'Carlos Henrique', 'suporte@formingtubing.com.br', '   Licenciamento - 9EM-00653   WinSvrSTDCore 2019 SNGL OLP 2Lic NL CoreLic  / R18-05767   WinSvrCAL 2019 SNGL OLP NL DvcCAL    ', '5'),
(11, '2018-11-19 14:05:04', '', 64, '2957.08', '4', '070-112018', ' TV Vanguarda\r\n19/11/18 - OrÃ§amento enviado. LicenÃ§a vence em 20/12. Cliente pediu para enviar proposta no dia 26/11, mas Fabiano achou melhor enviar antes. \r\n20/11/18 - Expliquei para Alexandre porque enviei orÃ§amento antes do dia que ele pediu para enviar. \r\n29/11/18 - Enviada nova proposta com desconto concedido pela Macfee.\r\n12/12/18 - pedido enviado para ingram.\r\n30/11/18 - Falei com Alexandre e ele retornarÃ¡ assim que tiver aceite da proposta.  \r\n03/12/18 - Alexandre apreciou muito o valor com desconto e disse que atÃ© o fim da tarde ele manda e-mail com o pedido.  ', '2018-12-14 12:49:12', 'Alexandre Xavier', 'alexandre@vanguarda.tv', '      TSHECE-AA-DA / MFE Endpoint Prxtn Ess SMB 1:1BZ - 200 licenÃ§as      ', '5'),
(13, '2018-11-30 12:32:08', '', 51, '6215.19', '5', '071-112018', ' 26/11/18 - Proposta enviada para Rogerio \r\n04/02/19 - Cliente nÃ£o responde e nÃ£o retorna.', '2019-03-26 14:56:29', 'Rogerio', 'rogerio@betel.aero', ' Rede para fÃ¡brica nova ', '5'),
(14, '2018-11-30 12:32:38', '', 62, '110.00', '2', '114-112018', '28/11/18 - Fabiano passou as informaÃ§Ãµes para fazer a proposta, pediu para fazer igual da Lima Borges. Enviado para o cliente.\r\n04/02/19 - Graciela nÃ£o apresentou a proposta ainda\r\n07/02/19 - Graciela nÃ£o conseguiu falar sobre a proposta com o diretor\r\n11/02/19 - NÃ£o consegui falar com a Graciela, ela nÃ£o estava.\r\n22/02/19 - Graciela nÃ£o estava.\r\n07/03/19 - Graciela nÃ£o conseguiu apresentar a proposta\r\n11/03/19 - Graciela nÃ£o podia me atender pq estava com cliente.\r\n02/04/19 - Graciela estÃ¡ aguardando os sÃ³cios para conversar sobre a proposta.  ', '2019-04-02 14:26:22', 'Graciela S. Amado', 'financeiro@postoalty.com.br', '  Cloud backup 100 GB  ', '2'),
(15, '2018-11-30 12:33:26', '', 62, '300.00', '1', '130-112018', ' 28/11/18 - Fabiano pediu para fazer a proposta igual da Advocacia De Paula. Enviado para o cliente. \r\n18/12/18 - Em reuniÃ£o entre Fabiano e cliente, foi decidido que eles apresentariam o escopo para negociarmos depois. \r\n04/02/19 - Graciela nÃ£o apresentou a proposta ainda\r\n07/02/19 - Graciela nÃ£o conseguiu falar sobre a proposta com o diretor\r\n11/02/19 - NÃ£o consegui falar com a Graciela, ela nÃ£o estava.\r\n22/02/19 - Graciela nÃ£o estava.\r\n07/03/19 - Graciela nÃ£o conseguiu apresentar a proposta\r\n11/03/19 - Graciela nÃ£o podia me atender pq estava com cliente.\r\n02/04/19 - Graciela estÃ¡ aguardando os sÃ³cios para conversar sobre a proposta.  ', '2019-04-02 14:26:52', 'Graciela S. Amado', 'financeiro@postoalty.com.br', '  GestÃ£o - 5h   ', '1'),
(16, '2018-11-30 12:32:53', '', 34, '110.00', '4', '113-112018', '  23/11- proposta enviada. AntÃ´nio teve o aceite do Alexandre na proposta..\r\n26/11 - contrato pronto e entregue para Fabiano.   ', '2018-11-30 12:10:38', 'Pedrina', 'pedrina.advogada@hotmail.com', '  100 GB  ', '2'),
(17, '2018-11-30 12:35:51', '', 64, '360.00', '4', '072-112018', ' Unicamed\r\n29/11/18 - enviada proposta para o cliente.  \r\n30/11/18 - Em conversa com Fabiano, o cliente solicitou adicionar outro domÃ­nio: examefacilocupacional.com.br  \r\n22/02/19 - cliente aceitou proposta. EstÃ¡ acertando detalhes tÃ©cnicos com a Ã¡rea tÃ©cnica.', '2019-02-22 14:16:40', 'Gabriela e Rodrigo', 'rosanrocontas@yahoo.com.br ; diretoria@unicamed.co', '   Plano Basic semestral - incluindo a promoÃ§Ã£o de 3 meses gratuitos no 1Â° semestre.   ', '4'),
(21, '2018-12-28 13:38:36', '', 16, '390.00', '6', '115-122018', '  28/12/18 - enviada \r\n 23/01/19 - Enviado e-mail ao Wellinton pedindo uma posiÃ§Ã£o sobre a proposta. ', '2019-03-21 14:53:51', 'Welliton', 'welliton@quimbiol.com.br', '  Plano 400GB  ', '2'),
(22, '2018-12-28 13:41:14', '', 16, '800.00', '5', '1021-20181', ' 28/12/18 - enviada \r\n23/01/19 - Enviado e-mail ao Wellinton pedindo uma posiÃ§Ã£o sobre a proposta. \r\n19/02/19 - Tentativa de falar com Wellinton.\r\n22/02/19 - Wellinton nÃ£o estava na empresa.\r\n25/02/19 - Wellinton nÃ£o estava, falei com Caio , estagiÃ¡rio. Enviei e-mail para o Caio veririficar com o Wellintom qual seria o retorno.\r\n14/03/19 - Wellinton nÃ£o nos atende.\r\n21/03/19 - AtÃ© agora sem posicionamento do cliente.  \r\n26/03/19 - sem resposta do cliente.', '2019-03-26 14:48:25', 'Welliton', 'welliton@quimbiol.com.br', '   Proposta Fire Wall - FW   ', '6'),
(23, '2018-12-28 13:46:03', '', 9, '1575.54', '6', '075-122018', '  27/12/18 - enviada proposta\r\n28/12/18- em contato com Gabriel, tivemos a informaÃ§Ã£o de que o item RD-5G30 nÃ£o atende a necessidade da empresa. Desconsiderar esse produto do orÃ§amento. Enviado orÃ§amento revisado. \r\n22/01/19 - Cliente comprou em um distribuidor, devido ao prazo de entrega.', '2019-01-23 16:39:31', 'Gabriel', 'ti@saenspenasjc.com.br', '  AMO-2G10- 2.4 GHz airMAX Dual Omni, 10 dBi w/ Rocket Kit\r\nRD-5G30- 5 GHz Rocket Dish, 30 dBi w/ Rocket Kit\r\nROCKETM2- 2.4 GHz Rocket MIMO, airMAX  ', '5'),
(24, '2019-01-23 16:51:58', '', 16, '2539.00', '5', '76-0122018', ' 28/12/18 - Proposta enviada pela Paola\r\n22/01/19 - Enviado e-mail para o Welliton pedindo uma posiÃ§Ã£o sobre o orÃ§amento. \r\n26/03/19 - vÃ¡rias tentativas para falar com Welliton, mas ele nÃ£o atende as ligaÃ§Ãµes e nÃ£o retorna os e-mails.', '2019-03-26 14:46:38', 'Welliton', 'welliton@quimbiol.com.br', ' RACK 19\" - 24U x 570 - MULTIWAY - PRETO\r\nBANDEJA FIXA 400 PARA 470 E 570 - PRETO ', '5'),
(25, '2019-01-23 16:58:54', '', 57, '25561.00', '5', '073-122018', ' 06/12/18 - Proposta enviada por e-mail;\r\n22/01/19 - Eduardo ainda nÃ£o fechou a compra e nÃ£o tem previsÃ£o de fechamento ainda. \r\n22/02/19 - Eduardo aguarda aprovaÃ§Ã£o da diretoria para dar seguimento com o processo de cotaÃ§Ã£o. Como nÃ£o tem previsÃ£o e o valores devem mudar, essa proposta esta sendo fechada.', '2019-02-22 13:17:55', 'JosÃ© Eduardo Csuka', 'ti@comevap.com.br', ' 210-ALNH-2XX1 - SERVER DELL R740 01X PROC XEON 4114 2X16GB 2X1.2TB 2X750W 3YR24X7 / WINDOWS SERVER STANDARD 2016  ', '5'),
(26, '2019-02-06 17:11:20', '', 64, '30348.00', '1', '155-022019', '06/02/19 Fabiano- Proposta enviada para o cliente via e-mail (15h10). \r\n07/03/19 - tentando falar com cliente, mas sem sucesso. EstÃ¡ em reuniÃ£o ou nÃ£o estÃ¡ na empresa e nÃ£o retorna e-mail.\r\n08/03/19 - tentativa de falar com cliente, mas estava ao telefone. \r\n11/03/19 - Flavio disse que a diretoria ainda nÃ£o decidiu se optarÃ¡ pela CTL ou pelo serviÃ§o de 3Â°. AtÃ© a prÃ³xima semana deve estar decidido. Disse que nos darÃ¡ retorno.', '2019-03-11 13:28:14', 'Flavio Panace', 'flavio@dmcard.com.br', '  CLIENTE: DM Card - SÃ£o josÃ© dos campos (12) 2136-0149\r\nOutsourcing de 5 recursos (4 diurnos + 1 noturno) para jornada de 8h20m. + 1 supervisor de equipe volante  ', '1'),
(27, '2019-02-13 12:09:50', '', 0, '904.68', '4', '77-012019', '05/02/19 - Encaminhada proposta para cliente.\r\n07/02/19 - Aceite do cliente e pedido enviado ao fornecedor.\r\n12/02/19 - abertura de chamado no fornecedor para alterar o cnpj na NF\r\n', NULL, 'Victor', 'suporte.ti@tursan.com.br', 'TSHECE-AA-AA  -  MFE Endpoint Prxtn Ess SMB 1:1BZ - valor em dÃ³lar $ 243.26', '5'),
(28, '2019-02-13 12:26:33', '', 66, '904.68', '4', '77-022019', '05/02/19 - enviada proposta para cliente\r\n07/02/19 - aceite do cliente e pedido enviado para fornecedor\r\n12/02/19 - abertura de RMA no fornecedor para mudanÃ§a de CNPJ na nota fiscal', NULL, 'Victor', 'suporte.ti@tursan.com.br', 'TSHECE-AA-AA  -  MFE Endpoint Prxtn Ess SMB 1:1BZ - $ 243.26 (valor em dÃ³lar na proposta)', '5'),
(29, '2019-02-19 15:01:08', '', 16, '320.00', '4', '079-022019', '19/02/19 - enviado orÃ§amento com valor da HD 1TB que jÃ¡ esta em uso no cliente.  \r\n', '2019-04-02 14:27:33', 'Wellinton', 'wellinton@quimbiol.com.br', '  HD 1TB usado no servidor de arquivos para substituir o antigo.  ', '5'),
(30, '2019-02-28 14:19:07', '', 8, '3580.28', '6', '080-022019', '  21/02/19 - enviada proposta \r\n21/02/19 - Marcela questionou se os valores estavam em Reais e depois nÃ£o comentou mais nada. \r\n03/04/19 - Marcela informou que, por enquanto, o projeto estÃ¡ parado.', '2019-04-03 12:33:13', 'Rodrigo HipÃ³lito', 'diretoria@givi.com.br', '  6VC-03747 - WinRmtDsktpSrvcsCAL 2019 SNGL OLP NL DvcCAL  ', '5'),
(31, '2019-02-28 14:52:14', '', 10, '2903.94', '6', '081-022019', '22/02/19 - enviada proposta', NULL, 'Robson', 'r.souza@novametal.com.br', 'KL4741KAPFS - Kaspersky Endpoint Security Cloud Brazilian Edition 25-49 node 1 year', '5'),
(32, '2019-02-28 14:55:32', '', 10, '3769.92', '6', '082-022019', '22/02/19 - proposta encaminhada.\r\n25/02/19 - cliente fechou com outra empresa.', NULL, 'Robson', 'r.souza@novametal.com.br', 'GravityZone Advanced Business Security', '5'),
(33, '2019-03-01 14:07:26', '', 10, '4678.72', '5', '083-022019', ' 22/02/19 - OrÃ§amento enviado ', '2019-04-02 14:27:57', 'Stefanie', 's.cavalcante@novametal.com.br', ' NOTEBOOK LENOVO B330 I5-8250/8GB/1TB\r\nSSD 240GB KINGSTON ', '5'),
(34, '2019-03-01 14:12:01', '', 19, '4048.31', '4', '084-022019', ' 27/02/19 - enviada proposta\r\n01/03/19 - Denner pediu novo orÃ§amento com renovaÃ§Ã£o para 2 anos. Enviado novo orÃ§amento para cliente. \r\n06/03/19 -Pedido de compra enviado para Esy.', '2019-03-06 12:36:24', 'Denner', 'denner.santos@zuiko.com.br', ' KL4863KAPDR KES Select BR 25-49 Node 2Y Rnl Lic Kaspersky Endpoint Security for Business - Select Brazilian Edition. 25-49 Node 2 year Renewal License ', '5'),
(35, '2019-03-01 14:54:03', '', 8, '437.11', '4', '085-022019', ' 28/02/19 - enviado orÃ§amento de renovaÃ§Ã£o da licenÃ§a McAfee\r\n01/03/19 - aceite do cliente. Pedido enviado ao fornecedor.\r\n', '2019-03-06 12:47:31', 'Marcela', 'coord.adm@givi.com.br', ' ETPYFM-AA-AA - MFE EP Threat Protection 1Yr BZ [P+] - renovaÃ§Ã£o vence em 05/03/19 ', '5'),
(36, '2019-03-06 13:03:07', '', 14, '70.00', '1', '116-022019', '25/02/19 - enviada proposta', NULL, 'Joice', 'joice.campos@ecopaper.ind.br', '50GB', '2'),
(37, '2019-03-06 13:07:09', '', 9, '390.00', '1', '117-022019', '26/02/19 - proposta enviada para Fabiano, a pedido dele.', NULL, 'Marcela', 'coord.adm@givi.com.br', '400GB', '2'),
(38, '2019-03-06 13:14:05', '', 19, '390.00', '1', '118-022019', ' 26/02/19 - proposta encaminhada para Fabiano, a pedido dele mesmo. \r\n25/03/19 - cliente pediu 3 cotaÃ§Ãµes do mesmo serviÃ§o e tambÃ©m esta aguardando cotaÃ§Ã£o da NipCable.', '2019-04-02 14:17:31', 'Marcela', 'coord.adm@givi.com.br', ' 400GB ', '2'),
(39, '2019-03-13 12:09:59', '', 47, '3220.52', '6', '086-032019', '11/03/19 - proposta enviada. Cliente nÃ£o aceitou pq achou desnecessÃ¡rio o gasto proposto.', NULL, 'Helena', 'helena@estevesadvogados.com.br', 'Infraestrutura para novo escritÃ³rio', '5'),
(40, '2019-03-18 14:31:09', '', 23, '180.00', '4', '087-032019', '15/03/19 - enviada proposta e aceite do cliente.', NULL, 'Josiane', 'adm@mcgtransporte.com.br', 'Hosting semestral, plano basic', '4'),
(41, '2019-03-19 14:41:32', '', 64, '650.00', '6', '106-022019', '28/02/19 - enviada proposta para Matheus\r\n19/03/19 - Fabiano informou que a empresa nÃ£o fecharÃ¡ esse serviÃ§o.', NULL, 'Matheus', 'ti@armafile.com', '2 CPU\r\n4GB Ram\r\n500GB disco', '3'),
(42, '2019-03-20 13:30:15', '', 50, '600.00', '2', '107-032019', ' 19/03/19 - enviada proposta para o cliente. \r\n25/03/19 - COnversei com o Fabricio sobre a proposta, ele esta avaliando em conjunto com o Marcelo (TI).', '2019-04-02 14:03:13', 'Marcelo', 'marcelo@gruposky.com.br', ' 2 CPU / 8GB Ram / 350GB Disco ', '3');

-- --------------------------------------------------------

--
-- Estrutura para tabela `rat`
--

CREATE TABLE `rat` (
  `ratnumero` int(11) NOT NULL,
  `ratinicio` time NOT NULL,
  `ratfim` time NOT NULL,
  `rattipo` int(11) NOT NULL,
  `ratcodotrs` int(11) NOT NULL,
  `ratdata` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `rat`
--

INSERT INTO `rat` (`ratnumero`, `ratinicio`, `ratfim`, `rattipo`, `ratcodotrs`, `ratdata`) VALUES
(4374, '14:00:00', '17:20:00', 1, 201411, '2018-09-13'),
(4375, '14:00:00', '17:00:00', 1, 201708, '2018-09-14'),
(4376, '08:45:00', '12:00:00', 1, 201702, '2018-09-18'),
(4377, '09:20:00', '12:30:00', 1, 201411, '2018-09-20'),
(4379, '08:00:00', '11:00:00', 1, 201429, '2019-09-25'),
(4380, '09:15:00', '12:15:00', 1, 201411, '2018-09-27'),
(4440, '08:35:00', '12:00:00', 1, 201702, '2018-09-21'),
(4441, '14:14:00', '15:50:00', 1, 201602, '2018-09-26'),
(4442, '08:40:00', '12:00:00', 1, 201702, '2018-09-18'),
(4493, '08:30:00', '17:20:00', 1, 201402, '2018-09-18'),
(4495, '09:14:00', '10:40:00', 1, 201804, '2018-09-19'),
(4496, '11:04:00', '12:20:00', 1, 201808, '2018-09-19'),
(4497, '14:26:00', '17:08:00', 1, 201607, '2018-09-19'),
(4498, '09:13:00', '09:39:00', 1, 201804, '2018-09-25'),
(4499, '09:58:00', '10:20:00', 1, 201805, '2018-09-25'),
(4500, '10:38:00', '13:10:00', 1, 201806, '2019-09-25'),
(4541, '14:38:00', '17:35:00', 1, 201602, '2018-09-13'),
(4542, '08:27:00', '12:09:00', 1, 201706, '2018-09-14'),
(4543, '13:56:00', '17:28:00', 1, 201706, '2018-09-10'),
(4544, '08:43:00', '12:00:00', 1, 201420, '2018-09-17'),
(4545, '14:08:00', '17:37:00', 1, 201706, '2018-09-17'),
(4546, '08:30:00', '12:15:00', 1, 201809, '2018-09-19'),
(4547, '15:04:00', '17:42:00', 1, 201602, '2018-09-19'),
(4548, '09:00:00', '12:29:00', 1, 201420, '2018-09-20'),
(4549, '08:26:00', '12:08:00', 1, 201706, '2018-09-21'),
(4550, '08:42:00', '12:05:00', 1, 201420, '2019-09-24'),
(4595, '08:20:00', '09:10:00', 1, 201804, '2019-01-02'),
(4596, '09:20:00', '09:40:00', 1, 201811, '2019-01-02'),
(4597, '09:20:00', '11:55:00', 1, 201411, '2019-01-03'),
(4598, '08:50:00', '12:00:00', 1, 201420, '2019-01-07'),
(4599, '14:20:00', '19:20:00', 1, 201706, '2019-01-07'),
(4600, '07:50:00', '08:45:00', 1, 201706, '2019-01-08'),
(4601, '08:36:00', '12:35:00', 1, 201602, '2018-09-25'),
(4602, '14:31:00', '17:30:00', 1, 201706, '2018-09-24'),
(4603, '14:53:00', '18:13:00', 1, 201809, '2018-09-25'),
(4604, '08:54:00', '12:05:00', 1, 201420, '2018-09-27'),
(4605, '08:27:00', '12:05:00', 1, 201706, '2018-09-28'),
(4676, '08:44:00', '12:33:00', 1, 201602, '2019-01-03'),
(4677, '14:20:00', '17:51:00', 1, 201402, '2019-01-03'),
(4678, '08:35:00', '12:35:00', 1, 201420, '2019-01-04'),
(4679, '08:39:00', '12:17:00', 1, 201425, '2019-01-07'),
(4680, '07:30:00', '17:29:00', 1, 201428, '2019-01-08'),
(4681, '07:42:00', '12:30:00', 1, 201425, '2019-01-09'),
(4682, '08:58:00', '12:10:00', 1, 201602, '2019-01-10'),
(4683, '14:30:00', '17:22:00', 1, 201425, '2019-01-10'),
(4684, '12:22:00', '13:06:00', 1, 201427, '2019-01-11'),
(4685, '07:05:00', '17:28:00', 1, 201425, '2019-01-11'),
(4686, '07:10:00', '17:00:00', 1, 201425, '2019-01-14'),
(4687, '08:31:00', '17:35:00', 1, 201428, '2019-01-15'),
(4688, '07:06:00', '17:31:00', 1, 201425, '2019-01-16'),
(4689, '08:29:00', '09:29:00', 1, 201427, '2019-01-22'),
(4690, '09:55:00', '12:21:00', 1, 201602, '2019-01-22'),
(4691, '16:00:00', '18:58:00', 1, 201427, '2019-01-22'),
(4692, '07:26:00', '17:20:00', 1, 201425, '2019-01-21'),
(4693, '13:01:00', '13:22:00', 1, 201427, '2019-01-23'),
(4694, '07:24:00', '17:57:00', 1, 201425, '2019-01-23'),
(4695, '08:38:00', '12:30:00', 1, 201702, '2019-01-24'),
(4696, '14:54:00', '18:02:00', 1, 201602, '2019-01-24'),
(4698, '11:05:00', '12:20:00', 1, 201602, '2019-01-28'),
(4699, '07:10:00', '12:26:00', 1, 201425, '2019-01-25'),
(4700, '13:41:00', '17:20:00', 1, 201425, '2019-01-28'),
(4764, '08:30:00', '16:00:00', 1, 201708, '2019-01-16'),
(4765, '09:00:00', '12:00:00', 1, 201406, '2019-01-17'),
(4766, '08:00:00', '11:30:00', 1, 201702, '2019-02-05'),
(4767, '08:30:00', '12:00:00', 1, 201702, '2019-02-07'),
(4768, '13:30:00', '17:00:00', 1, 201420, '2019-02-07'),
(4769, '13:20:00', '17:00:00', 1, 201708, '2019-02-08'),
(4770, '08:00:00', '11:45:00', 1, 201702, '2019-02-12'),
(4771, '07:40:00', '11:50:00', 1, 201702, '2019-02-14'),
(4772, '08:30:00', '12:00:00', 1, 201702, '2019-02-15'),
(4777, '08:30:00', '12:00:00', 1, 201702, '2019-03-07'),
(4778, '14:20:00', '17:20:00', 1, 201411, '2019-03-07'),
(4779, '13:30:00', '17:00:00', 1, 201708, '2019-03-08'),
(4780, '08:00:00', '12:00:00', 1, 201702, '2019-03-12'),
(4781, '15:20:00', '17:30:00', 1, 201427, '2019-03-12'),
(4782, '07:50:00', '11:50:00', 1, 201702, '2019-03-14'),
(4783, '13:00:00', '13:50:00', 2, 201428, '2019-03-15'),
(4784, '08:00:00', '12:00:00', 1, 201702, '2019-03-15'),
(4785, '07:30:00', '17:00:00', 1, 201425, '2019-03-20'),
(4786, '08:33:00', '12:15:00', 1, 201702, '2019-03-21'),
(4787, '14:25:00', '17:15:00', 1, 201411, '2019-03-21'),
(4788, '07:30:00', '12:00:00', 1, 201425, '2019-03-22'),
(4789, '13:00:00', '17:00:00', 1, 201708, '2019-03-22'),
(4790, '07:30:00', '17:20:00', 1, 201425, '2019-03-25'),
(4791, '08:30:00', '13:00:00', 1, 201702, '2019-03-26'),
(4792, '14:00:00', '17:00:00', 1, 201406, '2019-03-26'),
(4793, '07:20:00', '17:30:00', 1, 201425, '2019-03-27'),
(4794, '08:30:00', '12:00:00', 1, 201702, '2019-03-28'),
(4795, '07:00:00', '12:00:00', 1, 201425, '2019-03-29'),
(4801, '14:15:00', '17:30:00', 1, 201429, '2019-01-08'),
(4802, '08:50:00', '12:35:00', 1, 201702, '2019-01-08'),
(4803, '08:30:00', '12:20:00', 1, 201702, '2019-01-10'),
(4804, '14:15:00', '17:40:00', 1, 201420, '2019-01-10'),
(4805, '08:00:00', '12:30:00', 1, 201706, '2019-01-11'),
(4806, '15:36:00', '17:45:00', 1, 201805, '2019-01-11'),
(4807, '08:30:00', '12:25:00', 1, 201420, '2019-01-14'),
(4808, '14:20:00', '18:00:00', 1, 201706, '2019-01-14'),
(4809, '08:30:00', '12:12:00', 1, 201702, '2019-01-15'),
(4810, '15:34:00', '16:20:00', 1, 201804, '2019-01-15'),
(4811, '16:34:00', '18:15:00', 1, 201805, '2019-01-15'),
(4812, '13:45:00', '15:05:00', 1, 201801, '2019-01-16'),
(4813, '15:30:00', '18:00:00', 1, 201808, '2019-01-16'),
(4814, '16:40:00', '17:15:00', 1, 201607, '2019-01-16'),
(4815, '08:43:00', '12:20:00', 1, 201702, '2019-01-17'),
(4816, '14:45:00', '17:25:00', 1, 201420, '2019-01-17'),
(4817, '08:17:00', '12:00:00', 1, 201706, '2019-01-18'),
(4818, '14:16:00', '16:25:00', 1, 201810, '2019-01-18'),
(4819, '08:57:00', '12:10:00', 1, 201420, '2019-01-21'),
(4820, '13:43:00', '17:50:00', 1, 201706, '2019-01-21'),
(4821, '08:15:00', '11:50:00', 1, 201702, '2019-01-22'),
(4822, '09:13:00', '09:50:00', 1, 201804, '2019-01-23'),
(4823, '10:25:00', '12:00:00', 1, 201806, '2019-01-23'),
(4824, '12:25:00', '16:00:00', 1, 201807, '2019-01-23'),
(4826, '15:00:00', '18:00:00', 1, 201706, '2019-01-28'),
(4827, '14:30:00', '15:30:00', 1, 201810, '2019-01-30'),
(4828, '15:40:00', '17:35:00', 1, 201804, '2019-01-30'),
(4829, '08:00:00', '12:00:00', 1, 201706, '2019-02-01'),
(4830, '09:00:00', '12:00:00', 1, 201420, '2019-02-04'),
(4831, '14:45:00', '18:17:00', 1, 201419, '2019-02-05'),
(4832, '09:50:00', '10:25:00', 1, 201804, '2019-02-06'),
(4833, '10:50:00', '17:16:00', 1, 201807, '2019-02-06'),
(4834, '13:30:00', '17:30:00', 1, 201419, '2019-02-12'),
(4835, '15:00:00', '15:40:00', 1, 201810, '2019-02-15'),
(4836, '16:20:00', '17:05:00', 1, 201801, '2019-02-15'),
(4837, '10:00:00', '14:35:00', 1, 201804, '2019-02-20'),
(4838, '16:00:00', '17:00:00', 1, 201808, '2019-02-20'),
(4839, '11:30:00', '12:20:00', 1, 201809, '2019-02-21'),
(4845, '10:00:00', '12:15:00', 1, 201403, '2019-03-12'),
(4846, '15:30:00', '17:30:00', 1, 201404, '2019-03-12'),
(4847, '10:00:00', '13:25:00', 1, 201810, '2019-03-14'),
(4848, '08:30:00', '17:05:00', 1, 201402, '2019-03-15'),
(4849, '09:35:00', '12:15:00', 1, 201804, '2019-03-21'),
(4850, '13:30:00', '15:05:00', 1, 201810, '2019-03-21'),
(4851, '08:47:00', '12:20:00', 1, 201702, '2019-01-29'),
(4852, '14:07:00', '14:41:00', 1, 201706, '2019-01-29'),
(4853, '15:07:00', '17:25:00', 1, 201427, '2019-01-29'),
(4854, '07:08:00', '17:29:00', 1, 201425, '2019-01-30'),
(4855, '08:40:00', '12:11:00', 1, 201702, '2019-01-31'),
(4856, '14:36:00', '17:31:00', 1, 201420, '2019-01-31'),
(4857, '07:26:00', '12:28:00', 1, 201425, '2019-02-01'),
(4858, '13:39:00', '19:40:00', 1, 201602, '2019-02-01'),
(4860, '14:31:00', '18:11:00', 1, 201706, '2019-02-04'),
(4861, '08:47:00', '13:00:00', 1, 201428, '2019-02-05'),
(4862, '14:47:00', '18:46:00', 1, 201602, '2019-02-05'),
(4863, '15:07:00', '17:52:00', 1, 201602, '2019-02-07'),
(4864, '08:30:00', '12:34:00', 1, 201706, '2019-02-08'),
(4865, '08:32:00', '12:05:00', 1, 201420, '2019-02-11'),
(4866, '14:22:00', '17:55:00', 1, 201706, '2019-02-11'),
(4867, '13:58:00', '17:20:00', 1, 201809, '2019-02-12'),
(4869, '14:54:00', '17:03:00', 1, 201602, '2019-02-14'),
(4870, '08:40:00', '12:40:00', 1, 201706, '2019-02-15'),
(4872, '14:45:00', '17:38:00', 1, 201706, '2019-02-18'),
(4873, '08:32:00', '12:06:00', 1, 201602, '2019-02-19'),
(4874, '15:02:00', '17:33:00', 1, 201809, '2019-02-19'),
(4875, '08:42:00', '12:43:00', 1, 201420, '2019-02-21'),
(4876, '14:14:00', '17:25:00', 1, 201602, '2019-02-21'),
(4882, '08:55:00', '12:34:00', 1, 201420, '2019-02-28'),
(4883, '08:36:00', '12:30:00', 1, 201706, '2019-03-01'),
(4884, '15:01:00', '17:15:00', 1, 201602, '2019-03-01'),
(4885, '15:15:00', '18:22:00', 1, 201427, '2019-03-06'),
(4886, '13:05:00', '14:43:00', 2, 201420, '2019-03-06'),
(4887, '14:47:00', '17:42:00', 1, 201706, '2019-03-07'),
(4888, '08:53:00', '12:18:00', 1, 201706, '2019-03-08'),
(4889, '14:25:00', '18:00:00', 1, 201602, '2019-03-08'),
(4890, '14:15:00', '18:00:00', 1, 201809, '2019-03-12'),
(4891, '10:11:00', '12:43:00', 1, 201706, '2019-03-13'),
(4892, '08:49:00', '12:12:00', 1, 201420, '2019-03-07'),
(4893, '09:46:00', '12:06:00', 1, 201420, '2019-03-11'),
(4894, '14:28:00', '18:00:00', 1, 201706, '2019-03-11'),
(4895, '08:20:00', '12:14:00', 1, 201706, '2019-03-14'),
(4896, '16:00:00', '17:34:00', 1, 201602, '2019-03-14'),
(4897, '08:36:00', '12:13:00', 1, 201420, '2019-03-15'),
(4898, '15:00:00', '17:49:00', 1, 201706, '2019-03-18'),
(4899, '08:46:00', '12:47:00', 1, 201420, '2019-03-18'),
(4900, '12:31:00', '18:39:00', 1, 201406, '2019-02-13'),
(4901, '08:35:00', '12:00:00', 1, 201812, '2019-03-14'),
(4902, '08:50:00', '12:00:00', 1, 201411, '2019-03-15'),
(4903, '08:50:00', '12:00:00', 1, 201812, '2019-03-18'),
(4904, '14:00:00', '18:00:00', 1, 201418, '2019-03-14'),
(4905, '14:00:00', '18:00:00', 1, 201418, '2019-03-15'),
(4906, '07:00:00', '17:00:00', 1, 201418, '2019-03-19'),
(4907, '11:00:00', '12:30:00', 1, 201427, '2019-03-20'),
(4908, '13:35:00', '17:00:00', 1, 201428, '2019-03-21'),
(4909, '07:00:00', '17:00:00', 1, 201418, '2019-03-22'),
(4910, '08:40:00', '12:00:00', 1, 201812, '2019-03-21'),
(4911, '08:30:00', '12:00:00', 1, 201812, '2019-03-25'),
(4912, '06:50:00', '17:00:00', 1, 201418, '2019-03-26'),
(4913, '14:00:00', '17:20:00', 1, 201433, '2019-03-27'),
(4914, '11:00:00', '11:30:00', 2, 201411, '2019-03-28'),
(4915, '07:00:00', '17:00:00', 1, 201418, '2019-03-29'),
(4916, '08:40:00', '12:00:00', 1, 201812, '2019-04-01'),
(4917, '08:35:00', '10:30:00', 1, 201812, '2019-03-28'),
(4951, '14:10:00', '17:20:00', 1, 201402, '2019-03-22'),
(4952, '14:20:00', '17:40:00', 1, 201402, '2019-03-25'),
(4953, '14:15:00', '17:35:00', 1, 201402, '2019-03-26'),
(4954, '14:00:00', '17:15:00', 1, 201402, '2019-03-29'),
(4955, '13:20:00', '14:25:00', 1, 201806, '2019-03-28'),
(4956, '14:50:00', '15:40:00', 1, 201805, '2019-03-28'),
(4957, '09:00:00', '12:40:00', 1, 201402, '2019-03-01'),
(4958, '15:00:00', '18:30:00', 1, 201402, '2019-03-06'),
(4959, '14:00:00', '18:00:00', 1, 201402, '2019-03-04'),
(4960, '14:00:00', '18:00:00', 1, 201402, '2019-03-08'),
(4961, '14:00:00', '18:00:00', 1, 201402, '2019-03-11'),
(4962, '14:00:00', '18:00:00', 1, 201402, '2019-03-18'),
(4963, '09:05:00', '11:50:00', 1, 201804, '2019-03-28'),
(4964, '09:00:00', '10:00:00', 1, 201804, '2019-03-07'),
(4965, '14:00:00', '18:30:00', 1, 201804, '2019-03-14'),
(4966, '13:55:00', '18:00:00', 1, 201402, '2019-04-01'),
(5051, '12:20:00', '18:21:00', 1, 201406, '2019-02-20'),
(5052, '15:21:00', '17:28:00', 2, 201406, '2019-03-15'),
(5054, '14:30:00', '17:45:00', 1, 201402, '2019-03-19'),
(5055, '09:15:00', '12:11:00', 1, 201602, '2019-03-19'),
(5056, '14:22:00', '17:44:00', 1, 201809, '2019-03-19'),
(5057, '15:35:00', '17:33:00', 2, 201420, '2019-03-20'),
(5058, '14:02:00', '17:33:00', 1, 201706, '2019-03-25'),
(5059, '14:47:00', '17:10:00', 1, 201602, '2019-03-21'),
(5060, '08:47:00', '12:10:00', 1, 201706, '2019-03-22'),
(5061, '09:30:00', '12:08:00', 1, 201420, '2019-03-21'),
(5062, '08:35:00', '12:05:00', 1, 201420, '2019-03-25'),
(5063, '14:06:00', '17:54:00', 1, 201809, '2019-03-26'),
(5064, '08:46:00', '12:20:00', 1, 201420, '2019-03-28'),
(5065, '14:40:00', '17:29:00', 1, 201602, '2019-03-28'),
(5066, '08:39:00', '12:34:00', 1, 201706, '2019-03-29'),
(5067, '08:44:00', '12:26:00', 1, 201420, '2019-04-01'),
(5068, '14:40:00', '17:33:00', 1, 201706, '2019-04-01'),
(5069, '14:35:00', '15:43:00', 2, 201706, '2019-04-02'),
(5070, '16:10:00', '16:47:00', 2, 201602, '2019-04-02'),
(49001, '09:20:00', '13:34:00', 2, 201406, '2019-02-13'),
(50511, '09:32:00', '16:20:00', 2, 201406, '2019-02-20');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `uid` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(35) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `id_acesso` int(11) NOT NULL,
  `criacao` datetime NOT NULL,
  `modificacao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`uid`, `nome`, `email`, `username`, `senha`, `id_acesso`, `criacao`, `modificacao`) VALUES
(31, 'Administrador', 'admin@mf.com', 'admin', '8f6bcfbf75692086619d45f79be3ed72', 1, '2018-09-15 00:00:00', '2018-10-23 14:40:46'),
(33, 'Fabiano Sabha', 'fabiano@mfinformatica.com', 'fsabha', '8f6bcfbf75692086619d45f79be3ed72', 1, '2018-09-12 15:08:36', '2018-10-24 01:22:31'),
(35, 'TainÃ¡ Moura de Oliveira', 'financeiro@mfinformatica.com', 'financeiro', '46b2644cbdf489fac0e2d192212d206d', 2, '2018-09-17 22:54:13', '2018-10-23 15:47:24'),
(36, 'Paola Motta', 'paola@mfinformatica.com', 'comercial', '202cb962ac59075b964b07152d234b70', 4, '2018-09-18 00:52:21', NULL),
(37, 'Antonio Gambogi', 'antonio@mfinformatica.com', 'antonio', '449977705b5208d07a4ad68da3ff6ac5', 3, '2018-10-18 12:21:50', NULL),
(38, 'Lucas GonÃ§alves', 'lucas@mfinformatica.com', 'lucas', 'b24331b1a138cde62aa1f679164fc62f', 3, '2018-10-18 14:33:45', '2018-10-18 14:34:36'),
(39, 'Thiago Walczak', 'thiago@mfinformatica.com', 'thiago', 'e10adc3949ba59abbe56e057f20f883e', 3, '2019-03-11 10:36:12', NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `chamadospormes`
--
ALTER TABLE `chamadospormes`
  ADD PRIMARY KEY (`ano`),
  ADD UNIQUE KEY `ano_2` (`ano`),
  ADD KEY `ano` (`ano`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`uid_cliente`),
  ADD UNIQUE KEY `uid_cliente` (`uid_cliente`);

--
-- Índices de tabela `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`uid_contrato`),
  ADD UNIQUE KEY `uid_contrato` (`uid_contrato`);

--
-- Índices de tabela `fechamento`
--
ALTER TABLE `fechamento`
  ADD PRIMARY KEY (`indice`);

--
-- Índices de tabela `propostas`
--
ALTER TABLE `propostas`
  ADD PRIMARY KEY (`uid_proposta`),
  ADD UNIQUE KEY `uid_proposta` (`uid_proposta`);

--
-- Índices de tabela `rat`
--
ALTER TABLE `rat`
  ADD UNIQUE KEY `ratnumero` (`ratnumero`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `uid_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de tabela `contratos`
--
ALTER TABLE `contratos`
  MODIFY `uid_contrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de tabela `fechamento`
--
ALTER TABLE `fechamento`
  MODIFY `indice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `propostas`
--
ALTER TABLE `propostas`
  MODIFY `uid_proposta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
