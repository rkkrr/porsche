<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Food;
use App\Result;

class InviteController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->invite($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->uninvite($id);
        return redirect()->back();
    }
}

