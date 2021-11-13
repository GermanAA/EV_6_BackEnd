<?php
  
//login
  function getData(){
    $data_file = fopen("../data-1.json","r");
    $data_readed = fread($data_file, filesize("../data-1.json"));
    $data = $data_readed;
    //echo gettype($data);
    fclose($data_file);
    return $data;
  }

  
 
