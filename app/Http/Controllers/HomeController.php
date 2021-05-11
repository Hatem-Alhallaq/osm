<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Models\Post;

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
    public function index()
    {
        $posts = Post::all();
        return view('cp.home')->with('posts',$posts);
    }
    public function cofig_create()
    {
        $posts = Post::all();
        return view('cp.config')->with('posts',$posts);
    }
    public function cofig_store(Request $request)
    {
        //Config::truncate();
//        $settings = Config::all();
//        foreach($settings as $setting){
//            config()->set('settings.' . $settings->key , $request->value);
//        }
//        dd($settings);
        //$settings->site_name = $request->site_name;
        //$settings->site_active = $request->boolean('site_active');

       // $settings->save();
        return view('cp.config');

    }
}
