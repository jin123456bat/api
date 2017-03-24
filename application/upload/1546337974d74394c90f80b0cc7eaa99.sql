-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016-12-01 23:09:49
-- 服务器版本: 5.5.49-0ubuntu0.14.04.1
-- PHP 版本: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `weigou`
--

-- --------------------------------------------------------

--
-- 表的结构 `erp`
--

CREATE TABLE IF NOT EXISTS `erp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL COMMENT 'erp的类名',
  `appid` varchar(32) NOT NULL,
  `appsecret` varchar(64) NOT NULL,
  `parameter` text NOT NULL COMMENT '其他的参数',
  `do_send` varchar(32) DEFAULT NULL COMMENT '发送订单数据的方法',
  `CancelOrder` varchar(32) DEFAULT NULL COMMENT '取消订单的方法',
  `QueryGoods` varchar(32) DEFAULT NULL COMMENT '商品信息查询的方法名',
  `QueryGoodsInventory` varchar(32) DEFAULT NULL COMMENT '查询商品库存的方法名',
  `url` varchar(128) NOT NULL COMMENT '接口地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `erp`
--

INSERT INTO `erp` (`id`, `name`, `appid`, `appsecret`, `parameter`, `do_send`, `CancelOrder`, `QueryGoods`, `QueryGoodsInventory`, `url`) VALUES
(1, 'openapi', '1023', '9f593071-0f4f-47fc-ab18-2dfc2e5aecf4', '{"SourcePlatform":1026}', 'OrderCreate', NULL, NULL, NULL, 'http://openapitest.dchnu.com/open.api'),
(2, 'oms', '135', '*q@eI5c*mL03bsnXa*a6#$FxEWRvqG%yLTSePd3O', '{"store":[{"store":27,"HouseId":25,"way":[{"yt":58}]},{"store":40,"HouseId":26,"way":[{"etk":77}]}],"platform":222}', 'AddOrder', 'CancelOrder', 'QueryGoods', 'QueryGoodsInventory', 'http://sandbox-oms.x-omni.com/api/');

DELIMITER $$
--
-- 事件
--
CREATE DEFINER=`root`@`localhost` EVENT `usertovip` ON SCHEDULE EVERY 60 SECOND STARTS '2016-09-29 11:06:13' ON COMPLETION PRESERVE ENABLE DO call usetovip()$$

CREATE DEFINER=`root`@`localhost` EVENT `down_product` ON SCHEDULE EVERY 1 MINUTE STARTS '2016-07-21 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO update `product` set status=0,auto_status=0 where price=0 or v1price=0 or v2price=0$$

CREATE DEFINER=`root`@`localhost` EVENT `auto_receive_order` ON SCHEDULE EVERY 1 SECOND STARTS '2016-06-02 12:40:07' ON COMPLETION NOT PRESERVE ENABLE DO update `order` set receive=1,receive_time=unix_timestamp() where status=1 and way_status=1 and unix_timestamp() - way_time > 15*3600*24 and receive=0$$

CREATE DEFINER=`root`@`localhost` EVENT `quit_order_not_payed` ON SCHEDULE EVERY 1 MINUTE STARTS '2016-05-19 17:42:11' ON COMPLETION NOT PRESERVE DISABLE COMMENT '关闭超时未支付的订单，听陈帅说有问题，所以暂时关闭了' DO -- update `order` set order.status=0,order.quittime=unix_timestamp(now()) where pay_status=0 and status=1 and unix_timestamp(now())-createtime>=3600 and (select task_user.orderno from task_user where task_user.orderno=order.orderno) is null
call orderoff()$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
