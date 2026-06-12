-- ===========================================================================
-- GrowthCapital — database schema
-- MySQL 8.0+
--
-- Import locally:
--   mysql -u root -p < database/schema.sql
-- ===========================================================================

CREATE DATABASE IF NOT EXISTS `growthcapital`
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE `growthcapital`;

-- ---------------------------------------------------------------------------
-- Users / clients (login + register system)
-- Auth logic to be implemented later; this table backs that work.
-- ---------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `users` (
    `id`            BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `first_name`    VARCHAR(80)  NOT NULL,
    `last_name`     VARCHAR(80)  NOT NULL,
    `email`         VARCHAR(190) NOT NULL,
    `phone`         VARCHAR(40)  DEFAULT NULL,
    `country`       VARCHAR(80)  DEFAULT NULL,
    `account_type`  ENUM('lite','pro','vip','raw') NOT NULL DEFAULT 'lite',
    `password_hash` VARCHAR(255) NOT NULL,
    `status`        ENUM('pending','active','suspended') NOT NULL DEFAULT 'pending',
    `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
    `created_at`    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at`    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `uq_users_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ---------------------------------------------------------------------------
-- Contact form submissions
-- ---------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `contact_messages` (
    `id`         BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name`       VARCHAR(120) NOT NULL,
    `email`      VARCHAR(190) NOT NULL,
    `subject`    VARCHAR(200) DEFAULT NULL,
    `message`    TEXT NOT NULL,
    `ip_address` VARCHAR(45) DEFAULT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `idx_contact_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
