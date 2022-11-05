<?php

namespace App\Core;

class Debugger
{
    public static function pre($var){
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }
}