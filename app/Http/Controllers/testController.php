<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\JobPosition;

use App\Models\Relation;

class testController extends Controller
{

    /**
     * @param int $quantity
     * @return string
     */
    public function getFibonnaciNumbers($quantity) {
        $f1 = 0;
        $f2 = 1;
        $result = [];

        $result[] = $f1;
        $result[] = $f2;

        for($i = 1; $i <= $quantity; $i++) {
            $f3 = $f1 + $f2;
            $f1 = $f2;
            $f2 = $f3;
            $result[] = $f3;
        }

        return $result;
    }

    /**
     * @param int $year
     * @return bool
     */
    public function isLeapYear($year) {
        $result = false;

        if (($year % 400 == 0) || (($year % 100 == 0) && ($year % 4 == 0))) {
            $result = true;
        }

        return $result;
    }


    /**
     * @param string $text
     * @return string
     */
    public function getHexText($text) {
        $result = '';

        return bin2hex($text);
    }

    public function index()
    {
        $isLeapYear = $this->isLeapYear(date('Y'));

        $fibonnaciNumbers = $this->getFibonnaciNumbers(30);

        $myNameInHex = $this->getHexText('Joaquin');

        $jobPosition = new JobPosition;

        $bossEmployeeHistory = new Relation;

        return view('test')->with([
            'leapYear' => $isLeapYear,
            'fibonnaciNumbers' => $fibonnaciNumbers,
            'myNameInHex' => $myNameInHex,
            'allUsers' => User::all(),
            'userJobPositions' => $jobPosition->getUserJobPosition(),
            'bossEmployeeHistory' => $bossEmployeeHistory->getBossEmployeeHistory()
        ]);
    }

}
