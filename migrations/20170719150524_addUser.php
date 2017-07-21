<?php

use Phpmig\Migration\Migration;

class AddUser extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $biz = $this->getContainer();
        $db  = $biz['db'];
        $createTime = time();
        $sql = "INSERT INTO `crontab_job` (`name`, `cycle`, `cycleTime`, `jobClass`, `jobParams`, `executing`, `nextExcutedTime`, `creatorId`, `createdTime`) 
        VALUES ('AddUserJob', 'everyhour', 0, 'Biz\\\\User\\\\Job\\\\AddUserJob', '\"{}\"', 0, '12344', 1, {$createTime});";
        $db->exec("$sql");

    }

    /**
     * Undo the migration
     */
    public function down()
    {

    }
}
