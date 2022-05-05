<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Train;

class HomeController extends Controller
{
    public function Index() {
        $trains = Train::all();
        $data = [
            'data' => $trains
        ];
        // dd($trains);
        return view('home', $data);
    }
}
