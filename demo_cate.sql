/*
 Navicat Premium Data Transfer

 Source Server         : lyorcw2017.mysql.rds.aliyuncs.com
 Source Server Type    : MySQL
 Source Server Version : 50718
 Source Host           : lyorcw2017.mysql.rds.aliyuncs.com:3306
 Source Schema         : model

 Target Server Type    : MySQL
 Target Server Version : 50718
 File Encoding         : 65001

 Date: 19/02/2019 14:29:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for demo_cate
-- ----------------------------
DROP TABLE IF EXISTS `demo_cate`;
CREATE TABLE `demo_cate`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `catename` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '分类名称',
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '栏目顺序',
  `pid` int(11) NOT NULL COMMENT '父ID',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of demo_cate
-- ----------------------------
INSERT INTO `demo_cate` VALUES (1, '中国', '1', 0);
INSERT INTO `demo_cate` VALUES (2, '美国', '1', 0);
INSERT INTO `demo_cate` VALUES (5, '山东', '1', 1);
INSERT INTO `demo_cate` VALUES (7, '江西', '', 1);
INSERT INTO `demo_cate` VALUES (11, '深圳', '', 1);
INSERT INTO `demo_cate` VALUES (18, '赣州', '', 7);

SET FOREIGN_KEY_CHECKS = 1;
