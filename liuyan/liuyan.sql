/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50540
Source Host           : 127.0.0.1:3306
Source Database       : ten

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-03-24 11:17:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for liuyan
-- ----------------------------
DROP TABLE IF EXISTS `liuyan`;
CREATE TABLE `liuyan` (
  `liu_id` int(11) NOT NULL AUTO_INCREMENT,
  `liu_name` varchar(50) DEFAULT NULL,
  `liu_content` varchar(50) DEFAULT NULL,
  `liu_time` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`liu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of liuyan
-- ----------------------------
INSERT INTO `liuyan` VALUES ('1', '小王', '啪啪啪婆婆婆婆婆婆婆婆', '2016-03-24 00:34:34');
INSERT INTO `liuyan` VALUES ('7', '越关心', '范德萨儿童', '2016-03-24 01:39:34');
INSERT INTO `liuyan` VALUES ('6', '小王', '啪啪啪婆婆婆婆婆婆婆婆', '2016-03-24 00:34:34');
INSERT INTO `liuyan` VALUES ('4', '的淡淡的淡淡的淡淡的', '的得到的的得到的的地地道道的大大大滴滴答答都22', '2016-03-24 01:43:02');
INSERT INTO `liuyan` VALUES ('3', '越关心', '范德萨儿童', '2016-03-24 01:39:34');
INSERT INTO `liuyan` VALUES ('2', '的淡淡的淡淡的淡淡的', '的得到的的得到的的地地道道的大大大滴滴答答都22', '2016-03-24 01:43:02');
INSERT INTO `liuyan` VALUES ('5', '小王', '啪啪啪婆婆婆婆婆婆婆婆', '2016-03-24 00:34:34');
INSERT INTO `liuyan` VALUES ('8', '越关心', '范德萨儿童', '2016-03-24 01:39:34');
INSERT INTO `liuyan` VALUES ('89', '的淡淡的淡淡的淡淡的', '的得到的的得到的的地地道道的大大大滴滴答答都22', '2016-03-24 01:43:02');
INSERT INTO `liuyan` VALUES ('10', '小王', '啪啪啪婆婆婆婆婆婆婆婆', '2016-03-24 00:34:34');
INSERT INTO `liuyan` VALUES ('23', '越关心', '范德萨儿童', '2016-03-24 01:39:34');
