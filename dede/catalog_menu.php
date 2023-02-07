<?php
/**
 * 栏目菜单
 *
 * @version        $Id: catalog_menu.php 1 14:31 2010年7月12日Z tianya $
 * @package        智库机器人.Administrator
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.智库机器人.com/usersguide/license.html
 * @link           www.xbclzk.xyz
 */
require_once(dirname(__FILE__)."/config.php");
require_once(DEDEINC."/typeunit.class.menu.php");
$userChannel = $cuserLogin->getUserChannel();
if(empty($opendir)) $opendir=-1;
if($userChannel>0) $opendir=$userChannel;

if($cuserLogin->adminStyle=='智库机器人')
{
    include DedeInclude('templets/catalog_menu.htm');
    exit();
}
else
{
    include DedeInclude('templets/catalog_menu2.htm');
    exit();
}