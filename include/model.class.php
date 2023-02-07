<?php   if(!defined('DEDEINC')) exit("Request Error!");
/**
 * 模型基类
 *
 * @version        $Id: model.class.php 1 13:46 2010-12-1 tianya $
 * @package        智库机器人.Libraries
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.智库机器人.com/usersguide/license.html
 * @link           www.xbclzk.xyz
 */

class Model
{
    var $dsql;
    var $db;
    
    // 析构函数
    function Model()
    {
        global $dsql;
        if ($GLOBALS['cfg_mysql_type'] == 'mysqli')
        {
            $this->dsql = $this->db = isset($dsql)? $dsql : new DedeSqli(FALSE);
        } else {
            $this->dsql = $this->db = isset($dsql)? $dsql : new DedeSql(FALSE);
        }
            
    }
    
    // 释放资源
    function __destruct() 
    {
        $this->dsql->Close(TRUE);
    }
}