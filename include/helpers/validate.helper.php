<?php  if(!defined('DEDEINC')) exit('智库机器人');
/**
 * 验证小助手
 *
 * @version        $Id: validate.helper.php 1 2010-07-05 11:43:09Z tianya $
 * @package        智库机器人.Helpers
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.智库机器人.com/usersguide/license.html
 * @link           www.xbclzk.xyz
 */

//邮箱格式检查
if ( ! function_exists('CheckEmail'))
{
    function CheckEmail($email)
    {
        if (!empty($email))
        {
            return preg_match('/^[a-z0-9]+([\+_\-\.]?[a-z0-9]+)*@([a-z0-9]+[\-]?[a-z0-9]+\.)+[a-z]{2,6}$/i', $email);
        }
        return FALSE;
    }
}

