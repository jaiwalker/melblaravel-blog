<?php

namespace melblaravel\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use melblaravel\Http\Requests;
use melblaravel\Http\Controllers\Controller;
use melblaravel\Posts;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Posts::where('created_at', '<=', Carbon::now())
                        ->orderBy('created_at', 'desc')
                        ->paginate(5);
        
        return view('pages.home',compact('blogs'));
    }

    public function userPosts($userid)
    {
        $blogs = $this->getBlogsByUserId($userid);
        if(count($blogs) == 0 ) abort(403, 'Unauthorized action.');
        
        return view('pages.home',compact('blogs'));
    }


    public function adminPosts($userid)
    {
        $blogs = $this->getBlogsByUserId($userid);
        return view('pages.admin.blog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 
        if (Auth::check() ) {
            
            return View('pages.admin.createblog');
            
                // The user is logged in...
        }
        
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
        //
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
        //
    }

    private function getBlogsByUserId($userid)
    {
        $blogs = Posts::where('user_id', '=', $userid)
                ->orderBy('created_at', 'desc')
                ->paginate(5);
        if (count($blogs) == 0) abort(403, 'Unauthorized action.');
        return $blogs;
    }
}
