<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App;

class DiscController extends Controller
{
    public function showAll()
    {
        $discs = App\Disc::all();
        return view('welcome', compact('discs'));
    }

    public function showById($id)
    {
        $disc = App\Disc::find($id);
        if ($disc) {
            return view('plates.plate', compact('disc'));
        } else {
            $message = 'Пластинка не найдена';
            return view('plates.succesfullUpdate', compact('message'));
        }

    }
}
