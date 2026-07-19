<?php
$url='http://buypilonline.com/';
$newSite= file_get_contents('http://buypilonline.com/');
echo preg_replace(array('/(src=)(\'|\")(?!(https|http))(\/?)(.*?)(\'|\")/m','/(href=)(\'|\")(?!(http|https))(\/?)(.*?)(\'|\")/m'),array("$1$2$url$5$6","$1$2$url$5$6"),$newSite);