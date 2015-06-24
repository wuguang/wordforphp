
<?php
include('/lib/simple_html_dom.php');

$html = new simple_html_dom();

// 从url中加载
$html->load_file('http://image.baidu.com/search/index?ct=201326592&z=2&tn=baiduimage&ipn=r&word=detail&pn=0&istype=2&ie=utf-8&oe=utf-8&cl=2&lm=-1&st=-1&fr=&fmq=1435115964851_R&ic=0&se=&sme=0&width=0&height=0&face=0');
echo $html.toString();
?>
