<?php
/**
 * Created by PhpStorm.
 * User: kuozhi
 * Date: 17-7-19
 * Time: 下午5:13
 */
namespace Custom\Jobs;
/*use Topxia\Service\Crontab\Job;
use Topxia\Service\Common\ServiceKernel;
use Symfony\Component\HttpFoundation\Request;*/
//use Custom\Jobs\AddUserService;
require 'AddUserService.php';
function Send_post()
{
    $url='http://www.usersystem.com/UserSystemBundle/addUserAction';
    $data=array('name'=>'a','sex'=>'男','age'=>'23','comment'=>'666');
    $test = new AddUserService();
    $test->send_post($url,$data);
}
Send_post();



?>