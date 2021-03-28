<?php
    $dirname = $_GET['subject']; // full path
    if($dirname == ""){
        echo("Please, enter path");
        return;
    }
    $dirname = "O:\OpenServer\domains\pixel123.ru\\".$dirname;
    echo($dirname."\r\n");
    
    $size = dir_size($dirname); 
    $formSize = format_size($size); 
    echo $formSize;
 
    // recurs
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
    
    // formating
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