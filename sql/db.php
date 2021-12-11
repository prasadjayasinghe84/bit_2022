<?php


class DB {


   public static function link(){
        $link = mysqli_connect('localhost', 'root', '')or die("Couldn't make connection.");
        mysqli_select_db($link, 'bit_project')or die("No DB found");
        
        //var_dump($link);

        return $link;

    }

    


}