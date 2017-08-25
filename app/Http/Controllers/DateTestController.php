<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DateTestController extends Controller
{
    //
    public function test(){
    	$pdo = DB::connection()->getPdo();
    	dd($pdo);
    }
}
