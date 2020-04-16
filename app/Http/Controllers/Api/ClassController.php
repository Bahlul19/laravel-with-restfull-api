<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\Class;

class ClassController extends Controller
{
    public function index()
    {
        $class = DB::table('class')->get();
        return response()->json($class);
        // dd($class);
       // return Class::all();
    }
}
