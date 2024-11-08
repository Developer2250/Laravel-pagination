<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //paginate method
    public function index()
    {
        $users = User::query()->paginate();
        return view('welcome', [
            'users' => $users,
        ]);
    }

    //simple paginate method
    public function simplePaginate()
    {
        $users = User::query()->simplePaginate();
        return view('welcome', [
            'users' => $users,
        ]);
    }
}
