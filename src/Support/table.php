<?php namespace Hw\Support;

use DB;

/**
 * Created by PhpStorm.
 * User: liangkun
 * Date: 2018/7/28
 * Time: 上午4:47
 */
class table
{
    public function __construct()
    {
    }

    public static function showIndex($table)
    {
        return DB::select('SHOW INDEX FROM ' . $table);
    }


    public static function showColumns($table)
    {

        return DB::select('SHOW COLUMNS FROM ' . $table);
    }

}