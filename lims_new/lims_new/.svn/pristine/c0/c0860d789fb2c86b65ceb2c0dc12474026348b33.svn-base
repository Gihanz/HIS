<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Dushyantha
 * Date: 2/7/16
 * Time: 7:11 AM
 */
if (!function_exists('checkLogin'))
{
    /*
     * @ param $roles
     * add allowed roles to this param
     */
    function checkLogin($roles=array())
    {
        $login = $this->session->userdata('isLogin');
        if(isset($login) && !empty($login) && $login!=false) {
            $role = $this->session->userdata('role');
            if(in_array($role, $roles)) {
              return true;
            }
        }
        return false;
    }
}