<html>
    <head>
        <title>PHP 测试</title>
        <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            font-family: "微软雅黑";
            font-size: 12px;
        }
        .content{
            margin-left: 20px;
        }

        .wordTitle{
            font-weight: bold;
            font-size: 13px;
        }
        </style>
    </head>
 <body>
<?php
    $filename = "wordRoot/record4_root_1.js";
    $handle = fopen($filename, "r");//读取二进制文件时，需要将第二个参数设置成'rb'
    
    //通过filesize获得文件大小，将整个文件一下子读到一个字符串中
    $contents = fread($handle, filesize ($filename));
    $obj = json_decode($contents,true);
    $target = '';
    foreach($obj as $key=>$value){
        if(count($value)==0){
            continue;
        }
        $target .= '<br/><p class="wordTitle">'.$key.'</p>';
        foreach($value as $key02=>$value02){
            $value02 = str_replace("__","<br/>",$value02);
            $target .= $value02.'<br/>';
        }
    }
    $target = '<div class="content">'.$target.'</div>';

    echo $target;
    fclose($handle);
?>
</body>
</html>