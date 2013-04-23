<?php
return array ( 'name' => array ( 'id' => '99', 'moduleid' => '9', 'field' => 'name', 'name' => '客服名称', 'tips' => '', 'required' => '0', 'minlength' => '2', 'maxlength' => '20', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'text', 'setup' => 'array (
  \'size\' => \'20\',
  \'default\' => \'\',
  \'ispassword\' => \'0\',
  \'fieldtype\' => \'varchar\',
)', 'ispost' => '0', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '0', ), 'type' => array ( 'id' => '100', 'moduleid' => '9', 'field' => 'type', 'name' => '客服类型', 'tips' => '', 'required' => '1', 'minlength' => '1', 'maxlength' => '2', 'pattern' => '0', 'errormsg' => '', 'class' => '', 'type' => 'select', 'setup' => 'array (
  \'options\' => \'QQ|1
MSN|2
旺旺|3
贸易通|6
电话|4
代码|5\',
  \'multiple\' => \'0\',
  \'fieldtype\' => \'tinyint\',
  \'numbertype\' => \'1\',
  \'size\' => \'\',
  \'default\' => \'\',
)', 'ispost' => '0', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '0', ), 'skin' => array ( 'id' => '102', 'moduleid' => '9', 'field' => 'skin', 'name' => '风格样式', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '3', 'pattern' => '0', 'errormsg' => '', 'class' => '', 'type' => 'select', 'setup' => 'array (
  \'options\' => \'无风格图标|0
QQ风格1|q1
QQ风格2|q2
QQ风格3|q3
QQ风格4|q4
QQ风格5|q5
QQ风格6|q6
QQ风格7|q7
MSN小图|m1
MSN大图1|m2
MSN大图2|m3
MSN大图3|m4
旺旺小图|w2
旺旺大图|w1
贸易通|al1\',
  \'multiple\' => \'0\',
  \'fieldtype\' => \'varchar\',
  \'numbertype\' => \'1\',
  \'size\' => \'\',
  \'default\' => \'\',
)', 'ispost' => '0', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '0', ), 'code' => array ( 'id' => '101', 'moduleid' => '9', 'field' => 'code', 'name' => 'ID或代码', 'tips' => '', 'required' => '0', 'minlength' => '2', 'maxlength' => '0', 'pattern' => '0', 'errormsg' => '', 'class' => '', 'type' => 'textarea', 'setup' => 'array (
  \'fieldtype\' => \'mediumtext\',
  \'rows\' => \'4\',
  \'cols\' => \'50\',
  \'default\' => \'\',
)', 'ispost' => '0', 'unpostgroup' => '', 'listorder' => '10', 'status' => '1', 'issystem' => '0', ), 'createtime' => array ( 'id' => '97', 'moduleid' => '9', 'field' => 'createtime', 'name' => '发布时间', 'tips' => '', 'required' => '1', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'datetime', 'setup' => '', 'ispost' => '0', 'unpostgroup' => '3,4', 'listorder' => '93', 'status' => '1', 'issystem' => '1', ), 'status' => array ( 'id' => '98', 'moduleid' => '9', 'field' => 'status', 'name' => '状态', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'radio', 'setup' => 'array (
  \'options\' => \'已审核|1
未审核|0\',
  \'fieldtype\' => \'tinyint\',
  \'numbertype\' => \'1\',
  \'labelwidth\' => \'75\',
  \'default\' => \'1\',
)', 'ispost' => '0', 'unpostgroup' => '3,4', 'listorder' => '99', 'status' => '1', 'issystem' => '1', ), ); ?>