@extends('layouts.app')

@section('content')
    
<h1>アイデア改善のページ</h1>
<div style="margin-top:20px">
    <div class="col-md-12" style="background-color:rgba(171,255,127,0.4);">
        <h4>課題：{{$idea->problem}}</h4>
        <h4>アイデア：{{$idea->content}}</h4>
    </div>
</div>

<div>
    <h3>次の質問を受けて、職場の課題とアイデアの文章を改善してみてください。</h3>
    <h3>Q1.{{$question[0]}}</h4>
    <h3>Q2.{{$question[1]}}</h4>
</div>
<div>
    <div class="col-md-offset-1 col-md-10 col-md-offset-1" style="line-height:2.5;">
    {!! Form::model($idea, ['route' => 'ideas.store']) !!}
        <div class="form-group" style="margin-top:10px">
        {!! Form::label('problem2', '課題:') !!}
        {!! Form::textarea('problem2', $idea->problem, ['class' => 'form-control', 'rows' => 5, 'placeholder'=>"あなたが感じる、あなたの職場の問題点はなんでしょうか。"]) !!}
        </div>
        <div class="form-group">
        {!! Form::label('content2', 'アイデア:') !!}
        {!! Form::textarea('content2', $idea->content, ['class' => 'form-control', 'rows' => 5, 'placeholder'=>"課題を解決するためのアイデアをご記入ください。"]) !!}
        </div>
    </div>
        
    <div>
        <div class="col-md-offset-1 col-md-10 col-md-offset-1" style="margin-top:30px; margin-bottom:30px;">
            {!! Form::submit('投稿', ['class'=> 'btn btn-success btn-lg btn-block']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>

<!--
<div style="margin-top:20px">
{!! Form::model($idea, ['route' => 'ideas.store']) !!}
    {!! Form::submit('送信する', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
</div>
<div style="margin-top:10px">
{!! link_to_route('confirmNameget', '訂正する', null, ['class' => 'btn btn-warning']) !!}
-->
</div>

@endsection