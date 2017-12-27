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
        
        switch ($idea->select_pcat) {
            case 3 :
                $pcat ="職場の雰囲気";
                $whats = ["ルール作りや習慣化","コミュニケーションや情報の見える化","人材の教育・訓練","人材の配置","その他"];
                break;
            case 4 :
                $pcat ="不平等感、不信感";
                $whats = ["ルール作りや習慣化","コミュニケーションや情報の見える化","人材の教育・訓練","人材の配置","その他"];
                break;
            case 5 :
                $pcat ="コミュニケーション";
                $whats = ["ルール作りや習慣化","コミュニケーションや情報の見える化","人材の教育・訓練","人材の配置","その他"];
                break;
            case 6 :
                $pcat ="ハラスメント";
                $whats = ["ルール作りや習慣化","コミュニケーションや情報の見える化","人材の教育・訓練","人材の配置","その他"];
                break;
            case 7 :
                $pcat ="制度の整備が不十分";
                $whats = ["制度の導入","制度の廃止","ツールの導入・効率化","人材の育成・活用","その他"];
                break;
            case 8 :
                $pcat ="人材の確保、育成";
                $whats = ["制度の導入","制度の廃止","ツールの導入・効率化","人材の育成・活用","その他"];
                break;
            case 9 :
                $pcat ="非効率的な体制・慣習";
                $whats = ["制度の導入","制度の廃止","ツールの導入・効率化","人材の育成・活用","その他"];
                break;
            case 10 :
                $pcat ="過大な負担";
                $whats = ["制度の導入","制度の廃止","ツールの導入・効率化","人材の育成・活用","その他"];
                break;
            case 11 :
                $pcat ="周囲の環境";
                $whats = ["制度の導入","制度の廃止","ツールの導入・効率化","人材の育成・活用","その他"];
                break;
        }
        Session::put('pcat', $pcat);
        return view('ideas.create', compact('idea','ideas','whats'))->with('pcat', $pcat); 
    }
    
    public function confirmIdeapost(Request $request) 
    {
        $this->validate($request, [
              'problem' => 'required|min:30|max:1000',
              'content' => 'required|min:30|max:1000',
              'select_what' => 'required',
        ]);
      
        if($request->has('problem') && $request->has('content')){
            $problem = $request->problem;
            $content = $request->content;
            $select_what = $request->select_what;
            Session::put('problem', $problem);
            Session::put('content', $content);
            Session::put('select_what', $select_what);
        }
        
        return redirect()->action('WelcomeController@confirmIdeaget');
    }
    
    public function confirmIdeaget() 
    {
        $idea = new Idea();
        $idea->name = Session::get('name');
        $idea->problem = Session::get('problem');
        $idea->content = Session::get('content');
        $idea->select_pcat = Session::get('select_pcat');
        $idea->select_what = Session::get('select_what');
        $question = [];
        switch ($idea->select_pcat) {
            case 3 :
                $question[0] ="雰囲気が悪い、というのは一体なにが原因なのか、はっきりさせることはできるでしょうか？";
                break;
            case 4 :
                $question[0] ="問題となっている人はなぜ問題となるような行動をとるのでしょうか？";
                break;
            case 5 :
                $question[0] ="コミュニケーションがうまくいっていない原因は明らかにされているでしょうか？";
                break;
            case 6 :
                $question[0] ="問題になっている人の立場に立つと、何が問題になっていると言えそうでしょうか？";
                break;
            case 7 :
                $question[0] ="そもそも今のような制度になっているのはなぜでしょうか？";
                break;
            case 8 :
                $question[0] ="なぜ人が辞めてしまうとか、人の採用が足りないといった状況になっているのでしょうか？";
                break;
            case 9 :
                $question[0] ="そもそもなぜ現在のような慣習があるのでしょうか？";
                break;
            case 10 :
                $question[0] ="なぜそのような負担が生まれているのでしょうか？";
                break;
            case 11 :
                $question[0] ="そもそも周囲の環境がよくならない理由は何でしょうか？";
                break;
        }
        if ($idea->select_pcat <= 6 ) {
        switch ($idea->select_what) {
            case 0 :
                $question[1] ="あなたの考えたルールや習慣は職場に定着させることができる形になっていますか？";
                break;
            case 1 :
                $question[1] ="コミュニケーション改善のためのアイデアを職場に定着させるにはどうすればよいでしょうか？";
                break;
            case 2 :
                $question[1] ="誰かを教育するとなると、アイデアの実行には協力者が必要と思いますが、どうすれば協力者は動いてくれるでしょうか？";
                break;
            case 3 :
                $question[1] ="誰かの配置を動かすとなると、アイデアの実行には協力者が必要と思いますが、どうすれば協力者は動いてくれるでしょうか？";
                break;
            case 4 :
                $question[1] ="アイデアの実行に協力してもらったり、他の職場の人にアイデアを利用してもらうためには、どのような工夫が必要でしょうか？";
                break;
        }
        }
        if ($idea->select_pcat > 6 ){
        switch ($idea->select_what) {
            case 0 :
                $question[1] ="制度の導入に反対する人がいるならば、その人をどのように納得させることができるでしょうか？";
                break;
            case 0 :
                $question[1] ="制度の廃止に反対する人がいるならば、その人をどのように納得させることができるでしょうか？";
                break;
            case 0 :
                $question[1] ="アイデアを導入することに対する職場の人たちのモチベーションをどうすれば引き上げることができるでしょうか？";
                break;
            case 0 :
                $question[1] ="どうすれば望ましい人を育成・活用できるようになるでしょうか？";
                break;
            case 0 :
                $question[1] ="会社にとっても社員にとっても魅力的に感じられるような制度・文化にするにはどうすればよいでしょうか？";
                break;
        }
        }
        return view('confirm', compact('idea','question')) ;
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
    <div id = "whats0">
                <ul>
                    <li>雰囲気が悪い、というのは一体なにが原因なのか、はっきりさせることはできるでしょうか？</li>
                    <li>ルールや習慣を職場に定着させるにはどうすればよいでしょうか？</li>
                </ul>
                </div>
                <div id = "whats1">
                <ul>
                    <li>雰囲気が悪い、というのは一体なにが原因なのか、はっきりさせることはできるでしょうか？</li>
                    <li>コミュニケーション改善のためのアイデアを職場に定着させるにはどうすればよいでしょうか？</li>
                </ul>
                </div>
                <div id = "whats2">
                <ul>
                    <li>雰囲気が悪い、というのは一体なにが原因なのか、はっきりさせることはできるでしょうか？</li>
                    <li>誰かを教育するとなると、アイデアの実行には協力者が必要と思いますが、どうすれば協力者は動いてくれるでしょうか？</li>
                </ul>
                </div>
                <div id = "whats3">
                <ul>
                    <li>雰囲気が悪い、というのは一体なにが原因なのか、はっきりさせることはできるでしょうか？</li>
                    <li>誰かの配置を動かすとなると、アイデアの実行には協力者が必要と思いますが、どうすれば協力者は動いてくれるでしょうか？</li>
                </ul>
                </div>
                <div id = "whats4">
                <ul>
                    <li>雰囲気が悪い、というのは一体なにが原因なのか、はっきりさせることはできるでしょうか？</li>
                    <li>アイデアの実行に協力してもらったり、他の職場の人にアイデアを利用してもらうためには、どのような工夫が必要でしょうか？</li>
                </ul>
                </div>
                @endif
                @if ($idea->select_pcat == 4)
                <div id = "whats0">
                <ul>
                    <li>問題となっている人はなぜ問題となるような行動をとるのでしょうか？</li>
                    <li>ルールや習慣を職場に定着させるにはどうすればよいでしょうか？</li>
                </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>問題となっている人はなぜ問題となるような行動をとるのでしょうか？</li>
                        <li>コミュニケーション改善のためのアイデアを職場に定着させるにはどうすればよいでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>問題となっている人はなぜ問題となるような行動をとるのでしょうか？</li>
                        <li>誰かを教育するとなると、アイデアの実行には協力者が必要と思いますが、どうすれば協力者は動いてくれるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>問題となっている人はなぜ問題となるような行動をとるのでしょうか？</li>
                        <li>誰かの配置を動かすとなると、アイデアの実行には協力者が必要と思いますが、どうすれば協力者は動いてくれるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>問題となっている人はなぜ問題となるような行動をとるのでしょうか？</li>
                        <li>アイデアの実行に協力してもらったり、他の職場の人にアイデアを利用してもらうためには、どのような工夫が必要でしょうか？</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 5)
                    <div id = "whats0">
                    <ul>
                        <li>コミュニケーションがうまくいっていない原因は明らかにされているでしょうか？</li>
                        <li>ルールや習慣を職場に定着させるにはどうすればよいでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>コミュニケーションがうまくいっていない原因は明らかにされているでしょうか？</li>
                        <li>コミュニケーション改善のためのアイデアを職場に定着させるにはどうすればよいでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>コミュニケーションがうまくいっていない原因は明らかにされているでしょうか？</li>
                        <li>誰かを教育するとなると、アイデアの実行には協力者が必要と思いますが、どうすれば協力者は動いてくれるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>コミュニケーションがうまくいっていない原因は明らかにされているでしょうか？</li>
                        <li>誰かの配置を動かすとなると、アイデアの実行には協力者が必要と思いますが、どうすれば協力者は動いてくれるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>コミュニケーションがうまくいっていない原因は明らかにされているでしょうか？</li>
                        <li>アイデアの実行に協力してもらったり、他の職場の人にアイデアを利用してもらうためには、どのような工夫が必要でしょうか？</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 6)
                    <div id = "whats0">
                    <ul>
                        <li>問題になっている人の立場に立つと、何が問題になっていると言えそうでしょうか？</li>
                        <li>ルールや習慣を職場に定着させるにはどうすればよいでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>問題になっている人の立場に立つと、何が問題になっていると言えそうでしょうか？</li>
                        <li>コミュニケーション改善のためのアイデアを職場に定着させるにはどうすればよいでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>問題になっている人の立場に立つと、何が問題になっていると言えそうでしょうか？</li>
                        <li>誰かを教育するとなると、アイデアの実行には協力者が必要と思いますが、どうすれば協力者は動いてくれるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>問題になっている人の立場に立つと、何が問題になっていると言えそうでしょうか？</li>
                        <li>誰かの配置を動かすとなると、アイデアの実行には協力者が必要と思いますが、どうすれば協力者は動いてくれるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>問題になっている人の立場に立つと、何が問題になっていると言えそうでしょうか？</li>
                        <li>アイデアの実行に協力してもらったり、他の職場の人にアイデアを利用してもらうためには、どのような工夫が必要でしょうか？</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 7)
                    <div id = "whats0">
                    <ul>
                        <li>そもそも今のような制度になっているのはなぜでしょうか？</li>
                        <li>制度の導入に反対する人がいるならば、その人をどのように納得させることができるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>そもそも今のような制度になっているのはなぜでしょうか？</li>
                        <li>制度の廃止に反対する人がいるならば、その人をどのように納得させることができるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>そもそも今のような制度になっているのはなぜでしょうか？</li>
                        <li>アイデアを導入することに対する職場の人たちのモチベーションをどうすれば引き上げることができるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>そもそも今のような制度になっているのはなぜでしょうか？</li>
                        <li>どうすれば望ましい人を育成・活用できるようになるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>そもそも今のような制度になっているのはなぜでしょうか？</li>
                        <li>会社にとっても社員にとっても魅力的に感じられるような制度・文化にするにはどうすればよいでしょうか？</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 8)
                    <div id = "whats0">
                    <ul>
                        <li>なぜ人が辞めてしまうとか、人の採用が足りないといった状況になっているのでしょうか？</li>
                        <li>制度の導入に反対する人がいるならば、その人をどのように納得させることができるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>なぜ人が辞めてしまうとか、人の採用が足りないといった状況になっているのでしょうか？</li>
                        <li>制度の廃止に反対する人がいるならば、その人をどのように納得させることができるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>なぜ人が辞めてしまうとか、人の採用が足りないといった状況になっているのでしょうか？</li>
                        <li>アイデアを導入することに対する職場の人たちのモチベーションをどうすれば引き上げることができるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>なぜ人が辞めてしまうとか、人の採用が足りないといった状況になっているのでしょうか？</li>
                        <li>どうすれば望ましい人を育成・活用できるようになるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>なぜ人が辞めてしまうとか、人の採用が足りないといった状況になっているのでしょうか？</li>
                        <li>会社にとっても社員にとっても魅力的に感じられるような制度・文化にするにはどうすればよいでしょうか？</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 9)
                    <div id = "whats0">
                    <ul>
                        <li>そもそもなぜ現在のような慣習があるのでしょうか？</li>
                        <li>制度の導入に反対する人がいるならば、その人をどのように納得させることができるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>そもそもなぜ現在のような慣習があるのでしょうか？</li>
                        <li>制度の廃止に反対する人がいるならば、その人をどのように納得させることができるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>そもそもなぜ現在のような慣習があるのでしょうか？</li>
                        <li>アイデアを導入することに対する職場の人たちのモチベーションをどうすれば引き上げることができるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>そもそもなぜ現在のような慣習があるのでしょうか？</li>
                        <li>どうすれば望ましい人を育成・活用できるようになるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>そもそもなぜ現在のような慣習があるのでしょうか？</li>
                        <li>会社にとっても社員にとっても魅力的に感じられるような制度・文化にするにはどうすればよいでしょうか？</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 10)
                    <div id = "whats0">
                    <ul>
                        <li>根本的に、なぜそのような負担が生まれているのでしょうか？</li>
                        <li>制度の導入に反対する人がいるならば、その人をどのように納得させることができるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>根本的に、なぜそのような負担が生まれているのでしょうか？</li>
                        <li>制度の廃止に反対する人がいるならば、その人をどのように納得させることができるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>根本的に、なぜそのような負担が生まれているのでしょうか？</li>
                        <li>アイデアを導入することに対する職場の人たちのモチベーションをどうすれば引き上げることができるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>根本的に、なぜそのような負担が生まれているのでしょうか？</li>
                        <li>どうすれば望ましい人を育成・活用できるようになるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>根本的に、なぜそのような負担が生まれているのでしょうか？</li>
                        <li>会社にとっても社員にとっても魅力的に感じられるような制度・文化にするにはどうすればよいでしょうか？</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 11)
                    <div id = "whats0">
                    <ul>
                        <li>そもそも周囲の環境がよくならない理由は何でしょうか？</li>
                        <li>制度の導入に反対する人がいるならば、その人をどのように納得させることができるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>そもそも周囲の環境がよくならない理由は何でしょうか？</li>
                        <li>制度の廃止に反対する人がいるならば、その人をどのように納得させることができるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>そもそも周囲の環境がよくならない理由は何でしょうか？</li>
                        <li>アイデアを導入することに対する職場の人たちのモチベーションをどうすれば引き上げることができるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>そもそも周囲の環境がよくならない理由は何でしょうか？</li>
                        <li>どうすれば望ましい人を育成・活用できるようになるでしょうか？</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>そもそも周囲の環境がよくならない理由は何でしょうか？</li>
                        <li>会社にとっても社員にとっても魅力的に感じられるような制度・文化にするにはどうすればよいでしょうか？</li>
                    </ul>
                    </div>
                @endif
            @endfor
            </div>
            */
}
