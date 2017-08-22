<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

use App\Idea;
use Session;

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
        $idea->name = Session::get('name');
        return view('welcome', [
            'idea' => $idea,
        ]);
    }
    
     
    public function confirmNamepost(Request $request)
    {
        if(!(Session::has('name'))){
            $this->validate($request, [
              'name' => 'required',
        ]);
        }
        //入力をセッションに保存する。
        if($request->has('name')){
            $name = $request->name;
            Session::put('name', $name);
        }
        
        $select_pcat = $request->select_pcat;
        Session::put('select_pcat', $select_pcat);
    
        return redirect()->action('WelcomeController@confirmNameget');
    }
        
        
    public function confirmNameget() {
        
        $idea = new Idea();
        $idea->problem = Session::get('problem');
        $idea->content = Session::get('content');
        $idea->select_pcat = Session::get('select_pcat');
        //$categoryname = categoryName($idea->select_pcat);
        $ideas = Idea::where('originallity', '>=', 2)
                     ->where('pcat1', '=', $idea->select_pcat)
                     ->orWhere('pcat2', '=', $idea->select_pcat)
                     ->orWhere('pcat3', '=', $idea->select_pcat)
                     ->orderBy('originallity', 'desc')
                     ->take(3)
                     ->get();
        switch ($idea->select_pcat) {
            case 3 :
                $pcat ="職場の雰囲気";
                $whats = ["雰囲気や気分をよくする工夫","コミュニケーションや情報の見える化","教育訓練","人材の配置","その他"];
                break;
            case 4 :
                $pcat ="不平等感、不信感";
                $whats = ["雰囲気や気分をよくする工夫","コミュニケーションや情報の見える化","教育訓練","人材の配置","その他"];
                break;
            case 5 :
                $pcat ="コミュニケーション";
                $whats = ["雰囲気や気分をよくする工夫","コミュニケーションや情報の見える化","教育訓練","人材の配置","その他"];
                break;
            case 6 :
                $pcat ="ハラスメント";
                $whats = ["雰囲気や気分をよくする工夫","コミュニケーションや情報の見える化","教育訓練","人材の配置","その他"];
                break;
            case 7 :
                $pcat ="制度の整備が不十分";
                $whats = ["制度の導入","制度の廃止","制度の改善","その他"];
                break;
            case 8 :
                $pcat ="人材の確保、育成";
                $whats = ["雰囲気や気分をよくする工夫","コミュニケーションや情報の見える化","教育訓練","人材の配置","その他"];
                break;
            case 9 :
                $pcat ="非効率的な体制・慣習";
                $whats = ["雰囲気や気分をよくする工夫","コミュニケーションや情報の見える化","教育訓練","人材の配置","その他"];
                break;
            case 10 :
                $pcat ="過大な負担";
                $whats = ["雰囲気や気分をよくする工夫","コミュニケーションや情報の見える化","教育訓練","人材の配置","その他"];
                break;
            case 11 :
                $pcat ="周囲の環境";
                $whats = ["雰囲気や気分をよくする工夫","コミュニケーションや情報の見える化","教育訓練","人材の配置","その他"];
                break;
        }
        
        
/*        return view('ideas.create', [
            'idea' => $idea, 
            'ideas' => $ideas,
        ])->with('pcat', $pcat);    */
        return view('ideas.create', compact('idea','ideas','pcat','whats')); 
    }
    
    public function confirmIdeapost(Request $request) 
    {
        $this->validate($request, [
              'problem' => 'required|min:30|max:1000',
              'content' => 'required|min:30|max:1000',
        ]);
      
        if($request->has('problem') && $request->has('content')){
            $problem = $request->problem;
            $content = $request->content;
            Session::put('problem', $problem);
            Session::put('content', $content);
        }
        
        return redirect()->action('WelcomeController@confirmIdeaget');
    }
    
    public function confirmIdeaget() 
    {
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
    
    /**
    public function categoryName($num) {
        switch ($num) {
            case 3 :
                $pcat ="人間関係の不和";
                break;
            case 4 :
                $pcat ="不平等感、不信感";
                break;
            case 5 :
                $pcat ="コミュニケーション";
                break;
            case 6 :
                $pcat ="職場の雰囲気 ";
                break;
            case 7 :
                $pcat ="ハラスメント";
                break;
            case 8 :
                $pcat ="制度の整備が不十分";
                break;
            case 9 :
                $pcat ="人材の確保、育成";
                break;
            case 10 :
                $pcat ="非効率的な体制・慣習";
                break;
            case 11 :
                $pcat ="過大な負担";
                break;
            case 12 :
                $pcat ="周囲の環境";
                break;
        }
    }
    */
}
