<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Idea;
use Session;
use Redirect;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $idea = new Idea();
        return view('welcome', [
            'idea' => $idea,
        ]);
    }
    
     public function confirmName(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|',
        ]);
        
        //入力をセッションに保存する。
        if($request->has('name')){
            $name = $request->name;
            Session::put('name', $name);
        }
        
        $idea = new Idea();
    
        if(Session::has('problem')){
            $idea->problem = Session::get('problem');
        } 
        if(Session::has('content')){
            $idea->content = Session::get('content');
        }
        return view('ideas.create', [
                'idea' => $idea,
        ]);
    }
        
    /**     if (Session::has('name') && Session::has('problem') && Session::has('content')) {
            //全項目入力されてる場合
            $idea = new Idea();
            $idea->name = Session::get('name');
            $idea->problem = Session::get('problem');
            $idea->content = Session::get('content');
            return view('confirm', [
                'idea' => $idea,
                ]);
        } else {
            //名前だけを入力した場合とか
            $idea = new Idea();
            return view('ideas.create', [
                'idea' => $idea,
            ]);
        }
    }
    */
    public function confirmIdea(Request $request) 
    {
        if($request->has('problem') && $request->has('content')){
            $problem = $request->problem;
            $content = $request->content;
            Session::put('problem', $problem);
            Session::put('content', $content);
        }
        
        $idea = new Idea();
        $idea->name = Session::get('name');
        $idea->problem = Session::get('problem');
        $idea->content = Session::get('content');
        return view('confirm', [
                'idea' => $idea,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
}
