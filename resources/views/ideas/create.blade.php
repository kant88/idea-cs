extends('layouts.app')

@section('content')

<div class="container-fluid">
    
    <div class="row">
        <h1>アイデア新規作成ページ</h1>
        <h4>-{{$pcat}}-</h4>
       
        {!! Form::model($idea, ['route' => 'confirmIdeapost']) !!}
        <div class="form-group" style= margin-top:40px;>
            {!! Form::label('select_what', '次のうち、あなたの考えているアイデアのカテゴリーに最も近いもの1つを選択してください。') !!}
            {!! Form::select('select_what', ['' => '選択してください']+array_values($whats) , null, ['class' => 'form-control',  'onchange'=>"selectwhats(this);", 'id'=>'question1']) !!}
        </div>

        <div class="col-md-offset-1 col-md-10 col-md-offset-1" id="hintSpace" style= margin-top:10px;>
                <h4 style= visibility:hidden;>課題が「{{$pcat}}」で、「<ins id="question"></ins>」に関するアイデアによくある質問</h4>
                <h4><span class="glyphicon glyphicon-warning-sign">　課題・アイデアを書く際に、以下の質問についても考えてみてください。</span></h4>
            @for ($i = 0; $i < count($whats); $i++)
                @if ($idea->select_pcat == 3)
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
        <div class="col-md-offset-1 col-md-10 col-md-offset-1" style="line-height:2.5;">
            <div class="form-group" style="margin-top:10px">
            {!! Form::label('problem', '問1．あなたが感じる、あなたの職場の問題点はなんでしょうか。') !!}
            {!! Form::textarea('problem', $idea->problem, ['class' => 'form-control', 'rows' => 5, 'placeholder'=>"職場の問題点"]) !!}
            </div>
            <div class="form-group">
            {!! Form::label('content', '問2．課題を解決するためのアイデアをご記入ください。') !!}
            {!! Form::textarea('content', $idea->content, ['class' => 'form-control', 'rows' => 5, 'placeholder'=>"アイデア"]) !!}
            </div>
        </div>
        
        </div>
            <div class="col-md-offset-1 col-md-10 col-md-offset-1" style="margin-top:30px; margin-bottom:30px;">
                {!! Form::submit('投稿', ['class'=> 'btn btn-success btn-lg btn-block']) !!}
            </div>
                {!! Form::close() !!}
        </div>
    </div>
    
    @foreach ($ideas as $idea)
    <div style="padding-left:1rem; padding-right:1rem;">
        <table class="table table-striped table-bordered" style="table-layout: fixed;">
            <tr><th style="width:5%;">id</th><th style="width:45%;">課題</th><th style="width:45%;">アイデア</th></tr>
            <tr><td>{{$idea->id}}</td><td>{{$idea->problem}}</td><td>{{$idea->content}}</td></tr>
        </table>
    </div>
    @endforeach
    
    <script src="{{asset('/js/question.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('/css/tab.css') }}">
-
@endsection