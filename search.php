<?php
//遍歷所有檔案的函式
function listFiles($dir){
    $handle=opendir($dir);
    while(false!==($file=readdir($handle))){
        if($file!="."&;&;$file!=".."){
        //如果是目錄就繼續搜尋
            if(is_dir("$dir/$file")){
                listFiles("$dir/$file");
            }
            else{
                
            }
        }   
    }
}

?>