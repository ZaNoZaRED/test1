<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\View;

class AppealController extends Controller
{
    
    public function index()
    {
        $appeal = DB::select('select * from users where active = ?', [1]);

        return view('appeal', ['appeal' => $appeal]);
    }
}
