@extends('layouts.app')

@section('content')

<div class="container-fluid">
    
    <div class="row">
        <h1>アイデア新規作成ページ</h1>
       
        {!! Form::model($idea, ['route' => 'confirmIdeapost']) !!}
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
        
        <div class="col-md-offset-1 col-md-10 col-md-offset-1" style="margin-top:30px; margin-bottom:30px;">
            {!! Form::submit('投稿', ['class'=> 'btn btn-success btn-lg btn-block']) !!}
        </div>
            {!! Form::close() !!}
    </div>
</div>

    <script src="{{asset('/js/question.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('/css/tab.css') }}">
-
@endsection