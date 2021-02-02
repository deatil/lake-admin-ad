<?php

namespace app\lakead;

use think\facade\Db;

use Lake\Module;

/**
 * 卸载脚本
 *
 * @create 2020-2-1
 * @author deatil
 */
class Uninstall
{
    // 卸载
    public function run()
    {
        $Module = new Module();
        
        if (request()->param('clear') == 1) {
            // 删除数据库
            $runSqlStatus = $Module->runSQL(__DIR__ . "/install/uninstall.sql");
            if (! $runSqlStatus) {
                return false;
            }
        }

        return true;
    }

}
