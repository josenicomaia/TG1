CREATE TABLE `categories` (
    `id` INT AUTO_INCREMENT,
    `parent_id` INT,
    `order` INT NOT NULL,
    `operation` CHAR(1) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `deleted_at` DATE,

    CONSTRAINT categories_pk PRIMARY KEY (`id`),
    CONSTRAINT categories_parent_id_fk FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`)
) ENGINE = InnoDB, AUTO_INCREMENT = 10000;

INSERT INTO `categories` (             `id`, `operation`, `order`, `description`) VALUES (    1, '+',  1, 'RECEITA OPERACIONAL BRUTA');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (1, 11, '+',  1, 'Vendas de Produtos');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (1, 12, '+',  2, 'Vendas de Mercadorias');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (1, 13, '+',  3, 'Prestação de Serviços');

INSERT INTO `categories` (             `id`, `operation`, `order`, `description`) VALUES (    2, '-',  2, '(-) DEDUÇÕES DA RECEITA BRUTA');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (2, 21, '+',  1, 'Devoluções de Vendas');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (2, 22, '+',  2, 'Abatimentos');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (2, 23, '+',  3, 'Impostos e Contribuições Incidentes sobre Vendas');

INSERT INTO `categories` (             `id`, `operation`, `order`, `description`) VALUES (    3, '=',  3, '= RECEITA OPERACIONAL LÍQUIDA');

INSERT INTO `categories` (             `id`, `operation`, `order`, `description`) VALUES (    4, '-',  4, '(-) CUSTOS DAS VENDAS');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (4, 41, '+',  1, 'Custo dos Produtos Vendidos');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (4, 42, '+',  2, 'Custo das Mercadorias');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (4, 43, '+',  3, 'Custo dos Serviços Prestados');

INSERT INTO `categories` (             `id`, `operation`, `order`, `description`) VALUES (    5, '=',  5, '= RESULTADO OPERACIONAL BRUTO');

INSERT INTO `categories` (             `id`, `operation`, `order`, `description`) VALUES (    6, '-',  6, '(-) DESPESAS OPERACIONAIS');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (6, 61, '+',  1, 'Despesas Com Vendas');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (6, 62, '+',  2, 'Despesas Administrativas');

INSERT INTO `categories` (             `id`, `operation`, `order`, `description`) VALUES (    7, '-',  7, '(-) DESPESAS FINANCEIRAS LÍQUIDAS');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (7, 71, '+',  1, 'Despesas Financeiras');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (7, 72, '-',  2, '(-) Receitas Financeiras');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (7, 73, '+',  3, 'Variações Monetárias e Cambiais Passivas');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (7, 74, '-',  4, '(-) Variações Monetárias e Cambiais Ativas');

INSERT INTO `categories` (             `id`, `operation`, `order`, `description`) VALUES (    8, '+',  8, 'OUTRAS RECEITAS E DESPESAS');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (8, 81, '+',  1, 'Resultado da Equivalência Patrimonial');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (8, 82, '+',  2, 'Venda de Bens e Direitos do Ativo Não Circulante');
INSERT INTO `categories` (`parent_id`, `id`, `operation`, `order`, `description`) VALUES (8, 83, '-',  3, '(-) Custo da Venda de Bens e Direitos do Ativo Não Circulante');

INSERT INTO `categories` (             `id`, `operation`, `order`, `description`) VALUES (    9, '=',  9, '= RESULTADO OPERACIONAL ANTES DO IMPOSTO DE RENDA E DA CONTRIBUIÇÃO SOCIAL E SOBRE O LUCRO');
INSERT INTO `categories` (             `id`, `operation`, `order`, `description`) VALUES (   10, '-', 10, '(-) Provisão para Imposto de Renda e Contribuição Social Sobre o Lucro');
INSERT INTO `categories` (             `id`, `operation`, `order`, `description`) VALUES (   11, '=', 11, '= LUCRO LÍQUIDO ANTES DAS PARTICIPAÇÕES');
INSERT INTO `categories` (             `id`, `operation`, `order`, `description`) VALUES (   12, '-', 12, '(-) Debêntures, Empregados, Participações de Administradores, Partes Beneficiárias, Fundos de Assistência e Previdência para Empregados');
INSERT INTO `categories` (             `id`, `operation`, `order`, `description`) VALUES (   13, '=', 13, '(=) RESULTADO LÍQUIDO DO EXERCÍCIO');
COMMIT;

CREATE TABLE `reports` (
    `id` INT AUTO_INCREMENT,
    `description` VARCHAR(255) NOT NULL,
    `deleted_at` DATE,

    CONSTRAINT reports_pk PRIMARY KEY (`id`)
) ENGINE = InnoDB, AUTO_INCREMENT = 10000;

INSERT INTO `reports` (`id`, `description`) VALUES (1, 'DRE');

CREATE TABLE `branches` (
    `report_id` INT NOT NULL,
    `category_id` INT NOT NULL,

    CONSTRAINT branches_pk PRIMARY KEY (`report_id`, `category_id`),
    CONSTRAINT branches_category_id_fk FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE = InnoDB;

INSERT INTO `branches` (`report_id`, `category_id`) VALUES (1,  1);
INSERT INTO `branches` (`report_id`, `category_id`) VALUES (1,  2);
INSERT INTO `branches` (`report_id`, `category_id`) VALUES (1,  3);
INSERT INTO `branches` (`report_id`, `category_id`) VALUES (1,  4);
INSERT INTO `branches` (`report_id`, `category_id`) VALUES (1,  5);
INSERT INTO `branches` (`report_id`, `category_id`) VALUES (1,  6);
INSERT INTO `branches` (`report_id`, `category_id`) VALUES (1,  7);
INSERT INTO `branches` (`report_id`, `category_id`) VALUES (1,  8);
INSERT INTO `branches` (`report_id`, `category_id`) VALUES (1,  9);
INSERT INTO `branches` (`report_id`, `category_id`) VALUES (1, 10);
INSERT INTO `branches` (`report_id`, `category_id`) VALUES (1, 11);
INSERT INTO `branches` (`report_id`, `category_id`) VALUES (1, 12);
INSERT INTO `branches` (`report_id`, `category_id`) VALUES (1, 13);
COMMIT;

CREATE TABLE `accounting_entries` (
    `id` INT,
    `category_id` INT NOT NULL,
    `deleted_at` DATE,

    CONSTRAINT accounting_entries_pk PRIMARY KEY (`id`),
    CONSTRAINT accounting_entries_category_id_fk FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE = InnoDB, AUTO_INCREMENT = 10000;
