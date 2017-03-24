-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017-03-24 13:11:05
-- 服务器版本: 5.5.49-0ubuntu0.14.04.1
-- PHP 版本: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `api`
--

-- --------------------------------------------------------

--
-- 表的结构 `api`
--

CREATE TABLE IF NOT EXISTS `api` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `url` varchar(256) NOT NULL,
  `method` enum('get','post','put','delete') NOT NULL,
  `version` int(11) NOT NULL,
  `response` text NOT NULL,
  `description` text NOT NULL,
  `note` text NOT NULL,
  `createtime` int(11) NOT NULL,
  `modifytime` int(11) NOT NULL,
  `isdelete` tinyint(1) NOT NULL,
  `debug` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=179 ;

-- --------------------------------------------------------

--
-- 表的结构 `api_module`
--

CREATE TABLE IF NOT EXISTS `api_module` (
  `api_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `createtime` int(11) NOT NULL,
  KEY `api_id` (`api_id`),
  KEY `module_id` (`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- 表的结构 `api_question`
--

CREATE TABLE IF NOT EXISTS `api_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `api_id` int(11) NOT NULL,
  `createtime` int(11) NOT NULL,
  `content` text NOT NULL,
  `isdelete` tinyint(1) NOT NULL,
  `deletetime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=42 ;

-- --------------------------------------------------------

--
-- 表的结构 `api_user`
--

CREATE TABLE IF NOT EXISTS `api_user` (
  `api_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='用户查看接口的最后时间';

-- --------------------------------------------------------

--
-- 表的结构 `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `type` varchar(12) NOT NULL,
  `path` varchar(128) NOT NULL,
  `size` int(11) NOT NULL,
  `uploadtime` int(11) NOT NULL,
  `isdelete` tinyint(1) NOT NULL COMMENT '是否删除',
  `deletetime` int(11) NOT NULL COMMENT '删除时间',
  `download` int(11) NOT NULL COMMENT '下载次数',
  `uid` int(11) NOT NULL COMMENT '上传者id',
  `note` text NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COMMENT='共享的文件表' AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- 表的结构 `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `sort` int(11) NOT NULL,
  `isdelete` int(11) NOT NULL,
  `deletetime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=80 ;

-- --------------------------------------------------------

--
-- 表的结构 `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '模型id',
  `pid` int(11) NOT NULL COMMENT '项目id',
  `name` varchar(32) NOT NULL COMMENT '模型名称',
  `description` text NOT NULL COMMENT '模型介绍',
  `createtime` int(11) NOT NULL COMMENT '创建时间',
  `modifytime` int(11) NOT NULL COMMENT '修改时间',
  `isdelete` tinyint(4) NOT NULL COMMENT '是否删除',
  `deletetime` int(11) NOT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COMMENT='数据模型' AUTO_INCREMENT=72 ;

-- --------------------------------------------------------

--
-- 表的结构 `module_parameter`
--

CREATE TABLE IF NOT EXISTS `module_parameter` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '参数id',
  `mid` int(11) NOT NULL COMMENT '模型id',
  `name` varchar(128) NOT NULL COMMENT '模型的key',
  `value` varchar(128) NOT NULL,
  `description` text NOT NULL COMMENT 'key的含义',
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=535 ;

-- --------------------------------------------------------

--
-- 表的结构 `parameter`
--

CREATE TABLE IF NOT EXISTS `parameter` (
  `api_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `type` enum('string','int','array','file') NOT NULL,
  `method` enum('get','post') NOT NULL,
  `need` tinyint(1) NOT NULL,
  `length_min` int(11) NOT NULL,
  `length_max` int(11) NOT NULL,
  `dvalue` text NOT NULL,
  `demo` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- 表的结构 `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `logo` int(11) NOT NULL,
  `description` varchar(128) NOT NULL,
  `createtime` int(11) NOT NULL COMMENT '创建时间',
  `complete` tinyint(1) NOT NULL COMMENT '是否完成',
  `completetime` int(11) DEFAULT NULL,
  `isdelete` tinyint(1) NOT NULL COMMENT '是否删除',
  `host` varchar(64) NOT NULL COMMENT '域名',
  `introduction` text NOT NULL,
  `deletetime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `project_user`
--

CREATE TABLE IF NOT EXISTS `project_user` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- 表的结构 `request_log`
--

CREATE TABLE IF NOT EXISTS `request_log` (
  `id` int(11) NOT NULL,
  `interface_id` int(11) NOT NULL,
  `parameter` text NOT NULL,
  `time` int(11) NOT NULL,
  `response` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- 表的结构 `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `session_id` char(26) NOT NULL COMMENT 'session_id',
  `time` int(11) NOT NULL COMMENT '创建时间',
  `content` text NOT NULL,
  UNIQUE KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- 表的结构 `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `type` enum('jpeg','jpg','png','gif','bmp') NOT NULL,
  `path` varchar(128) NOT NULL,
  `time` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` char(32) NOT NULL,
  `salt` char(6) NOT NULL,
  `email` varchar(32) NOT NULL,
  `api_cookie` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=29 ;

--
-- 限制导出的表
--

--
-- 限制表 `api_module`
--
ALTER TABLE `api_module`
  ADD CONSTRAINT `api_module_ibfk_1` FOREIGN KEY (`api_id`) REFERENCES `api` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `api_module_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `module_parameter`
--
ALTER TABLE `module_parameter`
  ADD CONSTRAINT `module_parameter_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `module` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
