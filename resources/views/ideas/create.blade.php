@extends('layouts.app')

@section('content')
<!--
<div class="container-fluid">
    
    <div class="row">
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
        <h1>アイデア新規作成ページ</h1>
        
        {!! Form::model($idea, ['route' => 'confirmIdeapost']) !!}
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
<!--
    </div>
</div>
-->
@endsection