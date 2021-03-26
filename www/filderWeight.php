<?php

    $dirname = $_GET['subject']; // указываем полный путь до папки или файла 
    if($dirname == ""){
        echo("Please, enter path");
        return;
    }
    
    $size = dir_size($dirname); //заносим в переменную размер папки или файла
    $formSize = format_size($size); //форматируем вывод
    echo $formSize;
 
    // функция для просмотра всех подпапок и всех вложенных файлов
    function dir_size($dirname) {
        $totalsize=0;
        if ($dirstream = @opendir($dirname)) {
        while (false !== ($filename = readdir($dirstream))) {
            if ($filename!="." && $filename!="..")
            {
                if (is_file($dirname."/".$filename))
                $totalsize+=filesize($dirname."/".$filename);
      
                if (is_dir($dirname."/".$filename))
                $totalsize+=dir_size($dirname."/".$filename);
                }
            }
        }
        closedir($dirstream);
        return $totalsize;
    }
    // функция форматирует вывод размера
    function format_size($size){
         $metrics[0] = 'bites';
         $metrics[1] = 'Kb';
         $metrics[2] = 'Mb';
         $metrics[3] = 'Gb';
         $metrics[4] = 'Tb';
         $metric = 0;         
         while(floor($size/1024) > 0){
             ++$metric;
             $size /= 1024;
         }        
         $ret =  round($size,1)." ".(isset($metrics[$metric])?$metrics[$metric]:'??');
        return $ret;
    }
?>