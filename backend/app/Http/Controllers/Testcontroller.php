<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class Testcontroller extends Controller
{
    public function index()
    {
        $values = Test::all();
        $tests = DB::table('tests')
            ->select('id')
            ->get();
        dd($values);

        return view('tests.test', compact('values'));
    }
}
