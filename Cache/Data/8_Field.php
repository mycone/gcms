<?php
return array ( 'title' => array ( 'id' => '90', 'moduleid' => '8', 'field' => 'title', 'name' => '标题', 'tips' => '', 'required' => '1', 'minlength' => '2', 'maxlength' => '50', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'text', 'setup' => 'array (
  \'size\' => \'40\',
  \'default\' => \'\',
  \'ispassword\' => \'0\',
  \'fieldtype\' => \'varchar\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '0', ), 'username' => array ( 'id' => '91', 'moduleid' => '8', 'field' => 'username', 'name' => '姓名', 'tips' => '', 'required' => '1', 'minlength' => '2', 'maxlength' => '20', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'text', 'setup' => 'array (
  \'size\' => \'10\',
  \'default\' => \'\',
  \'ispassword\' => \'0\',
  \'fieldtype\' => \'varchar\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '0', ), 'email' => array ( 'id' => '93', 'moduleid' => '8', 'field' => 'email', 'name' => '邮箱', 'tips' => '', 'required' => '1', 'minlength' => '0', 'maxlength' => '40', 'pattern' => 'email', 'errormsg' => '', 'class' => '', 'type' => 'text', 'setup' => 'array (
  \'size\' => \'20\',
  \'default\' => \'\',
  \'ispassword\' => \'0\',
  \'fieldtype\' => \'varchar\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '0', ), 'catid' => array ( 'id' => '104', 'moduleid' => '8', 'field' => 'catid', 'name' => '栏目', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '0', 'errormsg' => '', 'class' => '', 'type' => 'catid', 'setup' => '', 'ispost' => '0', 'unpostgroup' => '', 'listorder' => '0', 'status' => '1', 'issystem' => '0', ), 'telephone' => array ( 'id' => '92', 'moduleid' => '8', 'field' => 'telephone', 'name' => '电话', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '0', 'pattern' => 'tel', 'errormsg' => '', 'class' => '', 'type' => 'text', 'setup' => 'array (
  \'size\' => \'20\',
  \'default\' => \'\',
  \'ispassword\' => \'0\',
  \'fieldtype\' => \'varchar\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '1', 'status' => '1', 'issystem' => '0', ), 'content' => array ( 'id' => '94', 'moduleid' => '8', 'field' => 'content', 'name' => '内容', 'tips' => '', 'required' => '1', 'minlength' => '2', 'maxlength' => '200', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'textarea', 'setup' => 'array (
  \'fieldtype\' => \'mediumtext\',
  \'rows\' => \'4\',
  \'cols\' => \'50\',
  \'default\' => \'\',
)', 'ispost' => '1', 'unpostgroup' => '', 'listorder' => '10', 'status' => '1', 'issystem' => '0', ), 'reply_content' => array ( 'id' => '95', 'moduleid' => '8', 'field' => 'reply_content', 'name' => '回复', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'textarea', 'setup' => 'array (
  \'fieldtype\' => \'mediumtext\',
  \'rows\' => \'4\',
  \'cols\' => \'50\',
  \'default\' => \'\',
)', 'ispost' => '0', 'unpostgroup' => '3,4', 'listorder' => '10', 'status' => '1', 'issystem' => '0', ), 'ip' => array ( 'id' => '96', 'moduleid' => '8', 'field' => 'ip', 'name' => 'IP', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '15', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'text', 'setup' => 'array (
  \'size\' => \'15\',
  \'default\' => \'\',
  \'ispassword\' => \'0\',
  \'fieldtype\' => \'varchar\',
)', 'ispost' => '0', 'unpostgroup' => '3,4', 'listorder' => '90', 'status' => '1', 'issystem' => '0', ), 'createtime' => array ( 'id' => '88', 'moduleid' => '8', 'field' => 'createtime', 'name' => '提交时间', 'tips' => '', 'required' => '1', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'datetime', 'setup' => '', 'ispost' => '0', 'unpostgroup' => '3,4', 'listorder' => '93', 'status' => '1', 'issystem' => '1', ), 'status' => array ( 'id' => '89', 'moduleid' => '8', 'field' => 'status', 'name' => '状态', 'tips' => '', 'required' => '0', 'minlength' => '0', 'maxlength' => '0', 'pattern' => '', 'errormsg' => '', 'class' => '', 'type' => 'radio', 'setup' => 'array (
  \'options\' => \'已审核|1
未审核|0\',
  \'fieldtype\' => \'tinyint\',
  \'numbertype\' => \'1\',
  \'labelwidth\' => \'75\',
  \'default\' => \'0\',
)', 'ispost' => '0', 'unpostgroup' => '3,4', 'listorder' => '99', 'status' => '1', 'issystem' => '1', ), ); ?>