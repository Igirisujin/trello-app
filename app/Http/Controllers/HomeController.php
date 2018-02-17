<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userGroups = Auth::user()->groups;

        $group = $userGroups->find(1);

        #dd($group->cards->find(1)->tags->find(1)->groupCardTag->name);
        dd($group->cards->find(1)->users);
        #return view('home');
    }
}
