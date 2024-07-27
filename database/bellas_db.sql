DROP DATABASE IF EXISTS `bellas_db`;
CREATE DATABASE IF NOT EXISTS `bellas_db`;
USE `bellas_db`;

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(20),
  `firstname` varchar(70),
  `othername` varchar(100),
  `gender` varchar(10),
  `user_type` varchar(150),
  `department` varchar(50),
  `telephone` varchar(20),
  `block` varchar(20),
  `email` varchar(50),
  -- `ContractType` varchar(50),
  `account_expiry` date,
  `expiry` varchar(20) DEFAULT 'NO',
  `username` varchar(50),
  `password` varchar(60),
  `accessLevel` varchar(50),
  `added_by` varchar(20),
  `added_date` datetime DEFAULT current_timestamp(),
  `updatedDate` datetime,
  `updated_by` varchar(60),
  `updated_notes` varchar(100),
  `status` varchar(10) DEFAULT 'Active',
  `archive` varchar(10) DEFAULT 'No',
  `archiveDate` datetime,
  PRIMARY KEY (`id`)
)ENGINE=InnoDB;


CREATE TABLE IF NOT EXISTS `contacts` (
  `id` varchar(20),
  `name` varchar(200),
  `email` varchar(100),
  `telephone` varchar(20),
  `subject` varchar(150),
  `message` varchar(50),
  `added_by` varchar(100),
  `added_date` datetime DEFAULT current_timestamp(),
  `updatedDate` datetime,
  `updated_by` varchar(60),
  `updated_notes` varchar(100),
  `status` varchar(10) DEFAULT 'Active',
  `archive` varchar(10) DEFAULT 'No',
  `archiveDate` datetime,
  PRIMARY KEY (`id`)
)ENGINE=InnoDB;


CREATE TABLE IF NOT EXISTS `system` (
  `system_id` varchar(20),
  `company_name` varchar(200),
  `email` varchar(100),
  `telephone` varchar(20),
  `api` varchar(10) DEFAULT 'Yes',
  `email_alert` varchar(10) DEFAULT 'No',
  `sms_alert` varchar(10) DEFAULT 'No',
  `slogan` varchar(150),
  `added_by` varchar(100),
  `added_date` datetime DEFAULT current_timestamp(),
  `updatedDate` datetime,
  `updated_by` varchar(60),
  `updated_notes` varchar(100),
  `status` varchar(10) DEFAULT 'Active',
  `archive` varchar(10) DEFAULT 'No',
  `archiveDate` datetime,
  PRIMARY KEY (`system_id`)
)ENGINE=InnoDB;


CREATE TABLE IF NOT EXISTS `news_letter` (
  `news_id` varchar(20),
  `email` varchar(100),
  `email_subscription` varchar(10) DEFAULT 'Yes',
  `added_by` varchar(100),
  `added_date` datetime DEFAULT current_timestamp(),
  `updatedDate` datetime,
  `updated_by` varchar(60),
  `updated_notes` varchar(100),
  `status` varchar(10) DEFAULT 'Active',
  `archive` varchar(10) DEFAULT 'No',
  `archiveDate` datetime,
  PRIMARY KEY (`news_id`)
)ENGINE=InnoDB;

