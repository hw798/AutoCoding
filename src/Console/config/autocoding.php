<?php
/**
 * Created by PhpStorm.
 * User: liangkun
 * Date: 2018/7/28
 * Time: 上午5:30
 */

return [

    // 当前要生成MVC的表关系

    'table' => [
        'name' => 'rss_feed',
        'primary_key' => 'id',
        'with' => [
            'one' => [
                ['name' => '', 'primary_key' => 'id', 'on' => ['id', 'gid']],
                ['name' => '', 'primary_key' => 'id', 'on' => ['id', 'gid']],
                ['name' => '', 'primary_key' => 'id', 'on' => ['id', 'gid']],
                ['name' => '', 'primary_key' => 'id', 'on' => ['id', 'gid']],
            ],
            'many' => [
                ['name' => '', 'primary_key' => 'id', 'on' => ['id', 'gid']],
                ['name' => '', 'primary_key' => 'id', 'on' => ['id', 'gid']],
            ],
        ],

    ],

    // 一下配置一般不需要修改

    'migration' => [
        'type' => [
            'VARCHAR' => 'string',
        ],
    ],


    'validator_dict' => [
        'type' => [
            'VARCHAR' => 'string',
        ],
        'required' => [
            'YES' => 'required',
            'NO' => '',
        ],
    ],

    'swagger_dict' => [
        'type' => [
            'VARCHAR' => 'string',
        ]
    ],
];