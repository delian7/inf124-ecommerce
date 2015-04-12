CREATE TABLE `webbook`.`Customers` (
    `customer_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `salutation` VARCHAR(10) NULL,
    `customer_first_name` VARCHAR(24) NOT NULL,
    `customer_middle_initial` VARCHAR(3) NULL,
    `customer_last_name` VARCHAR(24) NOT NULL,
    `email_address` VARCHAR(60) NOT NULL,
    `login_name` VARCHAR(60) NOT NULL,
    `login_password` VARCHAR(20) NOT NULL,
    `phone_number` VARCHAR(20) NOT NULL,
    `address` TEXT NOT NULL,
    `town_city` VARCHAR(40) NOT NULL,
    `county` VARCHAR(40) NOT NULL,
    `country` VARCHAR(40) NOT NULL,
    INDEX (`phone_number`),
    UNIQUE (
        `email_address`,
        `login_name`)
) ENGINE = MyISAM;
