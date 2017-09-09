<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DateTestController extends Controller
{
    // Test getPdo() method to connect mysql to make sure the databses is working
    // public function test(){
    // 	$pdo = DB::connection()->getPdo();
    // 	dd($pdo);
    // }
}
