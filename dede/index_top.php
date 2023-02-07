<?php
/**
 * 管理后台顶部
 *
 * @version        $Id: index_top.php 1 8:48 2010年7月13日Z tianya $
 * @package        智库机器人.Administrator
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.智库机器人.com/usersguide/license.html
 * @link           www.xbclzk.xyz
 */
require(dirname(__FILE__)."/config.php");
if($cuserLogin->adminStyle=='智库机器人')
{
    include DedeInclude('templets/index_top1.htm');
}
else
{
    include DedeInclude('templets/index_top2.htm');
}
