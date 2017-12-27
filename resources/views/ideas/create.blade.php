@extends('layouts.app')

@section('content')


<div class="container-fluid">
    
    <div class="row">
        <h1>アイデア新規作成ページ</h1>
        <h4>-{{$pcat}}-</h4>
       
        {!! Form::model($idea, ['route' => 'confirmIdeapost']) !!}
        <div class="form-group" style= margin-top:40px;>
            {!! Form::label('select_what', '次のうち、あなたの考えているアイデアのカテゴリーに最も近いもの1つを選択してください。') !!}
            {!! Form::select('select_what', array_values($whats) , null, ['class' => 'form-control',  'onchange'=>"selectwhats(this);", 'id'=>'question1']) !!}
        </div>
        
        <div class="col-md-offset-1 col-md-10 col-md-offset-1" style="line-height:2.5;">
            <div class="form-group" style="margin-top:10px">
            {!! Form::label('problem', '課題:') !!}
            {!! Form::textarea('problem', $idea->problem, ['class' => 'form-control', 'rows' => 5, 'placeholder'=>"あなたが感じる、あなたの職場の問題点はなんでしょうか。"]) !!}
            </div>
            <div class="form-group">
            {!! Form::label('content', 'アイデア:') !!}
            {!! Form::textarea('content', $idea->content, ['class' => 'form-control', 'rows' => 5, 'placeholder'=>"課題を解決するためのアイデアをご記入ください。"]) !!}
            </div>
        </div>
        
        <div>
            <div class="col-md-offset-1 col-md-10 col-md-offset-1" style="margin-top:30px; margin-bottom:30px;">
                {!! Form::submit('次のページへ', ['class'=> 'btn btn-success btn-lg btn-block']) !!}
            </div>
                {!! Form::close() !!}
        </div>
    </div>
    
    <script src="{{asset('/js/question.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('/css/tab.css') }}">
-
@endsection