<?php
/**
 * 菜单项
 *
 * @version        $Id: index_menu.php 1 11:06 2010年7月13日Z tianya $
 * @package        智库机器人.Administrator
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.智库机器人.com/usersguide/license.html
 * @link           www.xbclzk.xyz
 */
require(dirname(__FILE__).'/config.php');
require(DEDEADMIN.'/inc/inc_menu.php');
require(DEDEADMIN.'/inc/inc_menu_func.php');
$openitem = (empty($openitem) ? 1 : $openitem);
include DedeInclude('templets/index_menu2.htm');
