<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\Students;

class StudentController extends Controller
{
    public function index()
    {
        return Students::all();
    }
}
