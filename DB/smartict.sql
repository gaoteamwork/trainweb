/*
Navicat MySQL Data Transfer

Source Server         : SmartICT
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : smartict

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2015-06-16 15:07:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for activity
-- ----------------------------
DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity` (
  `A_id` int(11) NOT NULL auto_increment,
  `A_title` varchar(255) default '',
  `A_detail` varchar(500) default NULL,
  `A_pic` varchar(255) default NULL,
  PRIMARY KEY  (`A_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of activity
-- ----------------------------
INSERT INTO `activity` VALUES ('1', 'ทวาย', 'Survey', '');
INSERT INTO `activity` VALUES ('2', 'ทวาย', 'Setup', null);
INSERT INTO `activity` VALUES ('3', '', null, null);

-- ----------------------------
-- Table structure for activity_pic
-- ----------------------------
DROP TABLE IF EXISTS `activity_pic`;
CREATE TABLE `activity_pic` (
  `A_id` int(11) NOT NULL,
  `A_main_pic` varchar(255) default NULL,
  `A_pic_path` varchar(255) default NULL,
  PRIMARY KEY  (`A_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of activity_pic
-- ----------------------------
INSERT INTO `activity_pic` VALUES ('1', '', '');

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `E_username` varchar(255) NOT NULL,
  `E_password` varchar(255) default NULL,
  PRIMARY KEY  (`E_username`)
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
  `Pre_pic` varchar(255) default NULL,
  `pre_pic_path` varchar(255) default NULL,
  `Pre_pic_caption` varchar(255) default NULL
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
  `P_id` int(11) NOT NULL default '0',
  `P_name` varchar(300) default NULL,
  `P_type` varchar(255) default NULL,
  `P_pic` varchar(255) default NULL,
  `P_feature` varchar(255) default NULL,
  PRIMARY KEY  (`P_id`)
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
  `P_feature` varchar(255) default NULL,
  PRIMARY KEY  (`P_id`)
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
  `pic_path` varchar(255) default NULL,
  PRIMARY KEY  (`P_id`)
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
  `P_type` varchar(255) default NULL,
  `P_name` varchar(255) default NULL
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
