/*
 Navicat Premium Data Transfer

 Source Server         : MySQLOS
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3307
 Source Schema         : dbmingone

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 16/04/2023 00:54:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `admin_ID` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`admin_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admin', 'admin');

-- ----------------------------
-- Table structure for clinic
-- ----------------------------
DROP TABLE IF EXISTS `clinic`;
CREATE TABLE `clinic`  (
  `tips_ID` int(20) NOT NULL AUTO_INCREMENT,
  `tips_post` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`tips_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of clinic
-- ----------------------------
INSERT INTO `clinic` VALUES (1, 'За котом Борисом нужен уход');
INSERT INTO `clinic` VALUES (2, 'Пёс Григорий сегодня себя хорошо чуствовал');

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer`  (
  `first_name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_no` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('James', 'Bond', '210904', 'bond@gmail.com', 'bond', '0000');
INSERT INTO `customer` VALUES ('Edmond', 'Du', '98858912', 'ed@gmail.com', 'ed', 'ed123');
INSERT INTO `customer` VALUES ('Jade', 'Tub', '8858921', 'jade@gmail.com', 'jade123', 'jade321');
INSERT INTO `customer` VALUES ('James', 'Doe', '9094810', 'james@gmail.com', 'James', '7777');
INSERT INTO `customer` VALUES ('John', 'Doe', '999588929', 'john@gmail.com', 'john', 'doe321');
INSERT INTO `customer` VALUES ('Mary', 'Moe', '99419950', 'mary@gmail.com', 'mary', 'moe321');
INSERT INTO `customer` VALUES ('Анастасия', 'Ульянченко', '9915401077', 'ulnchk777@gmail.com', 'nastya', 'nastyanastya');

-- ----------------------------
-- Table structure for home
-- ----------------------------
DROP TABLE IF EXISTS `home`;
CREATE TABLE `home`  (
  `post_ID` int(10) NOT NULL AUTO_INCREMENT,
  `post_description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`post_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of home
-- ----------------------------
INSERT INTO `home` VALUES (1, 'Система управления ветеринарной клиникой и зоомагазином - это магазин\r\nкоторые предлагают разных домашних животных, и это розничный бизнес\r\nпродает животных населению. Интернет-зоомагазин – это надежный\r\nисточник домашнего животного, их потребности, такие как корм для собак, игрушки и другие\r\nживотные вещи, помимо этого медицинская помощь также\r\nв нашей онлайн ветеринарной клинике и зоомагазине.');
INSERT INTO `home` VALUES (2, 'Согласно Эмори Крайдеру [2009] Идея экономии\r\nвремя от шоппинга хорошее. Потому что многие\r\nспециализированные корма для домашних животных и товары для животных\r\nмагазины, покупка для ваших питомцев означает дополнительную\r\nпутешествие. Альтернативой является покупка обычной еды в\r\nваш продуктовый магазин и доступная коммерческая еда\r\nможет не соответствовать потребностям вашего питомца. \r\nповышается удобство заказа товаров для животных онлайн\r\nпо этой причине.\r\nВ другой статье говорилось, что если они покупают по\r\nинтернет-зоомагазин, как упоминалось ранее, онлайн\r\nпокупатели, стремящиеся приобрести товары для животных, делают сумасшедшие продажи\r\nне должны покидать свое место жительства. Покупка зоотоваров\r\nонлайн - это все о комфорте. Владельцы могут получить все\r\nмного необходимых зоотоваров все в течение нескольких минут.\r\nЭтот выбор действительно удобен для владельцев или семей\r\nкоторые не могли иметь достаточно времени, чтобы регулярно\r\nпосетить зоомагазин. Джексон Джонс [2016]');
INSERT INTO `home` VALUES (3, 'Согласно Эмори Крайдеру [2009] Идея экономии времени\r\nот шоппинга хороший. Потому что многие специализированные домашние животные\r\nпродукты питания и товары для животных поступают из специализированных магазинов, делающих\r\nпокупка ваших питомцев означает дополнительную поездку. \r\nАльтернативой является покупка обычной еды в вашем продуктовом магазине.\r\nмагазине, а доступные коммерческие продукты питания могут не соответствовать\r\nпотребности вашего питомца адекватно.');
INSERT INTO `home` VALUES (4, 'В другой статье говорилось, что если они покупают по\r\nинтернет-зоомагазин, как и ранее упомянутые интернет-покупатели\r\nстремясь получить товары для животных сумасшедшие продажи не должны\r\nпокинуть свое местожительство. Покупка товаров для животных в Интернете – это все\r\nо комфорте. Владельцы могут получить все необходимое\r\nзоотовары все в течение нескольких минут. Этот выбор\r\nдействительно удобно для владельцев или семей, которые не могли\r\nиметь доступ к достаточному количеству времени, чтобы регулярно посещать зоомагазин.\r\nДжексон Джонс [2016]');

-- ----------------------------
-- Table structure for pet
-- ----------------------------
DROP TABLE IF EXISTS `pet`;
CREATE TABLE `pet`  (
  `pet_ID` int(100) NOT NULL AUTO_INCREMENT,
  `pet_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pet_description` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pet_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pet_price` int(20) NOT NULL,
  PRIMARY KEY (`pet_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pet
-- ----------------------------
INSERT INTO `pet` VALUES (1, 'Разор', 'Овчарка', 'Собака', 299);
INSERT INTO `pet` VALUES (2, 'Григорий', 'Борзая', 'Собака', 200);
INSERT INTO `pet` VALUES (3, 'Макс', 'Бульдог', 'Собака', 300);
INSERT INTO `pet` VALUES (4, 'Жорчик', 'Алабай', 'Собака', 450);
INSERT INTO `pet` VALUES (5, 'Теди', 'Персидский', 'Кот', 240);
INSERT INTO `pet` VALUES (6, 'Боб', 'Дворняга', 'Кот', 345);
INSERT INTO `pet` VALUES (7, 'Борис', 'Шотландец', 'Кот', 230);

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `product_ID` int(100) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_desc` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_type` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_price` int(200) NOT NULL,
  PRIMARY KEY (`product_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (1, 'Корм для животных с пищевой непереносимостью', 'пециальные корма для собак и кошек с чувствительным желудком, аллергией на определенные продукты и др', 'Продукт', 20);
INSERT INTO `product` VALUES (2, 'Препараты от блох и клещей', ' средства для защиты животных от блох и клещей, включая шампуни, спреи, капли на холку и т.д.', 'Продукт', 22);
INSERT INTO `product` VALUES (3, 'Продукты для здоровья и гигиены животных', 'зубные пасты, щетки, шампуни, кондиционеры и другие средства для ухода за мехом и кожей животных', 'Продукт', 50);
INSERT INTO `product` VALUES (4, 'Витамины и добавки', 'препараты для поддержания здоровья животных, включая витамины, минералы, пробиотики и другие добавки.', 'Продукт', 320);
INSERT INTO `product` VALUES (5, 'Продукты для лечения', 'средства для лечения различных заболеваний животных, включая антибиотики, средства от аллергии, антигельминтики и другие.', 'Продукт', 230);
INSERT INTO `product` VALUES (6, 'Продукты для собак-поводырей', 'специальные снаряжения для собак-поводырей, включая ошейники, поводки, фартуки и другие приспособления.', 'Продукт', 200);
INSERT INTO `product` VALUES (7, 'Товары для грызунов', 'корма, клетки, наполнители, игрушки и другие товары для грызунов, включая хомяков, крыс, морских свинок и других животных.', 'Продукт', 300);
INSERT INTO `product` VALUES (8, 'Товары для птиц', 'корма, клетки, наполнители, игрушки и другие товары для птиц, включая канареек, попугаев, дроздов и других птиц.', 'Продукт', 6);

-- ----------------------------
-- Table structure for veterinarian
-- ----------------------------
DROP TABLE IF EXISTS `veterinarian`;
CREATE TABLE `veterinarian`  (
  `vet_ID` int(20) NOT NULL AUTO_INCREMENT,
  `vet_fname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vet_lname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vet_contact` int(20) NOT NULL,
  `vet_email` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vet_uname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vet_pass` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`vet_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of veterinarian
-- ----------------------------
INSERT INTO `veterinarian` VALUES (1, 'Джон', 'Траволтра', 120380001, 'john@gmail.com', 'drjohn', '0909');

SET FOREIGN_KEY_CHECKS = 1;
