<?php
$url="http://cn.bing.com/images/search?q=detail&go=%E6%8F%90%E4%BA%A4&qs=bs&form=QBIR";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_HEADER,1);
curl_setopt($ch,CURLOPT_NOBODY, true);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.47 Safari/536.11');
$html=curl_exec($ch);
echo '11111111111111';
curl_close($ch);
echo $html;
?>