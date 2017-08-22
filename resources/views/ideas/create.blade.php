@extends('layouts.app')

@section('content')


<div class="container-fluid">
    
    <div class="row">
        <!--
        <div class="col-xs-2">
            <ul class="nav nav-pills nav-stacked">
                <li>{!! link_to_route('ideas.index', 'アイデア一覧') !!}</li>
                <li><a href="#">menu2</a></li>
                <li><a href="#">menu3</a></li>
                <li><a href="#">menu4</a></li>
            </ul>
        </div>
        
        <div class="col-xs-10">
        -->
    <!--    ["{$whats[0]}","{$whats[1]}","{$whats[2]}","{$whats[3]}","{$whats[4]}"] -->
        <h1>アイデア新規作成ページ</h1>
        <h4>-{{$pcat}}-</h4>
        
        {!! Form::model($idea, ['route' => 'confirmIdeapost']) !!}
            <div class="form-group" style= margin-top:40px;>
                {!! Form::label('select_what', 'アイデアのヒント') !!}
                {!! Form::select('select_what', array_values($whats) , null, ['class' => 'form-control', 'multiple' => 'multiple', 'onchange'=>"selectwhats(this);", 'id'=>'question1']) !!}
            </div>
            
            <div id="hintSpace" style= margin-top:30px;>
                <h5>課題が「{{$pcat}}」で、「<ins id="question"></ins>」に関するアイデアによくある質問</h5>
            @for ($i = 0; $i < count($whats); $i++)
                @if ($idea->select_pcat == 3)
                    <div id = "whats0">
                    <ul>
                        <li>どうして</li>
                        <li>だれを</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>どして</li>
                        <li>れを</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 4)
                <div id = "whats0">
                    <ul>
                        <li>どうして</li>
                        <li>だれを</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>どして</li>
                        <li>れを</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 5)
                <div id = "whats0">
                    <ul>
                        <li>どうして</li>
                        <li>だれを</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>どして</li>
                        <li>れを</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 6)
                <div id = "whats0">
                    <ul>
                        <li>どうして</li>
                        <li>だれを</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>どして</li>
                        <li>れを</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 7)
                <div id = "whats0">
                    <ul>
                        <li>どうして</li>
                        <li>だれを</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>どして</li>
                        <li>れを</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 8)
                <div id = "whats0">
                    <ul>
                        <li>どうして</li>
                        <li>だれを</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>どして</li>
                        <li>れを</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 9)
                <div id = "whats0">
                    <ul>
                        <li>どうして</li>
                        <li>だれを</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>どして</li>
                        <li>れを</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 10)
                <div id = "whats0">
                    <ul>
                        <li>どうして</li>
                        <li>だれを</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>どして</li>
                        <li>れを</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 11)
                <div id = "whats0">
                    <ul>
                        <li>どうして</li>
                        <li>だれを</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>どして</li>
                        <li>れを</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                @endif
                @if ($idea->select_pcat == 12)
                <div id = "whats0">
                    <ul>
                        <li>どうして</li>
                        <li>だれを</li>
                    </ul>
                    </div>
                    <div id = "whats1">
                    <ul>
                        <li>どして</li>
                        <li>れを</li>
                    </ul>
                    </div>
                    <div id = "whats2">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats3">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                    <div id = "whats4">
                    <ul>
                        <li>どうし</li>
                        <li>だれ</li>
                    </ul>
                    </div>
                @endif
            @endfor
            </div>
            
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-md-offset-1" style="line-height:2.5;">
                    <div class="form-group" style="margin-top:10px">
                    {!! Form::label('problem', '課題:') !!}
            　　      {!! Form::textarea('problem', $idea->problem, ['class' => 'form-control', 'rows' => 5, 'placeholder'=>"あなたが感じる、あなたの職場の問題点はなんでしょうか。"]) !!}
                    </div>
                    <div class="form-group">
                    {!! Form::label('content', 'アイデア:') !!}
                　　{!! Form::textarea('content', $idea->content, ['class' => 'form-control', 'rows' => 5, 'placeholder'=>"課題を解決するためのアイデアをご記入ください。"]) !!}
                    </div>
                    <div style="margin-top:30px">
                        {!! Form::submit('投稿', ['class'=> 'btn btn-success btn-lg']) !!}
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
    
    <h3 style="margin-top:50px;">過去のアイデア例</h3>
    <!--
    <div class="tabs-menu" style="margin-top:40px;">
      <div id="tab-menu-a">アイデア1</div>
      <div id="tab-menu-b">アイデア2</div>
      <div id="tab-menu-c">アイデア3</div>
    </div>
    <div class="tabs-content" style="margin-bottom:50px;">
      <div id="tabs-a">
        <table class="table table-striped table-bordered" style="table-layout: fixed;">
            <tr><th style="width:5%;">id</th><th style="width:45%;">課題</th><th style="width:45%;">アイデア</th></tr>
            <tr><td>{{$ideas[0]->id}}</td><td>{{$ideas[0]->problem}}</td><td>{{$ideas[0]->content}}</td></tr>
        </table>
      </div>
      <div id="tabs-b">
        <table class="table table-striped table-bordered" style="table-layout: fixed;">
            <tr><th style="width:5%;">id</th><th style="width:45%;">課題</th><th style="width:45%;">アイデア</th></tr>
            <tr><td>{{$ideas[1]->id}}</td><td>{{$ideas[1]->problem}}</td><td>{{$ideas[1]->content}}</td></tr>
        </table>
      </div>
      <div id="tabs-c">
        <table class="table table-striped table-bordered" style="table-layout: fixed;">
            <tr><th style="width:5%;">id</th><th style="width:45%;">課題</th><th style="width:45%;">アイデア</th></tr>
            <tr><td>{{$ideas[2]->id}}</td><td>{{$ideas[2]->problem}}</td><td>{{$ideas[2]->content}}</td></tr>
        </table>
      </div>
    </div>
    -->
    @if (count($ideas) > 0)
        @foreach ($ideas as $idea)
        <table class="table table-striped table-bordered" style="table-layout: fixed;">
            <tr><th style="width:5%;">id</th><th style="width:45%;">課題</th><th style="width:45%;">アイデア</th></tr>
            <tr><td>{{$idea->id}}</td><td>{{$idea->problem}}</td><td>{{$idea->content}}</td></tr>
        </table>
        @endforeach
    @endif
    
    <script src="{{asset('/js/question.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('/css/tab.css') }}">
<!--
    </div>
</div>
-->
@endsection