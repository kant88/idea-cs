@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Idea-CS</h1>
        </div>
    </div>
    <div class="text-center" class="row">
        <div class="col-md-offset-3 col-md-6 col-md-offset-3">
        {!! Form::model($idea, ['route' => 'confirmName']) !!}
            <div class="form-group">
                {!! Form::label('name', '名前(必須)') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'class' => 'required']) !!}
            </div>
            
             {!! Form::submit('アイデア投稿用のページへ', ['class' => 'btn btn-primary', 'style'=>'margin-top:10px']) !!}
        {!! Form::close() !!}
        </div>
    </div>
@endsection
<!--    
    <div class="text-center", style="margin-top:20px">
        {!! link_to_route('ideas.create', 'アイデア投稿用のページへ', null,  ['class'=>"btn btn-primary"]) !!}
    </div>

    
    <div>
        <p><u>事前アンケート</u></p>
        <p>1. 次のなかから関心のある・・・</p>
        <input type="radio" name="check" value="check1">check1　
        <input type="radio" name="check" value="check2">check2　
        <input type="radio" name="check" value="check3">check3　
        <input type="radio" name="check" value="check4" checked >未回答
    </div>
-->    
