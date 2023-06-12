<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        //$data['returnarry'] = Test::all();
        // echo "<pre>";
        // print_r($returnarry);
        // echo "</pre>";

        $data['returnarry'] = DB::table('tests')->get();

        return view('test',$data);
    }
}
