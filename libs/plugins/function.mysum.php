<?php
// 在smarty中插件目录中自定义内置函数



function smarty_function_mysum($params, $template)
{   
    $sum = 0;
        for($i=0;$i<=$params["m"];$i++){
                // $param["m"] m就是一会要传递参数的名字 对应的值 
            $sum+=$i;
        }

        return $sum;
}

?>