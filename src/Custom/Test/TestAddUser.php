<?php
/**
 * Created by PhpStorm.
 * User: kuozhi
 * Date: 17-7-20
 * Time: 上午11:32
 */

namespace Custom\Test;

use Mockery;

require '../Jobs/AddUserService.php';
class TestAddUser extends \PHPUnit_Framework_TestCase
{
     private   $url='http://www.usersystem.com/UserSystemBundle/addUserAction';
     private   $data=array('name'=>'a','sex'=>'男','age'=>'23','comment'=>'666');
    /*function TestCreateAction()
    {
        // mock $request->request->all() 返回的参数
        $mockedParams = Mockery::mock('Symfony\Component\HttpFoundation\ParameterBag');
        $mockedParams->shouldReceive('all')->andReturn(   //all方法返回 数组
            array('tags' => 'tag1,tag2')
        );

        $mockedRequest = Mockery::mock('Symfony\Component\HttpFoundation\Request');
        $mockedRequest->shouldReceive('getMethod')->andReturn('POST');  //当调用 getMethod时, 返回 POST
        $mockedRequest->request = $mockedParams;

        $this->mock('Article.ArticleService');
        $this->getArticleService()->shouldReceive('createArticle');

    }*/
    public function testAddUserService() {
        // Create a stub for the SomeClass class.
        $test = $this->getMock('AddUserService');

        // Configure the stub.
        $test->expects($this->any())
            ->method('send_post')
            ->will($this->returnValue('ok'));

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('ok', $test->send_post($this->url,$this->data));
    }

}
$test=new TestAddUser();
$test->TestAddUserService();


?>