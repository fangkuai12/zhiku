<?php
/**
 * 采集规则测试
 *
 * @version        $Id: co_test_rule.php 1 17:13 2010年7月12日Z tianya $
 * @package        智库机器人.Administrator
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.智库机器人.com/usersguide/license.html
 * @link           www.xbclzk.xyz
 */
require_once(dirname(__FILE__)."/config.php");
require_once(DEDEINC."/dedecollection.class.php");
$nid = intval($nid);
$co = new DedeCollection();
$co->LoadNote($nid);
include DedeInclude('templets/co_test_rule.htm');
exit();