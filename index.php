<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require __DIR__ . '/vendor/autoload.php';

use ainzz\Disk;

//The ID you will get after creating an Application in Yandex(https://oauth.yandex.com/client/new)
$disk = new Disk('0be8effcc8ce40c194c52bad1367a2b0');

//You will need the URL for token generate.
$tokenUrl = $disk->getLoginToken();

//here it will output the url to get the token. after you access the link and get the token you can comment this line and the one above
die(var_dump($tokenUrl));

//setting the actual token
$disk->setToken('AQAAAAAO8u2jAARJIZ5RWvznvUrcuJGgmOX5zz4');

//uploading the file and reciving the link
$link = $disk->uploadFile('/var/www/small.mp4');
echo $link;
