<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateUserRequest;

use App\Models\User;

use App\Models\JobPosition;

use App\Models\Relation;

use Illuminate\Support\Facades\DB;

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

    public function store(CreateUserRequest $request) {
        $validated = $request->validated();

        $employeeId = ''; $bossId = '';

        $newUser = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'type' => $request->user_type,
            'job_position_id' => $request->job
        ]);

        if ('boss' === $request->user_type) {

            $bossId = (int) $newUser->id;

            // if no employees were selected we assign one by default
            if (is_null($request->employee_list) || !isset($request->employee_list)) {

                $employeeId = [1];

            } else {
                $employeeId = $request->employee_list;
            }

        } else {

            $bossId = (int) $request->boss_list;

            $employeeId = [$newUser->id];

        }

        foreach ($employeeId as $id) {

            Relation::create([
                'boss_id' => $bossId,
                'employee_id' => (int) $id
            ]);

        }

        @session()->flash('success', 'Category created successfully.');

        return redirect('/test');
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
            'jobs' => $jobPosition->getJobs(),
            'bossEmployeeHistory' => $bossEmployeeHistory->getBossEmployeeHistory()
        ]);
    }

}
