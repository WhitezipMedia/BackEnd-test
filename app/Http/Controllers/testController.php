<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{

    /**
     * @param int $quantity
     * @return string
     */
    public function getFibonnaciNumbers($quantity) {
        $result = '';
        return $result;
    }

    /**
     * @param int $year
     * @return bool
     */
    public function isLeapYear($year) {
        $result = true;
        return $result;
    }


    /**
     * @param string $text
     * @return string
     */
    public function getHexText($text) {
        $result = '';
        return $result;
    }
}
