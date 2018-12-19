<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'post_byggnad'=>'required',
        'post_sal'=>'required',
        'post_typ'=>'required',
        'post_märke'=>'required',
        'post_modell'=>'required',
        'post_serienummer'=>'required',
        'post_stöldnummer'=>'required',
        'post_ägare'=>'required'
      ]);
      $post = new Post([
        'post_byggnad' => $request->get('post_byggnad'),
        'post_sal'=> $request->get('post_sal'),
        'post_typ' => $request->get('post_typ'),
        'post_märke'=> $request->get('post_märke'),
        'post_modell'=> $request->get('post_modell'),
        'post_serienummer' => $request->get('post_serienummer'),
        'post_stöldnummer'=> $request->get('post_stöldnummer'),
        'post_ägare' => $request->get('post_ägare'),
        'post_annteckning'=> $request->get('post_annteckning')
      ]);
      $post->save();
      return redirect('/posts')->with('success', 'Stock has been added');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
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
        //
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
          $post->delete();

          return redirect('/posts')->with('success', 'Stock has been deleted Successfully');
     }
}
