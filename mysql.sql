--人员管理

--表：userTable
--编号、姓名、性别、年龄、籍贯、电话、邮箱、爱好、个人简介、入职日期、薪资、岗位


DROP TABLE IF EXISTS `userTable`;

CREATE TABLE `userTable` (
  `userId` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `userName` varchar(30) NOT NULL DEFAULT '' COMMENT '姓名',
  `sex` varchar(30) NOT NULL COMMENT '性别',
  `age` varchar(30) NOT NULL COMMENT '年龄',
  `place` varchar(30) NOT NULL DEFAULT '' COMMENT '籍贯',
  `tel` varchar(11) NOT NULL DEFAULT '' COMMENT '电话',
  `email` varchar(30) NOT NULL DEFAULT '' COMMENT '邮箱',
  `hobby` varchar(30) NOT NULL DEFAULT '' COMMENT '爱好',
  `description` varchar(100) NOT NULL DEFAULT '' COMMENT '个人简介',
  `salary` varchar(30) NOT NULL COMMENT '薪资',
  `position` varchar(30) NOT NULL DEFAULT '' COMMENT '岗位',
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




















