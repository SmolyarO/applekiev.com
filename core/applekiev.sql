CREATE DATABASE IF NOT EXISTS `applekiev` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE applekiev;

CREATE TABLE `category` (
cat_id INT (4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
cat_parent_id INT (4) NOT NULL DEFAULT '0',
cat_template VARCHAR (50),
cat_list_template VARCHAR (50),
cat_sort_order INT (3),
cat_add_date DATETIME DEFAULT NULL,
cat_modif_date DATETIME DEFAULT NULL,
cat_url VARCHAR (255),
cat_menu TINYINT (1) NOT NULL DEFAULT '0',
cat_prod_count INT (4) DEFAULT NULL
) engine=innodb DEFAULT CHARSET=utf8;

CREATE TABLE `category_description` (
cat_d_id INT (4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
cat_d_name VARCHAR (50) DEFAULT NULL,
cat_d_title VARCHAR (255) DEFAULT NULL,
cat_d_desc TEXT NOT NULL,
cat_d_gallery VARCHAR (255),
cat_d_images VARCHAR (255),
cat_d_footer_text TEXT,
cat_d_tags VARCHAR (255) NOT NULL,
cat_d_meta_desc VARCHAR (255) NOT NULL,
cat_d_meta_keywords VARCHAR (255) NOT NULL,
cat_d_viewed INT (4) DEFAULT '0'
) engine=innodb DEFAULT CHARSET=utf8;

CREATE TABLE `features` (
feat_id INT (4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
feat_name VARCHAR (50) DEFAULT NULL,
feat_title VARCHAR (255) DEFAULT NULL,
feat_desc TEXT NOT NULL,
feat_gallery VARCHAR (255),
feat_images TEXT,
feat_tags VARCHAR (255) DEFAULT NULL,
feat_meta_desc VARCHAR (255),
feat_meta_keywords VARCHAR (255),
feat_viewed INT (4) DEFAULT '0'
) engine=innodb DEFAULT CHARSET=utf8;

CREATE TABLE `product` (
prod_id INT (4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
prod_template VARCHAR (50),
prod_sort_order INT (3),
prod_add_date DATETIME DEFAULT NULL,
prod_modif_date DATETIME DEFAULT NULL,
prod_url VARCHAR (255),
prod_cat_id INT (4) DEFAULT NULL,
prod_feat_id INT (4) DEFAULT NULL,
CONSTRAINT fk_product_category FOREIGN KEY (prod_cat_id) REFERENCES category (cat_id) ON DELETE RESTRICT,
CONSTRAINT fk_product_features FOREIGN KEY (prod_feat_id) REFERENCES features (feat_id) ON DELETE SET NULL
) engine=innodb DEFAULT CHARSET=utf8;

CREATE TABLE `product_description` (
prod_d_id INT (4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
prod_d_name VARCHAR (50) DEFAULT NULL,
prod_d_title VARCHAR (255) DEFAULT NULL,
prod_d_desc TEXT NOT NULL,
prod_d_short_desc VARCHAR (255),
prod_d_gallery VARCHAR (255),
prod_d_images TEXT,
prod_d_price DECIMAL(7,2) NOT NULL DEFAULT 0,
prod_d_footer_text TEXT,
prod_d_tags VARCHAR (255) DEFAULT NULL,
prod_d_meta_desc VARCHAR (255),
prod_d_meta_keywords VARCHAR (255),
prod_d_viewed INT (4) DEFAULT '0'
) engine=innodb DEFAULT CHARSET=utf8;


CREATE TABLE `currencies` (
curr_id INT (4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
curr_name VARCHAR (50) NOT NULL,
curr_code VARCHAR (50) NOT NULL,
curr_symbol_right VARCHAR (50) DEFAULT NULL,
curr_symbol_left VARCHAR (50) DEFAULT NULL,
curr_decimal_point CHAR(1) DEFAULT ',',
curr_thousands_point CHAR(1) DEFAULT '.',
curr_decimal_places CHAR(1) DEFAULT '2',
curr_value FLOAT(13,8) DEFAULT NULL,
curr_last_updated DATETIME DEFAULT NULL
) engine=innodb DEFAULT CHARSET=utf8;

CREATE TABLE `users` (
user_id INT (4) NOT NULL AUTO_INCREMENT,
user_displayedName VARCHAR (50) NOT NULL,
user_firstName VARCHAR (50) NOT NULL,
user_lastName VARCHAR (50) NOT NULL,
user_mail VARCHAR (50) NOT NULL,
user_salt VARCHAR (20) NOT NULL,
user_pass VARCHAR (50) NOT NULL,
user_isAdmin TINYINT(1) NOT NULL,
PRIMARY KEY (user_id),
UNIQUE KEY (user_mail)
) engine=innodb DEFAULT CHARSET=utf8;


CREATE TRIGGER product_ins AFTER INSERT ON product FOR EACH ROW
UPDATE category SET cat_prod_count = cat_prod_count + 1 WHERE prod_cat_id = NEW.prod_cat_id;

CREATE TRIGGER product_del AFTER DELETE ON product FOR EACH ROW
UPDATE category SET cat_prod_count = cat_prod_count - 1 WHERE prod_cat_id = OLD.prod_cat_id;

DELIMITER //
CREATE TRIGGER product_upd AFTER UPDATE ON product FOR EACH ROW
BEGIN
UPDATE category SET cat_prod_count = cat_prod_count + 1 WHERE prod_cat_id = NEW.prod_cat_id;
UPDATE category SET cat_prod_count = cat_prod_count - 1 WHERE prod_cat_id = OLD.prod_cat_id;
END//
DELIMITER ;

