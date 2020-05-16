/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : affg

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 11/05/2020 22:51:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('admin@affg.com', '98a1aad1e89fb0975a2a39403309d085');

-- ----------------------------
-- Table structure for athlete
-- ----------------------------
DROP TABLE IF EXISTS `athlete`;
CREATE TABLE `athlete`  (
  `id` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `firstname` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lastname` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dob` date NULL DEFAULT NULL,
  `birthplace` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `picture` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `approved` bit(1) NULL DEFAULT b'0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of athlete
-- ----------------------------
INSERT INTO `athlete` VALUES ('AFFGP 2011443', 'Athlete', '1', '2020-05-03', 'Barcelona', '2020-05-11_21-52-27_player-1.jpg', b'1');
INSERT INTO `athlete` VALUES ('AFFGP 2014548', 'Athlete', '5', '1980-02-29', 'Manchester', '2020-05-11_22-37-38_player-5.jpg', b'1');
INSERT INTO `athlete` VALUES ('AFFGP 2015553', 'Athlete', '2', '2020-05-05', 'Madrid', '2020-05-11_22-25-35_player-2.jpg', b'1');
INSERT INTO `athlete` VALUES ('AFFGP 2018565', 'Athlete', '4', '1962-02-09', 'Rio Di Janeiro', '2020-05-11_22-34-32_player-4.jpg', b'0');
INSERT INTO `athlete` VALUES ('AFFGP 2019360', 'Athlete', '3', '2020-05-01', 'Rio Di Janeiro', '2020-05-11_22-33-31_player-3.jpg', b'0');

-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events`  (
  `id` char(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `startDate` date NULL DEFAULT NULL,
  `startTime` time(0) NULL DEFAULT NULL,
  `endDate` date NULL DEFAULT NULL,
  `endTime` time(0) NULL DEFAULT NULL,
  `location` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `link` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `website` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `events` VALUES ('5e99941a3f6f9', 'Event 1', '2020-04-05', '14:00:00', '2020-04-07', '16:00:00', 'Barcelona', '', '', '', 'shop-item-1b.jpg');
INSERT INTO `events` VALUES ('5e9994a46dfde', 'Event 2', '2020-04-05', '17:00:00', '2020-04-07', '18:00:00', 'Paris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin elementum lobortis. Vivamus tristique mi non justo tempor, id pellentesque enim lacinia. Vivamus accumsan leo nec dui consectetur.\r<br>\r<br>', '', '', 'shop-item-1c.jpg');
INSERT INTO `events` VALUES ('5e9995582034d', 'Event 3', '2020-04-05', '16:00:00', '2020-04-07', '17:00:00', 'Berlin', '', 'https://www.footgolf-france.fr/', '', 'shop-item-1d.jpg');
INSERT INTO `events` VALUES ('5eac4fb825cef', 'Event On', '2020-05-09', '18:00:00', '2020-05-13', '20:00:00', 'Madrid', '', 'http://skp.spadeems.com', '', 'shop-item-1.jpg');

-- ----------------------------
-- Table structure for gallery
-- ----------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery`  (
  `id` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `occurence` int(2) NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of gallery
-- ----------------------------
INSERT INTO `gallery` VALUES ('5e99941a3futv', 0, 'gallery-2.jpg');
INSERT INTO `gallery` VALUES ('5e99941a3fwet', 1, 'gallery-1.jpg');
INSERT INTO `gallery` VALUES ('5e99941a3hj12', 3, 'gallery-3.jpg');
INSERT INTO `gallery` VALUES ('5e99941a3hr13', 4, 'gallery-4.jpg');
INSERT INTO `gallery` VALUES ('5e99941a3hr14', 6, 'gallery-5.jpg');
INSERT INTO `gallery` VALUES ('5e99941a3hr15', 5, 'gallery-6.jpg');
INSERT INTO `gallery` VALUES ('5e99941a3hr16', 7, 'gallery-7.jpg');
INSERT INTO `gallery` VALUES ('5e99941a3hr17', 8, 'gallery-8.jpg');
INSERT INTO `gallery` VALUES ('5eb9542e71411', 9, '2020_05_11_19_03_34_gallery-5.jpg');
INSERT INTO `gallery` VALUES ('5eb9542e71bac', 10, '2020_05_11_19_03_34_gallery-6.jpg');
INSERT INTO `gallery` VALUES ('5eb96db1c0c19', 11, '2020_05_11_20_52_25_gallery-5.jpg');
INSERT INTO `gallery` VALUES ('5eb96db1c238e', 12, '2020_05_11_20_52_25_gallery-6.jpg');

SET FOREIGN_KEY_CHECKS = 1;
