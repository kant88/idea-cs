@extends('layouts.app')

@section('content')
    <style>
        li {
            display: inline;
            padding-left:10px;
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
        <div style="background-color:rgba(171,255,127,0.4);">
            <h4 class="text-left" style="margin-top:40px; margin-bottom:30px;">　あなたの職場の問題点は、次のうちのどれに最もよく当てはまりますか？<br>　直感的に1つを選択して次のページにお進みください。</h4>
            <div class="form-group text-left" style="margin-bottom:30px;">
                <h5 class="text-left">人間関係</h5>
                <ul style="list-style-type: none;">
                <li>
                    {!! Form::radio('select_pcat', 3, ['class' => 'form-control']) !!}
                    {!! Form::label('select_pcat', '職場の雰囲気') !!}
                </li>
                <li>
                    {!! Form::radio('select_pcat', 4, ['class' => 'form-control']) !!}
                    {!! Form::label('select_pcat', '不平等感、不信感') !!}
                </li>
                <li>
                    {!! Form::radio('select_pcat', 5, ['class' => 'form-control']) !!}
                    {!! Form::label('select_pcat', 'コミュニケーション') !!}
                </li>
                <li>
                    {!! Form::radio('select_pcat', 6, ['class' => 'form-control']) !!}
                    {!! Form::label('select_pcat', 'ハラスメント') !!}
                </li>
                </ul>
                <h5 class="text-left">組織の制度・文化</h5>
                <ul style="list-style-type: none;">
                <li>
                    {!! Form::radio('select_pcat', 7, ['class' => 'form-control']) !!}
                    {!! Form::label('select_pcat', '制度の整備が不十分') !!}
                </li>
                <li> 
                    {!! Form::radio('select_pcat', 8, ['class' => 'form-control' ]) !!}
                    {!! Form::label('select_pcat', '人材の確保、育成') !!}
                </li>
                <li>
                    {!! Form::radio('select_pcat', 9, ['class' => 'form-control']) !!}
                    {!! Form::label('select_pcat', '非効率的な体制・慣習') !!}
                </li>
                <li>
                    {!! Form::radio('select_pcat', 10, ['class' => 'form-control' ]) !!}
                    {!! Form::label('select_pcat', '過大な負担') !!}
                </li>
                <li>
                    {!! Form::radio('select_pcat', 11,  ['class' => 'form-control']) !!}
                    {!! Form::label('select_pcat', '周囲の環境') !!}
                </li>
                </ul>
                </div>
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
