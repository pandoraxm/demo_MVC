<?php

function smarty_block_mytable($params, $content, $template, &$repeat)
{
    // return A;
    // print_r($params);
    // echo "<hr>";
    // var_dump($content);
    //内容为空的部分带值的break
    if (is_null($content)){
        return;
    }


    $rows = $params['rows'];
    $cols = $params['cols'];
    $content = trim($content);

    $str = "<table border='1' width='".$params['width']."'>";
    for($i=0;$i<$rows;$i++){
        $str .="<tr>";
            for($j=0;$j<$cols;$j++){
                $str .="<td>{$content}</td>";
            }


        $str .="</tr>";
    }
     $str .= "</table>";
    return $str;
}

?>