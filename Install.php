<?php

namespace app\lakead;

use Lake\Module;

/**
 * 安装脚本
 *
 * @create 2020-2-1
 * @author deatil
 */
class Install
{
    /**
     * 安装完回调
     * @return boolean
     */
    public function end()
    {    
        $Module = new Module();
        
        // 安装数据库
        $runSqlStatus = $Module->runSQL(__DIR__ . "/install/install.sql");
        if (! $runSqlStatus) {
            return false;
        }
        
        return true;
    }

}
