#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

DROP DATABASE IF EXISTS permafarmer;
CREATE DATABASE permafarmer;
USE permafarmer; 
q
#------------------------------------------------------------
# Table: user
#------------------------------------------------------------

CREATE TABLE user(
        id        Int  Auto_increment  NOT NULL ,
        id_plan   Int NOT NULL ,
        firstname Varchar (50) NOT NULL ,
        lastname  Varchar (50) NOT NULL ,
        email     Varchar (50) NOT NULL ,
        password  Varchar (250) NOT NULL ,
        is_admin  Bool NOT NULL
	,CONSTRAINT user_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: product
#------------------------------------------------------------

CREATE TABLE product(
        id_product Int  Auto_increment  NOT NULL ,
        name       Varchar (25) NOT NULL ,
        weight     Float NOT NULL ,
        stock      Int NOT NULL
	,CONSTRAINT product_PK PRIMARY KEY (id_product)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: plan
#------------------------------------------------------------

CREATE TABLE plan(
        id_plan Int  Auto_increment  NOT NULL ,
        name    Varchar (50) NOT NULL ,
        weight  Float NOT NULL ,
        price   Float NOT NULL
	,CONSTRAINT plan_PK PRIMARY KEY (id_plan)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: cart
#------------------------------------------------------------

CREATE TABLE cart(
        id_cart    Int  Auto_increment  NOT NULL ,
        order_date Date NOT NULL ,
        id_client  Int NOT NULL ,
        payment    Bool NOT NULL ,
        delivery   Bool NOT NULL ,
        prepared   Bool NOT NULL ,
        id         Int NOT NULL ,
        id_plan    Int NOT NULL
	,CONSTRAINT cart_PK PRIMARY KEY (id_cart)
	
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contains_product
#------------------------------------------------------------

CREATE TABLE contains_product(
        id_plan        Int NOT NULL ,
        id_product     Int NOT NULL ,
        product_amount Int NOT NULL
	,CONSTRAINT contains_product_PK PRIMARY KEY (id_plan,id_product)
	
)ENGINE=InnoDB;

ALTER TABLE user ADD CONSTRAINT FK_plan_id FOREIGN KEY(id_plan) REFERENCES plan(id_plan);
ALTER TABLE cart ADD CONSTRAINT FK_cart_user_id FOREIGN KEY (id_client) REFERENCES user(id);
ALTER TABLE cart ADD CONSTRAINT FK_cart_plan_id FOREIGN KEY ( id_plan ) REFERENCES plan(id_plan);
ALTER TABLE 
	
	,CONSTRAINT contains_product_plan_FK FOREIGN KEY (id_plan) REFERENCES plan(id_plan)
	,CONSTRAINT contains_product_product0_FK FOREIGN KEY (id_product) REFERENCES product(id_product)