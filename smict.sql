/*
Navicat MySQL Data Transfer

Source Server         : smdb
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : smict

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-06-18 14:38:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for activity
-- ----------------------------
DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity` (
  `ID_AC` int(10) NOT NULL,
  `NAME_MANI_AC` varchar(255) DEFAULT NULL,
  `AC_DETIAL` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_AC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of activity
-- ----------------------------
INSERT INTO `activity` VALUES ('1', 'โครงการเสนาดิเวลลอปเม้นท์', null);
INSERT INTO `activity` VALUES ('2', 'โครงการทวาย', null);
INSERT INTO `activity` VALUES ('3', 'โครงการอิตาเลียนไทย', null);
INSERT INTO `activity` VALUES ('4', 'โครงการกล้องวงจรปิดเสนา', null);
INSERT INTO `activity` VALUES ('5', 'โครงการศุภาลัยป่าสักรีสอร์ท', null);
INSERT INTO `activity` VALUES ('6', 'โครงการยูนิคเอ็นจิเนียริ่ง', null);
INSERT INTO `activity` VALUES ('7', 'โครงการอิตาเลียนไทยวิหารแดง', null);

-- ----------------------------
-- Table structure for activitypic
-- ----------------------------
DROP TABLE IF EXISTS `activitypic`;
CREATE TABLE `activitypic` (
  `ID_AC` int(10) NOT NULL,
  `NAME_PIC_AC` varchar(255) DEFAULT NULL,
  `AC_PIC_PATH` varchar(255) NOT NULL,
  KEY `ID_AC` (`ID_AC`),
  CONSTRAINT `ID_AC` FOREIGN KEY (`ID_AC`) REFERENCES `activity` (`ID_AC`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of activitypic
-- ----------------------------
INSERT INTO `activitypic` VALUES ('1', 'เสนาดิเวลลอปเม้นท์', '');
INSERT INTO `activitypic` VALUES ('1', 'เสนาดิเวลลอปเม้นท์', '');
INSERT INTO `activitypic` VALUES ('1', 'เสนาดิเวลลอปเม้นท์', '');
INSERT INTO `activitypic` VALUES ('1', 'เสนาดิเวลลอปเม้นท์', '');
INSERT INTO `activitypic` VALUES ('1', 'เสนาดิเวลลอปเม้นท์', '');
INSERT INTO `activitypic` VALUES ('1', 'เสนาดิเวลลอปเม้นท์', '');

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `E_username` varchar(255) NOT NULL,
  `E_password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`E_username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO `employee` VALUES ('admin', '1234');

-- ----------------------------
-- Table structure for presentindex
-- ----------------------------
DROP TABLE IF EXISTS `presentindex`;
CREATE TABLE `presentindex` (
  `Pre_pic` varchar(255) DEFAULT NULL,
  `pre_pic_path` varchar(255) DEFAULT NULL,
  `Pre_pic_caption` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of presentindex
-- ----------------------------
INSERT INTO `presentindex` VALUES ('11', null, null);

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `P_id` int(11) NOT NULL DEFAULT '0',
  `P_name` varchar(300) DEFAULT NULL,
  `P_type` varchar(255) DEFAULT NULL,
  `P_pic` varchar(255) DEFAULT NULL,
  `P_feature` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`P_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', 'Hub', '1', null, 'lan');

-- ----------------------------
-- Table structure for product_feature
-- ----------------------------
DROP TABLE IF EXISTS `product_feature`;
CREATE TABLE `product_feature` (
  `P_id` int(11) NOT NULL,
  `P_feature` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`P_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_feature
-- ----------------------------
INSERT INTO `product_feature` VALUES ('1', '1');

-- ----------------------------
-- Table structure for product_pic
-- ----------------------------
DROP TABLE IF EXISTS `product_pic`;
CREATE TABLE `product_pic` (
  `P_id` int(11) NOT NULL,
  `pic_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`P_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_pic
-- ----------------------------
INSERT INTO `product_pic` VALUES ('1', null);

-- ----------------------------
-- Table structure for product_type
-- ----------------------------
DROP TABLE IF EXISTS `product_type`;
CREATE TABLE `product_type` (
  `P_type` varchar(255) DEFAULT NULL,
  `P_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_type
-- ----------------------------

-- ----------------------------
-- View structure for v_product
-- ----------------------------
DROP VIEW IF EXISTS `v_product`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost`  VIEW `v_product` AS SELECT
product.P_id,
product.P_name,
product.P_type,
product.P_pic,
product.P_feature
FROM
product ;
