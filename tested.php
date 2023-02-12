<?php

use DB\MyQueryBuilder;

require_once 'index.php';


$config = [

        'DB_DRIVER'       => 'pgsql',

        'DB_HOST'       => '127.0.0.1',

        'DB_PORT'       => 'port',

        'DB_NAME'   => 'test',

        'DB_USER'   => 'postgres',

        'DB_PASSWORD'   => 'password',
];



$db = new MyQueryBuilder($config);


// $db
//    ->insertInto('shop', [
//        'id' => '12',
//        'address' =>'yrbets',
//        'phone' => '88005553535',
//        'fax' => '77777',
//        ]);



//$db->select(['fax', 'phone'])->from('shop');

//$db
//    ->update('shop',
//        ['address' =>'laves',
//            'phone' => '899954899879',
//            'fax' => '7789779',
//            ])
//    ->where('shop.id', '=', 1);



$result = $db->execute();

dd($result);



