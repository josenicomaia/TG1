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

CREATE TABLE `accounting_entries` (
    `id` INT,
    `category_id` INT NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `cost` NUMERIC(2, 4) NOT NULL,
    `deleted_at` DATE,

    CONSTRAINT accounting_entries_pk PRIMARY KEY (`id`),
    CONSTRAINT accounting_entries_category_id_fk FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE = InnoDB, AUTO_INCREMENT = 10000;
