<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Models\User;
use App\Models\JobPosition;



class testController extends Controller
{

    /**
     * @param int $quantity
     * @return string
     */
    public function getFibonnaciNumbers($quantity) {
        $result = '';
        for ($counter = 0; $counter < $number; $counter++){  
            $result .= Fibonacci($counter).' ';
        }
        return $result;
    }

    /**
     * @param int $year
     * @return bool
     */
    public function isLeapYear($year) {        
        $result = date('L', mktime(0, 0, 0, 1, 1, $year));
        return $result;
    }


    /**
     * @param string $text
     * @return string
     */
    public function getHexText($text) {
        $result = bin2hex($text);
        return $result;
    }


    /**
     *  @param $management_unfcion
     *  @return view one page of chaos requested
     * 
     *  TODO: Refactor into multiple routes, segregrated CRUD using laravel resource sets, create more DRY/SOLID app 
     */
    public function userList($request = false) {

        $users = User::with('job_relation')->get(); 

        /** if POST - user has submitted the Add User form */
        if ($request)
        {
            $post = new Post;
            $post->title = $request->title;
            $post->description = $request->description;
            $post->save();
            return redirect('/')->with('status', 'User has been added.');    
        }

        $positions = JobPosition::all(); 

        return View::make('user_management', [
            'name' => 'Troy',
            'users' => $users,
            'positions' => $positions, 
        ]);
    }
}





/** Recursive function for fibonacci series. */
function Fibonacci($number){
      
    // if and else if to generate first two numbers
    if ($number == 0)
        return 0;    
    else if ($number == 1)
        return 1;    
      
    // Recursive Call to get the upcoming numbers
    else
        return (Fibonacci($number-1) + 
                Fibonacci($number-2));
}