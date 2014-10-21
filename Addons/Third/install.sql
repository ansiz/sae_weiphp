CREATE TABLE `wp_third` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `keyword` varchar(255) NOT NULL COMMENT '关键词',
  `apisite` varchar(255) NOT NULL COMMENT '接口网址',
  `output_format` char(50) NOT NULL DEFAULT '2' COMMENT '输出格式',
  `title` varchar(255) NOT NULL COMMENT '接口标题',
  `requesttype` tinyint(2) NOT NULL DEFAULT '0' COMMENT '请求方式',
  `parameters` text NOT NULL COMMENT '参数',
  `count` char(50) NOT NULL DEFAULT '10' COMMENT '数据条数',
  `defaultpic` int(10) unsigned NOT NULL COMMENT '默认图片',
  `priority` int(10) unsigned NOT NULL COMMENT '优先级别',
  `keyword_type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '关键词类型',
  `isfilter` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否过滤关键词',
  `type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '类型',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `Token` varchar(255) NOT NULL COMMENT 'token',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;


INSERT INTO `wp_model` ( `name`, `title`, `extend`, `relation`, `need_pk`, `field_sort`, `field_group`, `attribute_list`, `template_list`, `template_add`, `template_edit`, `list_grid`, `list_row`, `search_key`, `search_list`, `create_time`, `update_time`, `status`, `engine_type`) VALUES ( 'third', '第三方', '0', '', '1', '{\"1\":[\"keyword\",\"apisite\",\"output_format\",\"title\",\"requesttype\",\"parameters\",\"count\",\"defaultpic\",\"priority\",\"keyword_type\",\"isfilter\",\"remark\",\"status\"]}', '1:基础', '', '', '', '', 'keyword:关键词\r\ntitle:标题\r\napisite:网址\r\nid:操作:[EDIT]|编辑,[DELETE]|删除', '10', '', '', '1399616037', '1406324136', '1', 'MyISAM');

