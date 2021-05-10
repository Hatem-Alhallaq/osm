<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = post::all();
        return view('cp.posts')->with('posts',$posts);

    }
    public function competitiones_index()
    {
        //
        $competitiones = post::get()->where('type','10');
        return view('cp.competitiones')->with('competitiones',$competitiones);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cp.newpost');
    }
    public function create_v()
    {
        //
        return view('cp.videopost');
    }
    public function create_ph()
    {
        //
        return view('cp.imagepost');
    }
    public function create_op()
    {
        //
        return view('cp.oppost');
    }
    public function create_competition()
    {
        //
        return view('cp.competition');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $user =  \Auth::user();
       //  dd($user);
        $post = $request->all();
        $post['views'] = 0;
        $post['user_id'] =$user->id;

        $post = Post::create($post);

        return redirect::route('posts.index');

    }
    public function store_op(Request $request)
    {
        $post = $request->all();
        $post['views'] = 0;
        $post = Post::create($post);
        return redirect::route('posts.index');

    }
    public function store_v(Request $request)
    {
        //
         $user =  \Auth::user();
        $image="";
        if(request()->image != null)
        {
            $image = basename(request()['image']->store('posts' , 'public'));
        }
        $post = $request->all();
        $url = $request->video_url;
        $parse = preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
        $youtube_id = $match[1];
        $post['image'] = $image;
        $post['video_url'] = $youtube_id;
        $post['views'] = 0;
         $post['user_id'] =$user->id;
        $post = Post::create($post);

        return redirect::route('posts.index');
    }
    public function store_competition(Request $request)
    {
        $user =  \Auth::user();
        $image="";
        if(request()->image != null)
        {
            $image = basename(request()['image']->store('posts' , 'public'));
        }
        $post = $request->all();
        $post['image'] = $image;
        $post['views'] = 0;
         $post['user_id'] =$user->id;
        $post = Post::create($post);
        return redirect::route('posts.index');
    }
    public function store_ph(Request $request)
    {
        //
         $user =  \Auth::user();
        $image="";
        if(request()->image != null)
        {
            $image = basename(request()['image']->store('posts' , 'public'));
        }
        $post = $request->all();
        $post['image'] = $image;
        $post['views'] = 0;
        $post['user_id'] =$user->id;
        $post = Post::create($post);

        return redirect::route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $competition = post::get()->where('id',$id);
        return view('cp.competitionsingle')->with('competition',$competition);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = post::find($id);
        $type = $post->type;
        //dd($type);
        if($type == 1)
        {
            return view('cp.editnewpost')->with('post',$post);
        }elseif ($type == 2)
        {
            return view('cp.editvideopost')->with('post',$post);

        }elseif ($type == 3)
        {
            return view('cp.editoppost')->with('post',$post);

        }elseif ($type == 4)
        {
            return view('cp.editimagepost')->with('post',$post);

        }elseif ($type == 5)
        {
            return "d";
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = post::get()->where('id', $id);

        if($post)
        {
            $post = post::find($id);
            $post->title = $request->title;
            $post->details = $request->details;
            if(request()->image != null)
            {
                $image = basename(request()['image']->store('posts' , 'public'));
                request()['image'] = $image ;
                $post->image = $image;
            }
            $post->video_url = $request->video_url;
            $post->category_id = $request->category_id;
            $post->update();
            return redirect()->route('posts.index')
            ->with('success',  'Product updated successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if($post)
        {
            $post = Post::find($id);
            $post->delete();
            return redirect::route('posts.index');
        }
        else
        {
            return "404";
        }
    }
}
