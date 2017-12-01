@extends('layouts.app')

@section('content')
    <style>
        li {
            display: list-item;  /* 縦に並べる */
            list-style-type: none;
            text-transform: uppercase;
            padding: 0.5em;
            }

        @media (min-width: 640px) {
          li {
            display: inline-block;  /* 640px以上のときは、横に並べる */
          }
        }
    </style>
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Idea-CS</h1>
        </div>
    </div>
    <div class="text-center" class="row">
        <div class="col-md-offset-1 col-md-10 col-md-offset-1">
            {!! Form::model($idea, ['route' => 'confirmNamepost']) !!}
            <div class="form-group">
                {!! Form::label('name', 'クラウドワークス名') !!}
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