INSERT INTO `wp_attribute` (`name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'keyword_type', '关键词类型', 'tinyint(2) NOT NULL', 'bool', '1', '', '0', '0:完全匹配\r\n1:左边匹配\r\n2:右边匹配\r\n3:模糊匹配', '', '0', '1', '1406322885', '1399762861', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'Token', 'token', 'varchar(255) NOT NULL', 'string', '', '', '0', '', '', '0', '1', '1406330590', '1406330590', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'defaultpic', '默认图片', 'int(10) UNSIGNED NOT NULL', 'picture', '', '', '1', '', '', '0', '1', '1399616968', '1399616968', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'count', '数据条数', 'char(50) NOT NULL', 'select', '10', '', '1', '0:随机\r\n1:一条数据\r\n2:两条数据\r\n3:三条数据\r\n4:四条数据\r\n5:五条数据\r\n6:六条数据\r\n7:七条数据\r\n8:八条数据\r\n9:九条数据\r\n10:10条数据\r\n', '98', '0', '1', '1399616902', '1399616902', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'requesttype', '请求方式', 'tinyint(2) NOT NULL', 'bool', '0', '', '0', '0:Get方式\r\n1:Post方式', '', '0', '1', '1406322918', '1399616461', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'title', '接口标题', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '', '0', '1', '1399616398', '1399616398', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'output_format', '输出格式', 'char(50) NOT NULL', 'select', '2', '', '0', '0:微信XML格式\r\n1:原样数据输出\r\n2:整合平台数据', '', '0', '1', '1406322952', '1399616364', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'apisite', '接口网址', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '', '0', '1', '1399616169', '1399616169', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'priority', '优先级别', 'int(10) UNSIGNED NOT NULL', 'num', '', '数字越大级别越高', '3', '', '', '0', '1', '1406323019', '1399617395', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'parameters', '参数', 'text NOT NULL', 'textarea', '', '', '1', '', '', '0', '1', '1399616607', '1399616607', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'keyword', '关键词', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '', '0', '1', '1399616094', '1399616094', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'isfilter', '是否过滤关键词', 'tinyint(2) NOT NULL', 'bool', '0', '', '1', '0:过滤\r\n1:不过滤', '', '0', '1', '1399763002', '1399763002', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ('type', '类型', 'tinyint(2) NOT NULL', 'bool', '1', '', '0', '0:内置\r\n1:自定义\r\n2:第三方平台', '', '0', '1', '1406323849', '1406318376', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` ( `name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'remark', '备注', 'varchar(255) NOT NULL', 'string', '', '', '1', '', '', '0', '1', '1406318926', '1406318926', '', '3', '', 'regex', '', '3', 'function');
INSERT INTO `wp_attribute` (`name`, `title`, `field`, `type`, `value`, `remark`, `is_show`, `extra`, `model_id`, `is_must`, `status`, `update_time`, `create_time`, `validate_rule`, `validate_time`, `error_info`, `validate_type`, `auto_rule`, `auto_time`, `auto_type`) VALUES ( 'status', '状态', 'tinyint(2) NOT NULL', 'bool', '0', '', '1', '0:启用\r\n1:禁用', '', '0', '1', '1406319817', '1406319817', '', '3', '', 'regex', '', '3', 'function');

UPDATE `wp_attribute` SET model_id= (SELECT MAX(id) FROM `wp_model`) WHERE model_id=0;


DELETE from wp_third ;
DELETE from wp_keyword where addon='Third' and keyword='笑话';
DELETE from wp_keyword where addon='Third' and keyword='火车';
DELETE from wp_keyword where addon='Third' and keyword='翻译';
DELETE from wp_keyword where addon='Third' and keyword='快递';
DELETE from wp_keyword where addon='Third' and keyword='天气';
DELETE from wp_keyword where addon='Third' and keyword='算命';

INSERT INTO `wp_third` ( `keyword`, `apisite`, `output_format`, `title`, `requesttype`, `parameters`, `count`, `defaultpic`, `priority`, `keyword_type`, `isfilter`, `type`, `remark`, `status`, `Token`) VALUES ('笑话', 'http://[site]/index.php?s=/addon/Third/API/getjoke.html', '0', '笑话', '1', '', '1', '0', '0', '1', '0', '0', '发送“笑话”看笑话去', '0', '0');
INSERT INTO `wp_keyword` (`keyword`, `token`, `addon`, `aim_id`, `cTime`, `keyword_length`, `keyword_type`, `extra_text`, `extra_int`, `request_count`) VALUES ( '笑话', '0', 'Third', '', '1406330808', '6', '0', '', '0', '15');
UPDATE `wp_keyword` SET aim_id= (SELECT MAX(id) FROM `wp_third`) where addon='Third' and keyword='笑话';

INSERT INTO `wp_third` ( `keyword`, `apisite`, `output_format`, `title`, `requesttype`, `parameters`, `count`, `defaultpic`, `priority`, `keyword_type`, `isfilter`, `type`, `remark`, `status`, `Token`) VALUES ('火车', 'http://[site]/index.php?s=/addon/Third/API/getCoachInfo.html', '0', '火车查询', '1', '', '1', '0', '0', '1', '0', '0', '发送“火车+出发站+到+终点”查询火车信息，如：火车上海到杭州', '0', '0');
INSERT INTO `wp_keyword` ( `keyword`, `token`, `addon`, `aim_id`, `cTime`, `keyword_length`, `keyword_type`, `extra_text`, `extra_int`, `request_count`) VALUES ( '火车', '0', 'Third', '', '1406330808', '6', '1', '', '0', '9');
UPDATE `wp_keyword` SET aim_id= (SELECT MAX(id) FROM `wp_third`) where addon='Third' and keyword='火车';

INSERT INTO `wp_third` ( `keyword`, `apisite`, `output_format`, `title`, `requesttype`, `parameters`, `count`, `defaultpic`, `priority`, `keyword_type`, `isfilter`, `type`, `remark`, `status`, `Token`) VALUES ('翻译', 'http://[site]/index.php?s=/addon/Third/API/fanyi.html', '0', '智能翻译', '1', '', '1', '0', '0', '1', '0', '0', '发送“翻译+内容”', '0', '0');
INSERT INTO `wp_keyword` ( `keyword`, `token`, `addon`, `aim_id`, `cTime`, `keyword_length`, `keyword_type`, `extra_text`, `extra_int`, `request_count`) VALUES ( '翻译', '0', 'Third', '', '1406330808', '6', '1', '', '0', '9');
UPDATE `wp_keyword` SET aim_id= (SELECT MAX(id) FROM `wp_third`) where addon='Third' and keyword='翻译';

INSERT INTO `wp_third` ( `keyword`, `apisite`, `output_format`, `title`, `requesttype`, `parameters`, `count`, `defaultpic`, `priority`, `keyword_type`, `isfilter`, `type`, `remark`, `status`, `Token`) VALUES ('快递', 'http://[site]/index.php?s=/addon/Third/API/kuaidi.html', '0', '快递查询', '1', '', '1', '0', '0', '1', '0', '0', '发送“快递+快递单号”', '0', '0');
INSERT INTO `wp_keyword` (`keyword`, `token`, `addon`, `aim_id`, `cTime`, `keyword_length`, `keyword_type`, `extra_text`, `extra_int`, `request_count`) VALUES ( '快递', '0', 'Third', '', '1406330808', '6', '1', '', '0', '9');
UPDATE `wp_keyword` SET aim_id= (SELECT MAX(id) FROM `wp_third`) where addon='Third' and keyword='快递';

INSERT INTO `wp_third` ( `keyword`, `apisite`, `output_format`, `title`, `requesttype`, `parameters`, `count`, `defaultpic`, `priority`, `keyword_type`, `isfilter`, `type`, `remark`, `status`, `Token`) VALUES ('天气', 'http://[site]/index.php?s=/addon/Third/API/getWeather.html', '0', '天气查询', '1', '', '1', '0', '0', '1', '0', '0', '发送“天气+城市名”，如“天气佛山”', '0', '0');
INSERT INTO `wp_keyword` ( `keyword`, `token`, `addon`, `aim_id`, `cTime`, `keyword_length`, `keyword_type`, `extra_text`, `extra_int`, `request_count`) VALUES ( '天气', '0', 'Third', '', '1406330808', '6', '1', '', '0', '9');
UPDATE `wp_keyword` SET aim_id= (SELECT MAX(id) FROM `wp_third`) where addon='Third' and keyword='天气';

INSERT INTO `wp_third` (`keyword`, `apisite`, `output_format`, `title`, `requesttype`, `parameters`, `count`, `defaultpic`, `priority`, `keyword_type`, `isfilter`, `type`, `remark`, `status`, `Token`) VALUES ('算命', 'http://[site]/index.php?s=/addon/Third/API/suanming.html', '0', '名字算命', '1', '', '1', '0', '0', '1', '0', '0', '发送“算命+名字”，如算命张三', '0', '0');
INSERT INTO `wp_keyword` ( `keyword`, `token`, `addon`, `aim_id`, `cTime`, `keyword_length`, `keyword_type`, `extra_text`, `extra_int`, `request_count`) VALUES ( '算命', '0', 'Third', '', '1406330808', '6', '1', '', '0', '9');
UPDATE `wp_keyword` SET aim_id= (SELECT MAX(id) FROM `wp_third`) where addon='Third' and keyword='算命';

