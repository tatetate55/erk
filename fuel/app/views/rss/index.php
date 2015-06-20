<?php
//$feed_string = file_get_contents('http://gogotsu.com/feed');
$feed_string2 = file_get_contents('http://getnews.jp/feed/ext/orig');
$feed_string = array(
  'http://gogotsu.com/feed',
'http://getnews.jp/feed/ext/orig');
$data = Format::forge($feed_string, 'xml')->to_array();
var_dump($data);
