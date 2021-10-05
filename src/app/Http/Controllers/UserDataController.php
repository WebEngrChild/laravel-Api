<?php

namespace App\Http\Controllers;
use App\User;
use App\Project;
use App\Department;

use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function getprojects()
    {
        $user = new User();
        $res = $user->projects()->get();
        $res = $user->get();
        dd($res);
    }
}
