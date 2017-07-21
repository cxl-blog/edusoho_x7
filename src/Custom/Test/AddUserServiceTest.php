<?php
/**
 * Created by PhpStorm.
 * User: kuozhi
 * Date: 17-7-20
 * Time: 上午8:36
 */

namespace Custom\Test;

use Mockery;
use Topxia\Service\Common\BaseTestCase;
use Custom\Jobs\AddUserService;

class AddUserServiceTest extends BaseTestCase
{
    private $url='http://www.usersystem.com/UserSystemBundle/addUserAction';
    private $data=array('name'=>'a','sex'=>'男','age'=>'23','comment'=>'666');
    function testCreateAction()
    {
        // mock $request->request->all() 返回的参数


        $this->mock('Custom\Jobs\AddUserService',array(array(
            'functionName' => 'send_post',
            'runTime' => 1,
            'retrunvalue' => 'ok'
        )));
        $adduser = new AddUserService();
        $adduser->send_post($this->url, $this->data);


    }

}