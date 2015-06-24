
<?php
echo '11111111<br/>';
include('lib/simple_html_dom.php');
echo '22222222<br/>';

$html = new simple_html_dom();
echo '3333333<br/>';

$html = file_get_html('http://cn.bing.com/images/search?q=detail');

foreach($html->find('img') as $element) 
       echo $element->src . '<br>';

?>
