<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function isValidVal($val){
        return (isset($val) && !empty($val) ? $val : null);
    }
}
