<?php
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$redis->set('name', 'zhangsan');
$pada = $redis->get('name');
echo $pada;