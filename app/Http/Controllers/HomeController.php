<?php

namespace App\Http\Controllers;

use App\GfuManualTable;
use Auth;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($request->get('isValid') === '1'){
            $projects = Auth::user()->projects;
            return view('home', ['projects' => $projects]);
        }
        abort(403);

    }

    public function showIndex(Request $request){
        return view('welcome');
    }
}
