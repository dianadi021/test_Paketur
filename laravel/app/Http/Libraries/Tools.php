<?php

namespace App\Http\Libraries;

class Tools
{
    public function isValidVal($val)
    {
        return (isset($val) && !empty($val) ? $val : null);
    }
}
