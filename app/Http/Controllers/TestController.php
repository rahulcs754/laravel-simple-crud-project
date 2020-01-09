<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testFunction($user_id,$skill_id){
     
        #echo 'user id : '.$user_id.' Skill id :'.$skill_id; 
        return view('test')->with([
            'user_id' => $user_id,
            'skill_id' => $skill_id
        ]);
    }
}
